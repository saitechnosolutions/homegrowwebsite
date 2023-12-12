@extends('layouts.default')
@section('main-content')
    <style>
        .form-control[readonly] {
            background-color: #fff;
        }
    </style>
    <section class="mycart_section">
        <div class="container">
            <div class="row">
                <h5 class="all1"> <span class="pr1"> Checkout </span></h5>
            </div>
        </div>
    </section>


    <section class="shipment_section">
        <div class="container">
            <div class="row date_dfj">
                <div class="col-lg-5">
                    <div class="pays">
                        <h5 class="ters">Shipping</h5>
                        <h5><span>-</span><i class="fa fa-check-circle" aria-hidden="true"></i><span>-</span></h5>
                        <h5 class="payww">Payment</h5>
                        <h5><span>-</span><i class="fa fa-check-circle" aria-hidden="true"></i> </h5>
                    </div>

                    <form action="" method="POST">
                        <h5 class="conty_de">Contact Details</h5>
                        @php
                            $user = Auth::user();

                            $userData = null; // Initialize $userData to null

                            if ($user) {
                                $userId = $user->user_id;

                                $userData = App\Models\User::join('user_addresses', 'users.user_id', '=', 'user_addresses.user_id')
                                    ->where('users.user_id', $userId)
                                    ->select('users.name', 'users.phone_number', 'users.email', 'user_addresses.address_line_one', 'user_addresses.city', 'user_addresses.state', 'user_addresses.pincode', 'user_addresses.area_name')
                                    ->first();
                            }
                        @endphp
                        @if ($user && $userData)
                            <div class="row  ruyt">

                                <div>
                                    <label for="" class="label_ui">Full Name (First and Last Name)</label>
                                    <div class="form-group">
                                        <input type="text" id="us_id" value="{{ $userData->name }}"
                                            class="form-control c_userid" name="us_id">
                                    </div>
                                </div>
                                <div class="" data-aos="fade-up" data-aos-duration="500">
                                    <div class="form-group">
                                        <label for="PhoneNumber" class="label_ui">Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+91</span>
                                            </div>
                                            <input type="text" class="form-control c_phone"
                                                value="{{ $userData->phone_number }}" id="PhoneNumber" name="phone"
                                                placeholder="Enter Your Phone Number Here" maxlength="10" required
                                                onkeypress="return phone2(event);">
                                        </div>
                                        <span id="message3" class="text-danger"></span>
                                    </div>
                                </div>
                                <div>
                                    <label for="" class="label_ui">Email</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control c_email" value="{{ $userData->email }}"
                                            name="" id="">
                                    </div>
                                </div>
                                <div>
                                    <label for="" class="label_ui">Address</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control c_addres"
                                            value="{{ $userData->address_line_one }}" name="" id="">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <div class="form-group">
                                        <label for="" class="">Pincode</label>
                                        <input type="text" value="{{ $userData->pincode }}"
                                            class="form-control pincode c_pincode" id="pin_code_type" name="pin_code"
                                            pattern="[0-9]{6}" maxlength="6" onkeypress="return phone1(event);"
                                            oninput="checkPhoneNumberLength(this)">
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-4">
                                    <div class="form-group">
                                        <label for="" class="">State</label>
                                        <input type="text" value="{{ $userData->state }}" class="form-control c_state"
                                            class="" id="pin_state" name="pin_state" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-4">
                                    <div class="form-group">
                                        <label for="" class="">District</label>
                                        <input type="text" value="{{ $userData->city }}" class="form-control c_city"
                                            class="" id="pin_district" name="pin_district" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-4">
                                    <div class="form-group">
                                        <label for="" class="">Area</label>
                                        <select name="city_input" class="form-select areas c_landmark" id="city_input">
                                            <option value="" hidden>Select Area</option>
                                            @php
                                                $area = App\Models\user_addres::where('area_name', '=', $userData->area_name)->first();
                                            @endphp
                                            <option value="{{ $userData->area_name }}"
                                                @if ($userData->area_name == $area->area_name) selected @endif>{{ $userData->area_name }}
                                            </option>

                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-12 pt-3">
                                    <div class="form-group  ">
                                        <input class="form-check-input checkout_checkbox" type="checkbox" name="status"
                                            id="exampleCheckbox">
                                        <label class="form-check-label" for="exampleCheckbox">My shipping and Billing
                                            address are the same
                                        </label>
                                    </div>
                                </div>
                                <!-- =============default form ================= -->
                                <div class="row same_adress_row" style="display: none;">
                                    <div>
                                        <label for="" class="label_ui">Full Name (First and Last Name)</label>
                                        <div class="form-group">
                                            <input type="text" value="" class="form-control d_name"
                                                name="">
                                        </div>
                                    </div>
                                    <div class="" data-aos="fade-up" data-aos-duration="500">
                                        <div class="form-group">
                                            <label for="PhoneNumber" class="label_ui">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">+91</span>
                                                </div>
                                                <input type="text" class="form-control d_phone" value=""
                                                    id="PhoneNumber" name="phone"
                                                    placeholder="Enter Your Phone Number Here" maxlength="10" required
                                                    onkeypress="return phone2(event);">
                                            </div>
                                            <span id="message3" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="label_ui">Email</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control d_email" value=""
                                                name="" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="label_ui">Address</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control d_address" value=""
                                                name="" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group">
                                            <label for="" class="">Pincode</label>
                                            <input type="text" class="form-control pincode d_pincode"
                                                id="pin_code_type" name="pin_code" pattern="[0-9]{6}" maxlength="6"
                                                onkeypress="return phone1(event);" oninput="checkPhoneNumberLength(this)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group">
                                            <label for="" class="">State</label>
                                            <input type="text" class="form-control d_state" id="pin_state"
                                                name="pin_state" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group">
                                            <label for="" class="">District</label>
                                            <input type="text" class="form-control d_city" id="pin_district"
                                                name="pin_district" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group">
                                            <label for="" class="">Area</label>
                                            <select name="city_input" class="form-select areas d_landmark"
                                                id="city_input">
                                            </select>
                                        </div>
                                    </div>

                                </div> --}}
                                {{-- <div class="col-lg-5 pt-4">
                                    <div class="tree text-center">
                                        <a href="" class="btn  home-btn3">
                                            Use this address</a>
                                    </div>
                                </div> --}}
                            </div>
                        @endif
                    </form>
                </div>
                @php
                    $totalAmount = 0;
                    $discount = 0;
                @endphp



                @foreach ($prodetails['proprice'] as $pro)
                    @php
                        $totalAmount += (float) $pro;
                    @endphp
                @endforeach

                @php
                    $totalGst = 0;
                @endphp

                @foreach ($prodetails['gst'] as $key => $gst)
                    {{-- @dd($gst) --}}
                    @php

                        $totalGst += ($prodetails['proprice'][$key] * (float) $gst) / 100;
                    @endphp
                @endforeach
                <div class="col-lg-4 ">
                    <div class="row sticky-top   trtt">
                        <div class="go_chec ">
                            <div class="row  tere">
                                <label for="" class="coup_label">Have a coupon?</label>
                                <div class="input-group mb-3 mt-1">
                                    <input type="hidden" class="loginid" name="user_id" value="{{ $user->user_id }}">
                                    <input type="text" class="form-control coupocode" name="couponcode"
                                        placeholder="Add Coupon" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <input type="hidden" class="totalamt" name="totalamt" value="{{ $totalAmount }}">
                                    {{-- <input type="hidden" class="taxamt" value="{{ $prodetails['gst'] }}" name="taxamt"> --}}
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text coupon_btn"
                                            id="basic-addon2">Apply</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="go_chec ">
                            <div class="row  tere">
                                <div class="col-lg-12  retfyy">
                                    <div class="bo_che">
                                        <div class="sub_to1">
                                            <h5 class="subtot1">Subtotal:</h5>
                                            <input type="hidden" class="totalamt" value="{{ $totalAmount }}"
                                                name="">
                                            <h5 class="subtot1 productamt">₹{{ number_format($totalAmount, 2) }}</h5>
                                        </div>
                                        <div class="sub_to1">
                                            <h5 class="subtot1">Discount:</h5>
                                            <h5 class="subtot1 text_re discountprint">-₹0.00</h5>
                                            <input type="hidden" value="0" class="discamnt">
                                        </div>
                                        <div class="sub_to1">
                                            <h5 class="subtot1">Tax:</h5>
                                            <input type="hidden" class="tax_amt_display" value="{{ $totalGst }}"
                                                name="">
                                            <h5 class="subtot1 text_gre textamt">+ ₹ {{ $totalGst }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="bo_che1">
                                    <div class="sub_to">
                                        <h5 class="tot1">Total:</h5>
                                        <h5 class="tot" id="proamt">₹ 0.00</h5>
                                        <input type="hidden" class="finalpay" value="">
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn  home-btn4">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
