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
                <div class="col-lg-8 col-md-8">
                    <h5><strong>Add </strong> Address</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-5">
                    <div class="sticky-top">
                        <div class="accounting ">
                            <img src="/assets/images/usr.png" alt="">
                            <div class="names">
                                <h5 class="hel1">Hello,</h5>
                                <h5 class="hel2">Bharani Dharan</h5>
                            </div>
                        </div>

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
                <div class="col-lg-7 col-md-7">
                    <div class="orders1">
                        <form class="add_usering">
                            @csrf
                            <div class="row ac_sett justify-content-center">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}" id="">
                                <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Name</label>
                                        <input type="text " class="form-control firstname" name="firstname" maxlength="50">
                                        <span id="message1" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Address</label>
                                        <input type="text " class="form-control address" name="address">
                                        <span id="message1" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="toors">
                                        <div class="form-group">
                                            <label for="" class="roboto_set">Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">+91</span>
                                                </div>
                                                <input type="text" class="form-control phone" id="PhoneNumber"
                                                    name="phone" placeholder="Enter Your Phone Number Here" maxlength="10"
                                                    required onkeypress="return phone1(event);"
                                                    oninput="checkPhoneNumberLength(this)">
                                            </div>
                                            <span id="message3" class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">Pincode</label>
                                        <input type="text" maxlength="6" class="form-control pincode" id="pin_code_type"
                                            name="pin_code" pattern="[0-9]{6}" onkeypress="return phone1(event);">
                                        <span id="message2" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">State</label>
                                        <input type="text" class="form-control pin_state" id="pin_state" name="pin_state"
                                            readonly>
                                        <span id="message4" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">District</label>
                                        <input type="text" class="form-control pin_district" id="pin_district"
                                            name="pin_district" readonly>
                                        <span id="message5" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Area</label>
                                        <select name="city_input" class="form-select city_input" id="city_input">
                                            <option value="" hidden>Select Area</option>
                                            {{-- <option value="" id="city_input"></option> --}}
                                        </select>
                                        <span id="message6" class="text-danger"></span>
                                        {{-- <input type="text" class="form-control" class="" id="city_input" name="city_input"> --}}
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


                                {{-- <div class="col-lg-6">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Pincode</label>
                                        <input type="text" class="form-control" name="pincode">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-2">
                                        <label for="" class="roboto_set">Landmark</label>
                                        <input type="text" class="form-control" name="landmark">
                                    </div>
                                </div> --}}
                                <div class="col-lg-12 pt-2">
                                    <div class="form-group">
                                        <input class="form-check-input" type="checkbox" name="status"
                                            id="exampleCheckbox">
                                        <label class="form-check-label" for="exampleCheckbox">Make this my default address
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <button type="submit" id="add_adress" class="btn home-btn3 mt-4">Add Address
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')
    <script>
        $(document).ready(function() {

            const validator = new JustValidate(".add_usering", {
                validateBeforeSubmitting: true,
            });
            // const validator = new JustValidate('.updatesbanner');
            validator
            .addField('.firstname', [{
                        rule: 'required',
                    },
                    {
                        rule: 'minLength',
                        value: 3,
                    },
                    {
                        rule: 'maxLength',
                        value: 50,
                    }
                ])
                .addField('.address', [{
                        rule: 'required',
                    },
                    {
                        rule: 'minLength',
                        value: 3,
                    },
                    {
                        rule: 'maxLength',
                        value: 120,
                    }
                ])
                // .addField('.phone', [{
                //         rule: 'required',
                //     }
                // ])
                .addField('.pincode', [{
                    rule: 'required',
                }, ])


                .onSuccess(() => {
                    var add_aders = $('.add_usering').serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    swal.fire(
                        'Success',
                        'Add new user address successfully',
                        'success'
                    ).then((confirmation) => {
                        if (confirmation) {
                            $.ajax({
                                url: '/add_adress',
                                type: 'post',
                                data: add_aders,
                                success: function(response) {
                                    console.log(response);
                                    window.location.href = '/editaddress';
                                },
                                error: function(error) {
                                    console.log(error);

                                }
                            });
                        }
                    });
                });


        });
    </script>
@endsection

{{--
@section('scripts')
    <script>
        $('#add_adress').on("click", function() {
            checkusername();
            checkphonenumber();
            checkstate();
            checkdistrict();
            checkarea();
            checkpincode();


            if (checkusername() == true && checkpincode() == true && checkstate() == true && checkphonenumber() ==
                true && checkdistrict() == true && checkarea() == true) {
            } else {
                $('#add_adress').attr('type', 'button');
            }


        });

        $(".address").on('input', function() {
            checkusername();
        })
        $(".pincode").on('input', function() {
            checkpincode();
        })
        $(".pin_state").on('input', function() {
            checkstate();
        })
        $(".pin_district").on('input', function() {
            checkdistrict();
        })
        $(".city_input").on('input', function() {
            checkarea();
        })
        $(".phone").on('input', function() {
            checkphonenumber();
        })


        function checkpincode() {
            let Phonenumber = $(".pincode").val();
            var pattern = /^\d{6}$/;

            if (Phonenumber == "") {
                $('#message2').html("*Please fill the PIN code");
                $('#message2').show();
                return false;
            }  else if (!pattern.test(Phonenumber)) {
                $('#message2').html("*Please enter a valid 6-digit PIN code");
                $('#message2').show();
                return false;
            } else {
                $('#message2').hide();
                return true;
            }
        }

        // function checkPincode() {
        //     let pincode = $(".pincode").val();
        //     // Regular expression for Indian PIN code (6 digits)
        //     var pattern = /^\d{6}$/;

        //     if (pincode === "") {
        //         $('#message3').html("*Please fill the PIN code");
        //         $('#message3').show();
        //         return false;
        //     } else if (!pattern.test(pincode)) {
        //         $('#message3').html("*Please enter a valid 6-digit PIN code");
        //         $('#message3').show();
        //         return false;
        //     } else {
        //         $('#message3').hide();
        //         return true;
        //     }
        // }


        function checkstate() {
            let username = $('.pin_state').val();

            if (username == '') {
                $("#message4").html("*Please enter correct the pincode ");
                $("#message4").show();
                return false
            } else {
                $('#message4').hide();
                return true
            }

        }

        function checkdistrict() {
            let username = $('.pin_district').val();

            if (username == '') {
                $("#message5").html("*Please enter correct the pincode ");
                $("#message5").show();
                return false
            } else {
                $('#message5').hide();
                return true
            }

        }

        function checkdistrict() {
            let username = $('.pin_district').val();

            if (username == '') {
                $("#message5").html("*Please enter correct the pincode ");
                $("#message5").show();
                return false
            } else {
                $('#message5').hide();
                return true
            }

        }

        function checkarea() {
            let username = $('.city_input').val();

            if (username == '') {
                $("#message6").html("*Please enter correct the pincode ");
                $("#message6").show();
                return false
            } else {
                $('#message6').hide();
                return true
            }

        }


        function checkusername() {
            let username = $('.address').val();
            var pattern = /^[a-zA-Z ]{4,}$/;

            if (username == '') {
                $("#message1").html("*Please fill the address");
                $("#message1").show();
                return false
            } else if (!pattern.test(username)) {
                $('#message1').html("*Please enter a valid name");
                $('#message1').show();
                return false
            } else {
                $('#message1').hide();
                return true
            }

        }


        function checkphonenumber() {
            let Phonenumber = $(".phone").val();
            var Pattern = /^(?!.*(\d)\1{9})[6-9]\d{9}$/;

            if (Phonenumber == "") {
                $('#message3').html("*Please fill the Phone number");
                $('#message3').show();
                return false;
            } else if (Phonenumber.length != 10) {
                $('#message3').html("*Please enter a 10-digit phone number");
                $('#message3').show();
                return false;
            } else if (!Pattern.test(Phonenumber)) {
                $('#message3').html("*Please enter a valid phone number");
                $('#message3').show();
                return false;
            } else {
                $('#message3').hide();
                return true;
            }
        }
    </script>
@endsection --}}
