<?php

namespace App\Http\Controllers;

use App\Models\coupon;
use App\Models\product_order;
use App\Models\productorder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function coupondats(Request $request)
    {
        $couponCode = $request->input('couponcode');
        $totalAmount = $request->input('totalamount');
        $userId = $request->input('userId');
        $taxamt = $request->input('taxamt');

        // Retrieve the coupon details
        $coupon = Coupon::where('codename', $couponCode)->first();
        $discount = $coupon->discount;
        if (!$coupon) {
            echo "Coupon not found";
            return;
        }

        $expiryDate = $coupon->end_date;
        $startDate = $coupon->start_date;
        $currentDate = Carbon::now()->format('Y-m-d');

        // Check if the user has orders with payment_status != 1
        $orderCount = product_order::where('user_id', $userId)->where('payment_status', '!=', 1)->count();

        if ($orderCount >= 0 && $currentDate >= $startDate && $currentDate <= $expiryDate) {

           $disamt = ($totalAmount * $discount) / 100;
           $totalTaxAmount = $totalAmount - $disamt;

           $responseArray = [
            'disamt' => $disamt,
            'totalAmount' => $totalAmount,
            'totalProAmount' => $totalTaxAmount,
            'taxamt' => $taxamt,
        ];

           return response()->json($responseArray);
        }
    }
}
