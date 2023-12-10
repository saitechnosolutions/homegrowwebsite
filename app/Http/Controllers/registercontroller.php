<?php

namespace App\Http\Controllers;

use App\Models\AllIndiaPincode;
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
    public function register(Request $request)
    {
        try {
            $lastUserId = User::max('id');
            $newUserId = sprintf('HG-CUS-%05d', $lastUserId + 1);

            $full_name = $request->full_name;
            $email = $request->email;
            $password = $request->password;
            $phone_number = $request->phone_number;
            $address = $request->address;
            $pin_state = $request->pin_state;
            $pin_district = $request->pin_district;
            $city_input = $request->city_input;
            $pincode = $request->pin_code;

            // Check if the phone number already exists
            $mobileNumberCheck = DB::table('users')->where('phone_number', $phone_number)->count();

            if ($mobileNumberCheck > 0) {
                throw new \Exception('Phone number already exists.');
            }

            // Check if the email already exists
            // $emailCheck = DB::table('users')->where('email', $email)->count();

            // if ($emailCheck > 0) {
            //     throw new \Exception('Email already exists.');
            // }

            // Save data to user_addres table
            $register = new user_addres;
            $register->user_id = $newUserId;
            $register->address_phone_number = $phone_number;
            $register->address_line_one = $address;
            $register->state = $pin_state;
            $register->city = $pin_district;
            $register->landmark = $city_input;
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

            return response()->json(['success' => 'Register data updated successfully']);
        } catch (\Exception $e) {
            // Check if the exception message contains specific error messages
            if (strpos($e->getMessage(), 'Phone number already exists') !== false) {
                return response()->json(['error' => 'This phone number has already been registered.'], 422);
            }

            return response()->json(['error' => 'Failed to update register data. ' . $e->getMessage()], 500);
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
            return response()->json(['success' => 'Logged In Successfully..!']);
        } else {
            $user = User::where('phone_number', $phno)->first();

            // Check if the user exists
            if (!$user) {
                return response()->json(['error' => 'Mobile Number is incorrect.']);
            }

            // Check if the password is incorrect
            if ($user && !Hash::check($password, $user->password)) {
                return response()->json(['error' => 'Password is incorrect.']);
            }

            return response()->json(['error' => 'Invalid Credentials..!']);
        }
    }



    public function getAddressDetails(Request $request)
    {
        $pincode = $request->get('pincode');

        // Make a request to the external API using the pincode
        $databaseData = AllIndiaPincode::where('pincode', $pincode)->get();

        $cities = [];

        if ($databaseData->isNotEmpty()) {
            foreach ($databaseData as $pincodeRow) {
                $city = $pincodeRow->officename;
                $district = $pincodeRow->Districtname;
                $state = $pincodeRow->statename;

                // Add city and state details to the array
                $cities[] = "City: $city, District: $district, State: $state";
            }

            // Return the response after processing all items in the collection
            return response()->json($cities);
        }

        // If $databaseData is empty, you may want to handle this case accordingly
        // For example, return an empty array or a specific message
        return response()->json([]);
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
