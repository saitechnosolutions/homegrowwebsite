<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\city;
use App\Models\product;
use App\Models\product_varient;
use App\Models\state;
use App\Models\User;
use App\Models\user_addres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ajaxcontroller extends Controller
{
    //
    public function updateuser(Request $request)
    {
        $user_id = $request->input("user_id");
        $name = $request->input("first_name");
        $email = $request->input("email");
        $phone_number = $request->input("phone");

        $user = User::where('user_id', $user_id)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Update user properties
        $user->name = $name;
        $user->first_name = $name;
        $user->email = $email;
        $user->phone_number = $phone_number;

        // Save changes
        $user->save();
        if ($user->save()) {
            return back()->with('success', 'User updated successfully');
        } else {
            return back()->with('error', 'Error updating user');
        }

    }



    public function add_adress(Request $request)
    {
        $user_id = $request->input("user_id");
        $address = $request->input("address");
        $stateId = $request->input("state");

        $state = state::find($stateId);
        $stateName = $state->name;

        $cityId = $request->input("city");
        $city = city::find($cityId);
        $cityName = $city->name;

        $phone = $request->input("phone");
        $pincode = $request->input("pincode");
        $landmark = $request->input("landmark");

        $defaultAddress = $request->has('status');


        $add_user = new user_addres;


        if (!$add_user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $add_user->user_id = $user_id;
        $add_user->address_line_one = $address;
        $add_user->state_id = $stateId;
        $add_user->state = $stateName;
        $add_user->city_id = $cityId;
        $add_user->city = $cityName;
        $add_user->address_phone_number = $phone;
        $add_user->pincode = $pincode;
        $add_user->landmark = $landmark;

        // Save changes
        if ($add_user->save()) {
            if ($defaultAddress) {
                 $user = User::where('user_id', $user_id)->first();

                //  dd( $user);
                if ($user) {
                    $user->user_default_address_id = $add_user->id;
                    $user->save();
                }
            }

            return back()->with('success', 'User updated successfully');
        } else {
            return back()->with('error', 'Error updating user');
        }

    }





    public function make_default_address($id){

        $newDefaultAddressId = $id;

        $user_one = auth()->user();

        if ($user_one) {
            $user_one->user_default_address_id = $newDefaultAddressId;

            if ($user_one->save()) {
                return back()->with('success', 'User default address updated successfully.');
            } else {
                return back()->with('error', 'Failed to update the user default address.');
            }
        } else {
            return back()->with('error', 'User not authenticated');
        }
    }



    public function edit_manage_addres($id){

        $editaddres = user_addres::where('id', $id)->first();

        return view('pages.edit_manage_addres', compact('editaddres'));

    }


    public function edit_update_managae_address(Request $request){

        $user_adress_id = $request->user_address_id;
        $address = $request->address;

        $stateId = $request->state;
        $state = state::find($stateId);
        $stateName = $state->name;

        $cityId = $request->city;
        $city = city::find($cityId);
        $cityName = $city->name;

        $phone = $request->phone;
        $pincode = $request->pincode;
        $landmark = $request->landmark;


        $edit_user =  user_addres::find($user_adress_id);


        $edit_user->address_line_one = $address;
        $edit_user->state_id = $stateId;
        $edit_user->state = $stateName;
        $edit_user->city_id = $cityId;
        $edit_user->city = $cityName;
        $edit_user->address_phone_number = $phone;
        $edit_user->pincode = $pincode;
        $edit_user->landmark = $landmark;

        if($edit_user->save()){
            return back()->with('Success','User updated successfully');
        }
        else{
            return back()->with('error','Error updating user');
        }

    }


    public function searchword(Request $request){

        $searchWord = $request->input;

        $products = product::where('product_name', 'like', '%' . $searchWord . '%')->get();

    return view('ajaxpages.search')->with('products', $products);
    }


    public function add_cart(Request $request){

        $user_id = $request->input("user_id");
        $product_main_id = $request->input("product_main_id");
        $productqty = $request->input("productqty");
        $prd_varient_id = $request->input("prd_varient_id");


        $existingCart = cart::where('user_id', $user_id)
        ->where('product_varient_id', $prd_varient_id)
        ->first();

        if ($existingCart) {
            // $existingCart->product_quantity += $productqty;
            // $existingCart->save();

            return response()->json(['error' => 'Already Added']);
        }else{
            $cart = new cart();

            $cart->user_id = $user_id;
            $cart->product_id = $product_main_id;
            $cart->product_varient_id = $prd_varient_id;
            $cart->product_quantity = $productqty;

            if ($cart->save()) {
                $product = product::find($product_main_id);
                $product_varient = product_varient::find($prd_varient_id);

                return response()->json([
                    'success' => true,
                'product_name' => $product->product_name,
                'mrp_price' => $product_varient->mrp_price,
                'offer_price' => $product_varient->offer_price,
                ]);
            } else {
                return response()->json(['error' => 'Failed to add to cart']);
            }
        }

    }



    public function removecart($id)
    {
        // dd($id);
        $cart = DB::table('carts')
        ->where('id',$id)
        ->delete();
        if($cart){
            return response()->json(['success' => 'Removed']);
        }

    }

    public function cartremove_all_cart($id){
        
        $remove_all_cart = DB::table('carts')
        ->where('user_id',$id)
        ->delete();
        if($remove_all_cart){
            return response()->json(['success' => 'Removed']);
        }
    }



}
