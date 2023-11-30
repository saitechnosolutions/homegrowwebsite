<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_addres;
use Illuminate\Http\Request;

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
        $state = $request->input("state");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $pincode = $request->input("pincode");

dd();
        $add_user = new user_addres;

        if (!$add_user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $add_user->address_line_one = $address;
        $add_user->state = $state;
        $add_user->city = $city;
        $add_user->address_phone_number = $phone;
        $add_user->pincode = $pincode;

        // Save changes
        if ($add_user->save()) {
            return back()->with('success', 'User updated successfully');
        } else {
            return back()->with('error', 'Error updating user');
        }

    }



}
