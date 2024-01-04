<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Crypto;
use App\Models\ProductStock;
use App\Models\ProductOrder;
use App\Models\ProductVarient;
use App\Models\ProductSlot;
use App\Models\User;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// require_once('Crypto.php'); // Include the Crypto.php file or adjust the namespace accordingly

class PaymentController extends Controller
{

    // payment index function

    public function paymentIndexFunction(Request $request){

        $data = $request->all();
        // @dd($data);
        $userId = $request->user_id;
        $lastId = ProductOrder::max('id');
        $orderId = sprintf('HG-ORD-PR-%06d', $lastId + 1);
        ProductOrder::query()->create([
            'order_id' => $orderId, 'date_ordered_on' => now(),  'user_id' => $userId, "payment_status" => 0,
        ]);

        // get user details using user id
        $user_details = DB::table('users')->select('name','phone_number','user_default_address_id')->where('user_id',$userId)->first();

        $user_address = DB::table('user_addresses')->select('address_line_one','city','state','pincode')->where('id',$user_details->user_default_address_id)->first();

        $order = ProductOrder::query()->where("order_id", $orderId)->first();
        // dd($order);
        // $productId = str_replace("'", '"', $request->product_id);
        // $quantity = str_replace("'", '"', $request->product_quantity);
        // $productVarientId = str_replace("'", '"', $request->product_varient_id);
        $productId = json_decode(str_replace("'", '"', $request->product_id), true);
        $quantity = json_decode(str_replace("'", '"', $request->product_quantity), true);
        $productVarientId = json_decode(str_replace("'", '"', $request->product_varient_id), true);
        $delvieryDate  = date('Y-m-d', strtotime(Carbon::parse($request->from_date)));
        // dd($delvieryDate);
        $slots = [];

        $grandTotalAmount = 0;
        $totalAmount = $request->order_total_amount;
        $gst_amount = $request->gst_amount;
        $discount_amount = $request->discount_amount;

        $userId = $order->user_id;
        $user = User::query()->where("user_id", $userId)->first();


        foreach ($productVarientId as $key => $value) {
            $grandTotalAmount += (ProductVarient::findOrFail($value)->offer_price * $quantity[$key]);
            // dd($totalAmount);
            $slots[] = [
                'delivery_date' => $delvieryDate,
                'order_id' => $orderId,
                "product_id" => $productId[$key],
                "product_varient_id" => $productVarientId[$key],
                "quantity" => $quantity[$key]
                // 'created_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s'),
                // 'updated_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s')
            ];
        }

        // to display the details for users
        $data['order_id'] = $orderId;
        $data['customer_name'] = $user_details->name;
        $data['phone_number'] = $user_details->phone_number;
        $data['address'] = $user_address->address_line_one;
        $data['city'] = $user_address->city;
        $data['state'] = $user_address->state;
        $data['pincode'] = $user_address->pincode;
        $data['total_amount'] = $totalAmount;
        $data['grand_total_amount'] = $grandTotalAmount;
        $data['gst_amount'] = $gst_amount;
        $data['discount_amount'] = $discount_amount;
        $data['slots'] = $slots;

        // to convert array to object
        $order_details = (object) $data;

        // dd($order_details);

        return view('payment.index', [
            'order_details' => $order_details
        ]);
    }

    // payment index function

    public function paymentIndexWebFunction(Request $request){

        $data = $request->all();
        // @dd($data);
        $userId = $request->user_id;
        $lastId = ProductOrder::max('id');
        $orderId = sprintf('HG-ORD-PR-%06d', $lastId + 1);
        ProductOrder::query()->create([
            'order_id' => $orderId, 'date_ordered_on' => now(),  'user_id' => $userId, "payment_status" => 0,
        ]);

        // get user details using user id
        $user_details = DB::table('users')->select('name','phone_number','user_default_address_id')->where('user_id',$userId)->first();

        $user_address = DB::table('user_addresses')->select('address_line_one','city','state','pincode')->where('id',$user_details->user_default_address_id)->first();

        $order = ProductOrder::query()->where("order_id", $orderId)->first();
        // dd($order);
        // $productId = str_replace("'", '"', $request->product_id);
        // $quantity = str_replace("'", '"', $request->product_quantity);
        // $productVarientId = str_replace("'", '"', $request->product_varient_id);
        $productId = json_decode(str_replace("'", '"', $request->product_id), true);
        $quantity = json_decode(str_replace("'", '"', $request->product_quantity), true);
        $productVarientId = json_decode(str_replace("'", '"', $request->product_varient_id), true);
        $delvieryDate  = date('Y-m-d', strtotime(Carbon::parse($request->from_date)));
        // dd($delvieryDate);
        $slots = [];

        $grandTotalAmount = 0;
        $totalAmount = $request->order_total_amount;
        $gst_amount = $request->gst_amount;
        $discount_amount = $request->discount_amount;

        $userId = $order->user_id;
        $user = User::query()->where("user_id", $userId)->first();


        foreach ($productVarientId as $key => $value) {
            $grandTotalAmount += (ProductVarient::findOrFail($value)->offer_price * $quantity[$key]);
            // dd($totalAmount);
            $slots[] = [
                'delivery_date' => $delvieryDate,
                'order_id' => $orderId,
                "product_id" => $productId[$key],
                "product_varient_id" => $productVarientId[$key],
                "quantity" => $quantity[$key]
                // 'created_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s'),
                // 'updated_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s')
            ];
        }

        // to display the details for users
        $data['order_id'] = $orderId;
        $data['customer_name'] = $user_details->name;
        $data['phone_number'] = $user_details->phone_number;
        $data['address'] = $user_address->address_line_one;
        $data['city'] = $user_address->city;
        $data['state'] = $user_address->state;
        $data['pincode'] = $user_address->pincode;
        $data['total_amount'] = $totalAmount;
        $data['grand_total_amount'] = $grandTotalAmount;
        $data['gst_amount'] = $gst_amount;
        $data['discount_amount'] = $discount_amount;
        $data['slots'] = $slots;

        // to convert array to object
        $order_details = (object) $data;

        // dd($order_details);

        return view('payment.index_web', [
            'order_details' => $order_details
        ]);
    }





    // ===========================web controller ===============================================================
    public function webpaymentIndexFunction(Request $request){

        $data = $request->all();
        // @dd($data);
        $userId = $request->user_id;
        $delivery_amt = $request->delivery_amt;

        $lastId = ProductOrder::max('id');
        $orderId = sprintf('HG-ORD-PR-%06d', $lastId + 1);
        ProductOrder::query()->create([
            'order_id' => $orderId, 'date_ordered_on' => now(),  'user_id' => $userId, "payment_status" => 0,
        ]);
         $user_details = DB::table('users')->select('name','phone_number','user_default_address_id')->where('user_id',$userId)->first();
        // ================update code ================

        $firstname = str_replace("'", '"', $request->us_id);
      
        $phone = str_replace("'", '"', $request->phone);
        $email = str_replace("'", '"', $request->email);
        $address = str_replace("'", '"', $request->address_line_one);
        $pincode = str_replace("'", '"', $request->pin_code);
        $state = str_replace("'", '"', $request->pin_state);
        $city = str_replace("'", '"', $request->pin_district);
        $areaname = str_replace("'", '"', $request->city_input);

        $pincodeId = DB::table('all_india_pincodes')->select('id')->where('officename',$areaname)->first();
        $pincodeIdValue = $pincodeId ? $pincodeId->id : null;
        if($user_details->user_default_address_id == null){
            $useraddresid = DB::table('user_addresses')
            ->insertGetId([
                'user_id' => $userId,
                'address_first_name' => $firstname,
                'address_phone_number' => $phone,
                'address_line_one' => $address,
                'pincode' => $pincode,
                'pincode_id' => $pincodeIdValue,
                'state' => $state,
                'city' => $city,
                'area_name' => $areaname,
            ]);
            $userupdate = DB::table('users')
            ->where('user_id', $userId,)
            ->update([
                'name' => $firstname,
                'email' => $email,
                'user_default_address_id'=>$useraddresid
            ]);
        }

       // get user details using user id
        $user_details2 = DB::table('users')->select('name','phone_number','user_default_address_id')->where('user_id',$userId)->first();
        $user_address = DB::table('user_addresses')->select('address_line_one','city','state','pincode')->where('id',$user_details2->user_default_address_id)->first();
        $order = ProductOrder::query()->where("order_id", $orderId)->first();
        // dd($order);
        $productId = str_replace("'", '"', $request->product_id);
        $quantity = str_replace("'", '"', $request->product_quantity);
        $productVarientId = str_replace("'", '"', $request->product_varient_id);
        $delvieryDate  = date('Y-m-d', strtotime(Carbon::parse($request->from_date)));


        // ====================end ===============
        $slots = [];
        $grandTotalAmount = 0;
        $totalAmount = $request->order_total_amount ?? 0;
        $gst_amount = $request->gst_amount ?? 0;
        $discount_amount = $request->discount_amount ?? 0;
        $userId = $order->user_id;
        $user = User::query()->where("user_id", $userId)->first();


        foreach ($productVarientId as $key => $value) {
            $grandTotalAmount += (ProductVarient::findOrFail($value)->offer_price * $quantity[$key]);
            // dd($totalAmount);
            $slots[] = [
                'delivery_date' => $delvieryDate,
                'order_id' => $orderId,
                "product_id" => $productId[$key],
                "product_varient_id" => $productVarientId[$key],
                "quantity" => $quantity[$key]
                // 'created_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s'),
                // 'updated_at' => Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s')
            ];
        }

        // to display the details for users
        $data['order_id'] = $orderId;
        $data['customer_name'] = $user_details->name;
        $data['phone_number'] = $user_details->phone_number;
        $data['address'] = $user_address->address_line_one;
        $data['city'] = $user_address->city;
        $data['state'] = $user_address->state;
        $data['pincode'] = $user_address->pincode;
        $data['total_amount'] = $totalAmount;
        $data['grand_total_amount'] = $grandTotalAmount;
        $data['gst_amount'] = $gst_amount;
        $data['discount_amount'] = $discount_amount;
        $data['slots'] = $slots;

        // to convert array to object
        $order_details = (object) $data;

        // dd($order_details);

        return view('payment.index_web', [
            'order_details' => $order_details ,'delivery_amt' => $delivery_amt
        ]);
    }
    // ============================== end================================

    public function createProductSlot($slots,$totalAmount,$orderId,$grandTotal,$gstAmount,$discountAmount,$delivery_amt)
    {
        // dd($grandTotal);
        $order = ProductOrder::query()->where("order_id", $orderId)->first();
        ProductSlot::insert($slots);
        $order->update([
            "total_amount" => $totalAmount,
            "gst_amount" => $gstAmount,
            "discount_amount" => $discountAmount,
            "grand_total_amount" => $grandTotal,
            "delivery_charge" => $delivery_amt
            ]);

    }

    public function initiateTransaction(Request $request)
    {
        error_reporting(0);

        $merchant_data = '3085675';
        $working_key = '700D058D1A867B8A6E81FC5AC174FF75'; // Shared by CCAVENUES
        $access_code = 'AVER39KL07AQ48REQA'; // Shared by CCAVENUES

        $crypto = new Crypto();

        $slots = (array) json_decode($request->product_slots);
        $totalAmount = $request->amount;
        $orderId = $request->order_id;
        $grandTotal = $request->grand_total_amount;
        $gstAmount = $request->gst_amount;
        $discountAmount = $request->discount_amount;
        $delivery_amt = $request->delivery_amt;
// dd($delivery_amt);
        // dd($request->all());

        $this->createProductSlot($slots,$totalAmount,$orderId,$grandTotal,$gstAmount,$discountAmount,$delivery_amt);

        $encrypted_data = $crypto->encryptCC($this->prepareMerchantData($request->all()), $working_key);

        return view('payment.payment_request', [
            'encrypted_data' => $encrypted_data,
            'access_code' => $access_code,
        ]);
    }

    private function prepareMerchantData($requestData)
    {
        $merchant_data = '';

        foreach ($requestData as $key => $value) {
            $merchant_data .= $key . '=' . $value . '&';
        }

        return $merchant_data;
    }
}
