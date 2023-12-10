@extends('layouts.default')
@section('main-content')
    <div class="myaccount_section"></div>
    <section class="myaccount_section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="acc">My <span class="ct"> Account</span> </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="my_acc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-8  col-md-8">
                    <h5><strong>Manage  </strong> Address</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3  col-md-5">
                    <div class="sticky-top">
                        <a href="/myaccount" class="accounting ">
                            <img src="/assets/images/usr.png" alt="">
                            <div class="names">
                                <h5 class="hel1">Hello,</h5>
                                <h5 class="hel2">Bharani Dharan</h5>
                            </div>
                        </a>

                        <div class="accounting2">
                            <ul class="manages">
                                <li class="listers"><a href="/myaccount" class="vart ">My Orders</a></li>
                                <li class="listers"><a href="/accountsetting" class="vart ">Account Settings</a></li>
                                <li class="listers"><a href="/editaddress" class="vart active">Manage Addresses</a></li>
                            </ul>
                        </div>
                        <a href="/logout" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7  col-md-7">
                    <div class="orders1">
                        <form action="" class="edit_manage_addres">
                            @csrf
                            <div class="row ac_sett justify-content-center">
                                <input type="hidden" name="user_address_id" value="{{ $editaddres->id }}" id="">
                                <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $editaddres->address_line_one }}">
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">State</label>
                                        <select name="state" id="" class="form-select state">
                                            <option value="" hidden>Select State</option>
                                            @if ($states = App\models\state::all())
                                                @foreach ($states as $st)
                                                    <option value="{{ $st->id }}">{{ $st->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">City</label>
                                        <select name="city" id="" class="form-select city">
                                            <option value="" hidden>Select City</option>
                                            @if ($states = App\models\city::all())
                                                @foreach ($states as $st)
                                                    <option value="{{ $st->id }}">{{ $st->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6">
                                    <div class="toors">
                                        <div class="form-group">
                                            <label for="" class="roboto_set">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">+91</span>
                                                </div>
                                                <input type="text" class="form-control phone" id="PhoneNumber" name="phone"
                                                    placeholder="Enter Your Phone Number Here" maxlength="10" value="{{ $editaddres->address_phone_number }}" required
                                                    onkeypress="return phone1(event);"  oninput="checkPhoneNumberLength(this)">
                                            </div>
                                            <span id="message3" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Pincode</label>
                                        <input type="text" class="form-control" maxlength="6" name="pincode" id="pin_code_type" value="{{ $editaddres->pincode }}"  pattern="[0-9]{6}" onkeypress="return phone1(event);">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">State</label>
                                        <input type="text" class="form-control pin_state" id="pin_state" name="pin_state" value="{{ $editaddres->state }}"
                                            readonly>
                                        <span id="message4" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">District</label>
                                        <input type="text" class="form-control pin_district" id="pin_district" value="{{ $editaddres->city }}"
                                            name="pin_district" readonly>
                                        <span id="message5" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">Area</label>
                                        <select name="city_input" class="form-select city_input" id="city_input">
                                            <option value="" hidden>Select Area</option>
                                            <option value="{{ $editaddres->landmark }}" id="city_input" selected>{{ $editaddres->landmark }}</option>
                                            <!-- Add more options if needed -->
                                        </select>
                                        <span id="message6" class="text-danger"></span>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-12">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Landmark</label>
                                        <input type="text" class="form-control" name="landmark" value="{{ $editaddres->landmark }}">
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-12 pt-2">
                                    <div class="form-group">
                                        <input class="form-check-input" type="checkbox" name="status" id="exampleCheckbox">
                                        <label class="form-check-label" for="exampleCheckbox">Make this my default address
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4">
                                    <button type="button"  id="edit_adress" class="btn home-btn3 mt-4">Edit Address </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
