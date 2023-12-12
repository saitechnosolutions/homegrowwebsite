<?php

namespace App\Http\Controllers;

use App\Models\product_varient;
use App\Models\productslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allproductcontroller extends Controller
{
    //

    // YourController.php
            public function getAllVariants()
        {
            $products = product_varient::all();

            return view('ajaxpages.hotdeal', ['products' => $products]);
        }
        public function getCategory(Request $request)
        {
            $categoryId = $request->input('categoryId');
            $filters = $request->input('checkedValues'); // Assuming checkedValues is an array


            $products = product_varient::where('categoryid', $categoryId);

            if($filters) {
                foreach ($filters as $key => $filter) {
                    if (!empty($filter) && $filter == 3) {
                        $products->where('hot_deals', 1);
                    }

                    if (!empty($filter) && $filter == 4) {
                        $products = DB::table('product_varient')->orderBy('id', 'desc')->limit(5);
                    }

                    if (!empty($filter) && $filter == 1) {
                        $products = DB::table('product_varient')
                        ->join(
                            DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
                                    FROM product_slots
                                    GROUP BY product_varient_id
                                    HAVING count >= 2) as counts'),
                            'product_varient.id', '=', 'counts.product_varient_id'
                        )
                        ;
                    }

                }
            }

            $products = $products->get();


            return view('ajaxpages.hotdeal', ['products' => $products]);
        }


        public function hotdeal(Request $request)
        {
            $checkboxValues = $request->input('option');

            if (in_array('3', $checkboxValues) && in_array('1', $checkboxValues)) {
                // Handle the case when both '3' and '1' are selected
                $products = DB::table('product_varient')
                    ->where('hot_deals', 1)
                    ->orWhere(function ($query) {
                        $query->join(
                            DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
                                    FROM product_slots
                                    GROUP BY product_varient_id
                                    HAVING count >= 2) as counts'),
                            'product_varient.id', '=', 'counts.product_varient_id'
                        );
                    })
                    ->get();
            } elseif (in_array('1', $checkboxValues) && in_array('4', $checkboxValues)) {
                // Handle the case when both '1' and '4' are selected
                $products = DB::table('product_varient')
                    ->join(
                        DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
                                FROM product_slots
                                GROUP BY product_varient_id
                                HAVING count >= 2) as counts'),
                        'product_varient.id', '=', 'counts.product_varient_id'
                    )
                    ->orderBy('id', 'desc')
                    ->limit(5)
                    ->get();
            } elseif (in_array('4', $checkboxValues) && in_array('3', $checkboxValues)) {
                // Handle the case when both '4' and '3' are selected
                $products = DB::table('product_varient')
                    ->where('hot_deals', 1)
                    ->orderBy('id', 'desc')
                    ->limit(5)
                    ->get();
            } elseif (in_array('3', $checkboxValues)) {
                // Handle the case when only '3' is selected
                $products = DB::table('product_varient')->where('hot_deals', 1)->get();
            } elseif (in_array('4', $checkboxValues)) {
                // Handle the case when only '4' is selected
                $products = DB::table('product_varient')->orderBy('id', 'desc')->limit(5)->get();
            } elseif (in_array('1', $checkboxValues)) {
                // Handle the case when only '1' is selected
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
                // Handle the case when none of the checkboxes are selected
                $products = DB::table('product_varient')->get();
            }

            if ($products->count() == 0) {
                return view('ajaxpages.nodata');
            }

            return view('ajaxpages.hotdeal', ['products' => $products]);
        }







    public function pricefilter(Request $request){

        $min_num = $request->input("min_num");
        $max_num = $request->input("max_num");

        $products = product_varient::whereBetween('offer_price', [$min_num, $max_num])->get();
        if ($products->count() == 0) {
            return view('ajaxpages.nodata');
        }

        return view('ajaxpages.hotdeal', ['products' => $products]);
    }




// ==================12= 12 =2023

    // public function hotdeal(Request $request){

    //     $checkboxValues = $request->input('option');


    //     if (in_array('3', $checkboxValues)) {
    //         $products = DB::table('product_varient')->where('hot_deals', 1)->get();
    //     } elseif (in_array('4', $checkboxValues)) {
    //         $products = DB::table('product_varient')->orderBy('id', 'desc')->limit(5)->get();
    //     } elseif (in_array('1', $checkboxValues)) {
    //         $products = DB::table('product_varient')
    //             ->join(
    //                 DB::raw('(SELECT product_varient_id, COUNT(product_varient_id) as count
    //                         FROM product_slots
    //                         GROUP BY product_varient_id
    //                         HAVING count >= 2) as counts'),
    //                 'product_varient.id', '=', 'counts.product_varient_id'
    //             )
    //             ->get();
    //     } else {
    //         $products = DB::table('product_varient')->get();
    //     }

    //     if ($products->count() == 0) {
    //     return view('ajaxpages.nodata');
    //     }

    //     return view('ajaxpages.hotdeal', ['products' => $products]);

    // }




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
