<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Crypto; // Assuming Crypto.php is located in the correct path
use App\Models\ProductSlot;
use App\Models\ProductOrder;
use App\Models\ProductVarient;
use App\Models\ProductStock;
use App\Models\User;
use App\Models\ProductTracking;
use App\Models\Cart;
use App\Models\ProductOrderUserAddress;
use Illuminate\Support\Facades\DB;
require("sendsms.php");

use Illuminate\Support\Facades\Auth;

class PaymentResponseController extends Controller
{
    public function handleResponse(Request $request)
    {
        error_reporting(0);
        
        $order_id = $request->orderNo;
        
        $order_details = DB::table('product_orders')->where('order_id',$order_id)->first();
        $productOrder =   ProductOrder::query()->where("order_id", $order_id)->first();
        $userId = $productOrder->user_id;

        $workingKey = "700D058D1A867B8A6E81FC5AC174FF75"; // Working Key provided by CCAvenue
        $encResponse = $request->input("encResp"); // Response sent by CCAvenue Server
        $crypto = new Crypto();

        $rcvdString = $crypto->decryptCC($encResponse, $workingKey); // Decrypting using the specified working key
        
        // Parse the decrypted data
        $decryptValues = explode("&", $rcvdString);

        $order_status = "";
        $pid = "";
        $web = "";
        // Parse the decrypted values
        foreach ($decryptValues as $value) {
            $information = explode("=", $value);
            if ($information[0] == "order_status") {
                $order_status = $information[1];
            }
            if ($i == 0) {
                $pid = $information[1];
            }
            if ($i == 27) {
                $web = $information[1];
            }
            // You can extract other values similarly if needed
        }

        // Handle different order statuses
        if ($order_status === "Success") {
            $msg = "Thank you for shopping with us. Your transaction is successful. We will be shipping your order to you soon.";
            
            // to update success details
            $user = User::query()->where("user_id", $userId)->with("defaultAddress")->first();
            $productOrder = ProductOrder::query()->where("order_id", $order_id)->first();
            $productSlot = ProductSlot::query()->where("order_id", $order_id)->get();
            
            $productOrder->update([
                "payment_status" => 1
            ]);
            
            $this->addProductOrderDeliveryAddress($order_id, $user);
            Cart::where("user_id", $userId)->delete();
            
            // to reduce stock after product
            
            foreach ($productSlot as $slot) {
                $productVarientId = $slot['product_varient_id'];
                $quantity = $slot['quantity'];
    
                // Get the current stock information for the product
                $productStock = ProductStock::where('pro_ver_id', $productVarientId)->first();
                $productVarient = ProductVarient::where('id', $productVarientId)->first();
    
                // Update available_stock and sale_stock based on the quantity
                $availableStock = $productStock->availablestock - $quantity;
                $saleStock = $productStock->salestock + $quantity;
                
                $productVarientAvailQty = $productVarient->product_qty - $quantity;
    
                // Update the ProductStock table
                ProductStock::where('pro_ver_id', $productVarientId)->update([
                    'availablestock' => $availableStock,
                    'salestock' => $saleStock,
                ]);
                
                // Update the Product Varient Qty table
                ProductVarient::where('id', $productVarientId)->update([
                    'product_qty' => $productVarientAvailQty,
                ]);
    
            }
            
            // product tracking
            
            $slotorderid = $productOrder->order_id;
            $soltuserid = $productOrder->user_id;
            
            $productDispaths = new ProductTracking();
            $productDispaths->order_id = $slotorderid;
            $productDispaths->delivery_status = 0;
            $productDispaths->user_id = $soltuserid;
            $productDispaths->save();
            
            // $mobileNumber = "7871065990";
            $mobileNumber = $user->phone_number;

            // OTP Sent
            $code = rand(1000, 10000);
            // Sending SMS
            $url = 'http://sms.saitechnosolutions.net/sendsms/?token=65ab66d7e425fb1c47b11765760709ae&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
            // $url = 'http://sms.saitechnosolutions.net/sendsms/?token=87c13d427e12b47a9f6535878483d96a&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
            $token = '65ab66d7e425fb1c47b11765760709ae';
            $credit = '2';
            // $sender = 'STSCBE';
            $sender = 'HOMGRO';
            // $message = "OTP for your Sai Techno Solutions Login Verification is $code. Do Not Share this with anyone. - Sai Techno Solutions";
            $message = "Your order has been successfully placed with Home Grow. Your Order ID is $order_id. Thank you for purchasing with us. We will notify you when it is dispatched. - Team Home Grow";
            $number = $mobileNumber;
    
    
            $sendsms = new SendSms($url, $token);
            $messageId = $sendsms->sendmessage($credit, $sender, $message, $number);
            $sendsms->checkdlr($messageId);
            $sendsms->availablecredit($credit);
           
            // Logic for successful payment
            return view('payment.response',["message"=>$msg,"web"=>$web]);
        } elseif ($order_status === "Aborted") {
            $msg = "Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
            // Logic for aborted transaction
            return view('payment.aborted',["message"=>$msg,"web"=>$web]);
        } elseif ($order_status === "Failure") {
            $msg = "Thank you for shopping with us.However,the transaction has been declined.";
            // Logic for failed transaction
            return view('payment.failure',["message"=>$msg,"web"=>$web]);
        } else {
            $msg = "Security Error. Illegal access detected";
            // Security error handling
            return view('payment.security_error',["message"=>$msg,"web"=>$web]);
        }
    }
    
    // ================= Website function ===========================================
    public function handleResponseWeb(Request $request)
    {
        error_reporting(0);
        
        $order_id = $request->orderNo;
        
        $order_details = DB::table('product_orders')->where('order_id',$order_id)->first();
        $productOrder =   ProductOrder::query()->where("order_id", $order_id)->first();
        $userId = $productOrder->user_id;
             $user = User::query()->where("user_id", $userId)->with("defaultAddress")->first();

        $workingKey = "700D058D1A867B8A6E81FC5AC174FF75"; // Working Key provided by CCAvenue
        $encResponse = $request->input("encResp"); // Response sent by CCAvenue Server
        $crypto = new Crypto();

        $rcvdString = $crypto->decryptCC($encResponse, $workingKey); // Decrypting using the specified working key
        
        // Parse the decrypted data
        $decryptValues = explode("&", $rcvdString);

        $order_status = "";
        $pid = "";
        $web = "";
        // Parse the decrypted values
        foreach ($decryptValues as $value) {
            $information = explode("=", $value);
            if ($information[0] == "order_status") {
                $order_status = $information[1];
            }
            if ($i == 0) {
                $pid = $information[1];
            }
            if ($i == 27) {
                $web = $information[1];
            }
            // You can extract other values similarly if needed
        }

        // Handle different order statuses
        if ($order_status === "Success") {
            $msg = "Thank you for shopping with us. Your transaction is successful. We will be shipping your order to you soon.";
            
            // to update success details
            $user = User::query()->where("user_id", $userId)->with("defaultAddress")->first();
            $productOrder = ProductOrder::query()->where("order_id", $order_id)->first();
            $productSlot = ProductSlot::query()->where("order_id", $order_id)->get();
            
            $productOrder->update([
                "payment_status" => 1
            ]);
            
            $this->addProductOrderDeliveryAddress($order_id, $user);
            Cart::where("user_id", $userId)->delete();
            
            // to reduce stock after product
            
            foreach ($productSlot as $slot) {
                $productVarientId = $slot['product_varient_id'];
                $quantity = $slot['quantity'];
    
                // Get the current stock information for the product
                $productStock = ProductStock::where('pro_ver_id', $productVarientId)->first();
                $productVarient = ProductVarient::where('id', $productVarientId)->first();
    
                // Update available_stock and sale_stock based on the quantity
                $availableStock = $productStock->availablestock - $quantity;
                $saleStock = $productStock->salestock + $quantity;
                
                $productVarientAvailQty = $productVarient->product_qty - $quantity;
    
                // Update the ProductStock table
                ProductStock::where('pro_ver_id', $productVarientId)->update([
                    'availablestock' => $availableStock,
                    'salestock' => $saleStock,
                ]);
                
                // Update the Product Varient Qty table
                ProductVarient::where('id', $productVarientId)->update([
                    'product_qty' => $productVarientAvailQty,
                ]);
    
            }
            
            // product tracking
            
            $slotorderid = $productOrder->order_id;
            $soltuserid = $productOrder->user_id;
            
            $productDispaths = new ProductTracking();
            $productDispaths->order_id = $slotorderid;
            $productDispaths->delivery_status = 0;
            $productDispaths->user_id = $soltuserid;
            $productDispaths->save();
            
            // $mobileNumber = "7871065990";
            $mobileNumber = $user->phone_number;

            // OTP Sent
            $code = rand(1000, 10000);
            // Sending SMS
            $url = 'http://sms.saitechnosolutions.net/sendsms/?token=65ab66d7e425fb1c47b11765760709ae&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
            // $url = 'http://sms.saitechnosolutions.net/sendsms/?token=87c13d427e12b47a9f6535878483d96a&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
            $token = '65ab66d7e425fb1c47b11765760709ae';
            $credit = '2';
            // $sender = 'STSCBE';
            $sender = 'HOMGRO';
            // $message = "OTP for your Sai Techno Solutions Login Verification is $code. Do Not Share this with anyone. - Sai Techno Solutions";
            $message = "Your order has been successfully placed with Home Grow. Your Order ID is $order_id. Thank you for purchasing with us. We will notify you when it is dispatched. - Team Home Grow";
            $number = $mobileNumber;
    
    
            $sendsms = new SendSms($url, $token);
            $messageId = $sendsms->sendmessage($credit, $sender, $message, $number);
            $sendsms->checkdlr($messageId);
            $sendsms->availablecredit($credit);
              Auth::login($user);
            // Logic for successful payment
            return view('payment.response_web',["message"=>$msg,"web"=>$web]);
        } elseif ($order_status === "Aborted") {
               Auth::login($user);
            $msg = "Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
            // Logic for aborted transaction
            return view('payment.aborted_web',["message"=>$msg,"web"=>$web]);
        } elseif ($order_status === "Failure") {
            
                   

        
            Auth::login($user);
    
    
    

            $msg = "Thank you for shopping with us.However,the transaction has been declined.";
            // Logic for failed transaction
            return view('payment.failure_web',["message"=>$msg,"web"=>$web]);
        } else {
            $msg = "Security Error. Illegal access detected";
               Auth::login($user);
            // Security error handling
            return view('payment.security_error_web',["message"=>$msg,"web"=>$web]);
        }
    }
    
    public function addProductOrderDeliveryAddress($orderId, $user)
    {
        $defaultUserAddress =  $user->defaultAddress->toArray();
        ProductOrderUserAddress::create([
            ...$defaultUserAddress,
            "order_id" => $orderId,
        ]);
    }
    
}