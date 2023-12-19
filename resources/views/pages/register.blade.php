@extends('layouts.default')
@section('main-content')
    <style>
        .toggle-password {
            padding: 10px
        }
    </style>
    <section class="register_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-12">
                    <div class="regst_sec">
                        <h5 class="wel_re">Welcome <img src="/assets/images/hand.png" class="img-fluid" alt=""></h5>
                        <p>Welcome to your Healthy store! Sign in now to explore the Fresh & healthier groceries </p>
                        <form class="register_form" method="POST">
                            @csrf
                            <div class="row  secdrt">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Full Name</label>
                                        <input type="text" class="form-control full_name" name="full_name"
                                            maxlength="40" onkeydown="return /[a-z ]/i.test(event.key)">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Email</label>
                                        <input type="email" class="form-control email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Password</label>
                                        <div class="paswer">
                                            <div class="input-group">
                                                <input class="form-control  bnub" id="myInput1" type="password"
                                                    name="password" required="" placeholder="Password" maxlength="50"
                                                    autocomplete="off">
                                                <div class="input-group-append">
                                                    <span class="input-group-text toggle-password1 form-control"
                                                        onclick="togglePassword1()">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            {{-- <a class="pind" data-bs-toggle="modal"
                                        data-bs-target="#forgotModal">Forgot Pin ?</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Phone</label>
                                        <input type="text" maxlength="10" class="form-control phone" name="phone_number"
                                            onkeypress="return phone1(event);" oninput="checkPhoneNumberLength(this)">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Address</label>
                                        <input type="text" class="form-control address" name="address" class="address"
                                            maxlength="120">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">Pincode</label>
                                        <input type="text" class="form-control pincode" id="pin_code_type"
                                            name="pin_code" pattern="[0-9]{6}" maxlength="6"
                                            onkeypress="return phone1(event);" oninput="checkPhoneNumberLength(this)">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">State</label>
                                        <input type="text" class="form-control" class="" id="pin_state"
                                            name="pin_state" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">District</label>
                                        <input type="text" class="form-control" class="" id="pin_district"
                                            name="pin_district" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">Area</label>
                                        <select name="city_input" class="form-select areas" id="city_input">
                                            <option value="" hidden>Select Area</option>
                                            {{-- <option value="" id="city_input"></option> --}}
                                        </select>
                                        {{-- <input type="text" class="form-control" class="" id="city_input" name="city_input"> --}}
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="roboto">State</label>
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
                                    <div class="form-group">
                                        <label for="" class="roboto">City</label>
                                        <select name="city" id="" class="form-select city">
                                            <option value="" hidden>Select City</option>
                                            @if ($states = App\models\city::all())
                                                @foreach ($states as $st)
                                                    <option value="{{ $st->id }}">{{ $st->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Pincode</label>
                                        <input type="text" class="form-control" class="pincode" name="pincode">
                                    </div>
                                </div> --}}
                                <div class="col-lg-5 pt-4">
                                    <div class="tree text-center">
                                        <button type="submit" name="register_btn" id="register_btn"
                                            class="btn m-auto d-block home-btn3 register_btn">
                                            Register</button>
                                    </div>
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




            const validator = new JustValidate(".register_form", {
                validateBeforeSubmitting: true,
            });
            // const validator = new JustValidate('.updatesbanner');
            validator
                .addField('.full_name', [{
                        rule: 'required',
                    },
                    {
                        rule: 'minLength',
                        value: 3,
                    },
                    {
                        rule: 'maxLength',
                        value: 30,
                    }
                ])
                .addField('.email', [{
                        rule: 'required',
                    },
                    {
                        rule: 'email',
                    }
                ])
                .addField('.bnub', [{
                        rule: 'required',
                    },
                    // {
                    //     rule: 'password',
                    // }
                    {
                        rule: 'customRegexp',
                        value: /^(?=.*[!@#$&])(?=.*[0-9])(?=.*[a-z]).{8,}$/,
                        errorMessage: 'Min 8 characters with at least one numeric, one alphabet, and one symbol.'
                    },
                ])
                .addField('.phone', [{
                        rule: 'required',
                    }, {
                        rule: 'minLength',
                        value: 10,
                    },
                    {
                        rule: 'maxLength',
                        value: 10,
                    },
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
                .addField('.pincode', [{
                    rule: 'required',
                }, ])


                .onSuccess(() => {

                    var formData = $('.register_form').serialize();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/register',
                        type: 'post',
                        data: formData,
                        success: function(response) {
                            swal.fire(
                                'Success',
                                response.success,
                                'success'
                            ).then(() => {
                                // Close the current modal (if any)
                                $('#loginModal').modal('hide');

                                // Open the login modal
                                $('#loginModal').modal('show');

                                // Reload the page if needed
                                // location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 422) {
                                swal.fire(
                                    'Error!',
                                    xhr.responseJSON.error,
                                    'error'
                                );
                            } else {
                                swal.fire(
                                    'Error!',
                                    'Failed to update register data. Please try again later.',
                                    'error'
                                );
                            }
                        }
                    });
                });

        });
    </script>
@endsection
