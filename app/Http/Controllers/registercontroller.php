<?php

namespace App\Http\Controllers;

use App\Models\state;
use App\Models\User;
use App\Models\user_addres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registercontroller extends Controller
{
    //
    public function register(Request $request) {

        $lastUserId = User::max('id');
        $newUserId = sprintf('HG-CUS-%05d', $lastUserId + 1);

        $full_name = $request->full_name;
        $email = $request->email;
        $password = $request->password;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $state_id = new state();
        $state = $request->state;
        $city = $request->city;
        $pincode = $request->pincode;

        $register = new user_addres;

        $register->user_id = $newUserId;
        $register->address_phone_number = $phone_number;
        $register->address_line_one = $address;
        $register->state_id = $state;
        $register->city_id = $city;
        $register->pincode = $pincode;

        $users = new User;

        $users->user_id = $newUserId;
        $users->name = $full_name;
        $users->first_name = $full_name;
        $users->email = $email;
        $users->password = $password;
        $users->phone_number = $phone_number;
        $users->is_guest_user = 0;

        @dd($register);
        @dd($users);

        if ($register->save()) {
            return back()->with('success', 'Register data updated successfully.');
        }

    }

    public function city($id)
    {
        $city = DB::table('cities')
        ->select('id', 'name')
        ->where('state_id', $id)
        ->orderBy('name', 'asc')
        ->get();

    return response()->json($city);
    }
}
