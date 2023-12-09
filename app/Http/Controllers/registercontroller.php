<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\state;
use App\Models\User;
use App\Models\user_addres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    //
    public function register(Request $request) {
        try {
            $lastUserId = User::max('id');
            $newUserId = sprintf('HG-CUS-%05d', $lastUserId + 1);

            $full_name = $request->full_name;
            $email = $request->email;
            $password = $request->password;
            $phone_number = $request->phone_number;
            $address = $request->address;
            $pincode = $request->pincode;

            $mobilenumbercheck = DB::table('users')->where('phone_number',$phone_number)->get();

            $stateId = $request->state;
            $state = State::find($stateId);
            $stateName = $state->name;

            $cityId = $request->city;
            $city = City::find($cityId);
            $cityName = $city->name;

            // Save data to user_addres table
            $register = new user_addres;
            if($mobilenumbercheck->count() == 0)
        {
            $emailcheck = DB::table('users')->where('email',$email)->get();
            if($emailcheck->count() == 0)
            {

            $register->user_id = $newUserId;
            $register->address_phone_number = $phone_number;
            $register->address_line_one = $address;
            $register->state_id = $stateId;
            $register->state = $stateName;
            $register->city_id = $cityId;
            $register->city = $cityName;
            $register->pincode = $pincode;

            // Save the user_addres record
            if (!$register->save()) {
                throw new \Exception('Failed to save user_addres record.');
            }

            // Get the ID of the saved user_addres record
            $userAddressId = $register->id;

            // Save data to users table
            $users = new User;
            $users->user_id = $newUserId;
            $users->name = $full_name;
            $users->first_name = $full_name;
            $users->email = $email;
            $users->password = $password;
            $users->phone_number = $phone_number;
            $users->is_guest_user = 0;

            // Save the user record
            if (!$users->save()) {
                throw new \Exception('Failed to save user record.');
            }   

            // Get the ID of the saved User record
            $userId = $users->user_id;

            // Update the User table's user_default_address_id
            User::where('user_id', $userId)->update(['user_default_address_id' => $userAddressId]);
        }
        }
            return back()->with('success', 'Register data updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update register data. ' . $e->getMessage());
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



    public function login(Request $request)
    {
        $phno = $request->input('login_mblnum');
        $password = $request->input('login_passwrd');

        $credentials = [
            'phone_number' => $request['login_mblnum'],
            'password' => $request['login_passwrd'],
        ];

        if (Auth::attempt($credentials)) {
            $user = User::where('phone_number', $phno)->first();
            Auth::login($user);
            return redirect('/')->with('success', 'Logged In Successfully..!');
        } else {
            // Check if the email is incorrect
            $user = User::where('phone_number', $phno)->first();
            if (!$user) {
                return back()->with('error', 'Email is incorrect.');
            }

            // Check if the password is incorrect
            if ($user && !Hash::check($password, $user->password)) {
                return back()->with('error', 'Password is incorrect.');
            }

            return back()->with('error', 'Invalid Credentials..!');
        }
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
