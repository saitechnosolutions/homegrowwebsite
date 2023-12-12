<?php
namespace App\Http\Controllers;

use App\Models\AllIndiaPincode;
use App\Models\city;
use App\Models\Otp;
use App\Models\state;
use App\Models\User;
use App\Models\user_addres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

require("sendsms.php");
class registercontroller extends Controller
{
    //
    public function register(Request $request)
    {
        try {
            $currentYear = date("y");
            $lastUserId = User::max('id');
            $newUserId = sprintf('HG-%s-%05d', $currentYear, $lastUserId + 1);
            // $lastUserId = User::max('id');
            // $newUserId = sprintf('HG-CUS-%05d', $lastUserId + 1);

            $full_name = $request->full_name;
            $email = $request->email;
            $password = $request->password;
            $phone_number = $request->phone_number;
            $address = $request->address;
            $pin_state = $request->pin_state;
            $pin_district = $request->pin_district;
            $city_input = $request->city_input;
            $pincode = $request->pin_code;
            $pincodeId = DB::table('all_india_pincodes')->select('id')->where('officename', $city_input)->first()->id;
            // Check if the phone number already exists
            $mobileNumberCheck = DB::table('users')->where('phone_number', $phone_number)->count();

            if ($mobileNumberCheck > 0) {
                throw new \Exception('Phone number already exists.');
            }

            $emailCheck = DB::table('users')->where('email', $email)->count();

            if ($emailCheck > 0) {
                return response()->json(['error' => 'Email already exists.'], 422);
            }


            // Save data to user_addres table
            $register = new user_addres;
            $register->user_id = $newUserId;
            $register->address_phone_number = $phone_number;
            $register->address_line_one = $address;
            $register->state = $pin_state;
            $register->city = $pin_district;
            $register->area_name = $city_input;
            $register->pincode = $pincode;
            $register->pincode_id = $pincodeId;

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


    public function sendOtpFunction(Request $request)
    {

        $mobileNumber = $request->input('mobile');



        // OTP Sent
        $code = rand(1000, 10000);
        // Sending SMS
        $url = 'http://sms.saitechnosolutions.net/sendsms/?token=65ab66d7e425fb1c47b11765760709ae&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
        // $url = 'http://sms.saitechnosolutions.net/sendsms/?token=87c13d427e12b47a9f6535878483d96a&credit=$credit&sender=$sender&message=$message&number=' . $mobileNumber;
        $token = '65ab66d7e425fb1c47b11765760709ae';
        $credit = '2';
        // $sender = 'STSCBE';
        $sender = 'HOMGRO';
        // $message = "OTP for your Sai Techno Solutions Login Verification is $code. Do Not Share this with anyone. - Sai Techno Solutions";
        $message = "The OTP for the verification of your Home Grow Login is $code. Do not share this with anyone. - Team Home Grow";
        $number = $mobileNumber;


        $sendsms = new SendSms($url, $token);
        $messageId = $sendsms->sendmessage($credit, $sender, $message, $number);
        $sendsms->checkdlr($messageId);
        $sendsms->availablecredit($credit);
        DB::table('otps')->insert([
            'phone_number' => $number,
            'otp' => $code,
            'validity_time' => now()->addMinutes(2)
        ]);

        $currentUser =  DB::table("users")->where("phone_number", $mobileNumber)->first();
        $currentyear = date("y");
        if (!$currentUser) {
            $lastUserId = DB::table('users')->max('id');
            $newUserId = sprintf('HG-%s-%05d', $currentyear, $lastUserId + 1);
            DB::table("users")->insert([
                "phone_number" => $number,
                "from_app" => 1,
                "user_id"=>$newUserId
            ]);
        }

        return response("Otp Send Successfully to $mobileNumber");
    }



    public function checkOtp(Request $request)
{
    // Get expected OTP (replace with your logic to retrieve the expected OTP)
    $enteredOtp =  $request->input('otp'); // Replace with your actual expected OTP

    // Get entered OTP from the request
    $expectedOtp = Otp::where('otp', $enteredOtp)->first();

    // Compare entered OTP with expected OTP
    $isOtpCorrect = $expectedOtp !== null;

    // Return the result
    if ($isOtpCorrect) {
        // OTP is correct
        return response()->json(['success' => true]);
    } else {
        // OTP is incorrect
        return response()->json(['error' => 'Incorrect OTP. Please try again.'], 400);
    }
}







    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
