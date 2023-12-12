<?php

namespace App\Http\Controllers;

use App\Models\product_varient;
use App\Models\User;

use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function singlproData(Request $request)
    {


        $prodetails = $request->all();
// dd($prodetails);
        return view('pages.checkout',compact("prodetails"));
    }

}
