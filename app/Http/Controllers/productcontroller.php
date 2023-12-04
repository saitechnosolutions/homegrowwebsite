<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    //
    public function customRedirect($id){

        $productid = product::select('*')->where('id', $id)->first();
        // $descid = description::select('*')->where('productid', $Id)->first();
        // $product = subcat::all();
        return view("pages.singleproduct", compact("productid",));
    }

}
