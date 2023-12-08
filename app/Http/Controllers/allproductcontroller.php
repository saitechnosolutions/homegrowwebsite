<?php

namespace App\Http\Controllers;

use App\Models\productslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allproductcontroller extends Controller
{
    //
    public function hotdeal(Request $request){

        $checkboxValues = $request->input('option');


        if (in_array('3', $checkboxValues)) {
            $products = DB::table('product_varient')->where('hot_deals', 1)->get();
        } elseif (in_array('4', $checkboxValues)) {
            $products = DB::table('product_varient')->orderBy('id', 'desc')->limit(5)->get();
        } elseif (in_array('1', $checkboxValues)) {
            $products = DB::table('product_varient')
                ->join(
                    DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
                            FROM product_slots
                            GROUP BY product_varient_id
                            HAVING count >= 2) as counts'),
                    'product_varient.id', '=', 'counts.product_varient_id'
                )
                ->get();
        } else {
            $products = DB::table('product_varient')->get();
        }

        return view('ajaxpages.hotdeal', ['products' => $products]);




        // hot deal  products
        // if (in_array('3', $checkboxValues)) {
        //     $products = DB::table('product_varient')->where('hot_deals', 1)->get();
        //     if($products){
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     } else {
        //         $products = DB::table('product_varient')->get();
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     }
        // }

        // //  new arrival
        // if (in_array('4', $checkboxValues)) {
        //     $products = DB::table('product_varient')->orderBy('id', 'desc')->limit(5)->get();
        //     if($products){
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     } else {
        //         $products = DB::table('product_varient')->get();
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     }
        // }


        // // top selling products
        // if (in_array('1', $checkboxValues)) {

        //     $products = DB::table('product_varient')
        //     ->join(
        //         DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
        //                 FROM product_slots
        //                 GROUP BY product_varient_id
        //                 HAVING count >= 2) as counts'),
        //         'product_varient.id', '=', 'counts.product_varient_id'
        //     )
        //     ->get();

        //     if($products){
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     } else {
        //         $products = DB::table('product_varient')->get();
        //         return view('ajaxpages.hotdeal', ['products' => $products]);
        //     }
        // }


    }
}
