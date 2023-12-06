<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_varient;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    public function customRedirect($id){

        // $product_variient_id = product_varient::select('*')->where('id', $id)->first();
        $product_id = product::select('*')->where('id', $id)->first();
        // $descid = description::select('*')->where('productid', $Id)->first();
        $product_varient = product_varient::all();
        return view("pages.singleproduct", compact("product_id","product_varient"));
    }

}
