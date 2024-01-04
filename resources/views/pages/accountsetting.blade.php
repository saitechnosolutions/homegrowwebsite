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
                    <h5><strong>Account</strong> Settings</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-5">
                    <div class="sticky-top">
                        <a href="/myaccount" class="accounting ">
                            <img src="/assets/images/usr.png" alt="">
                            <div class="names">
                                <h5 class="hel1">Hello,</h5>
                                <h5 class="hel2">{{ Auth::user()->name }}</h5>
                            </div>
                        </a>

                        <div class="accounting2">
                            <ul class="manages">
                                <li class="listers"><a href="/myorders" class="vart ">My Orders</a></li>
                                <li class="listers"><a href="/accountsetting" class="vart active">Account Settings</a></li>
                                <li class="listers"><a href="/editaddress" class="vart">Manage Addresses</a></li>
                            </ul>
                        </div>
                        <a href="/logout" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="orders1">
                        <form action="/update_user" method="post" id="update_user">
                            @csrf
                            <div class="row ac_sett">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id">
                                        <label class="roboto_set">Full Name</label>
                                        <input type="text" class="form-control full_name"
                                            value="{{ Auth::user()->name }}" name="first_name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-3">
                                        <label class="roboto_set">Email</label>
                                        <input type="email" class="form-control email" value="{{ Auth::user()->email }}"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-3">
                                        <label class="roboto_set">Mobile Number</label>
                                        <input type="text" class="form-control phone"
                                            value="{{ Auth::user()->phone_number }}" onkeypress="return phone1(event);"
                                            oninput="checkPhoneNumberLength(this)" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="form-group  pt-3">
                                       <label class="roboto_set">User Image</label>
                                       <input type="file" class="form-control clientsup_img" name="image"   accept="image/jpeg, image/png">
                                   </div>
                               </div>
                                <div class="col-lg-12 passwor_manage_acc">
                                    <div class="form-group  pt-3">
                                        <label class="roboto_set">Password <span class="text-danger">Min 8 characters with at least one numeric, one alphabet, and one symbol.</span></label>
                                        <input type="email" placeholder="Enter Password"
                                            class="form-control passwor_manage_acc" name="Password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" id="show_passwoi" class="btn  mt-1">Update password </button>
                                </div>
                                <div class="col-lg-4">
                                    <button type="button" id="updateButton" class="btn home-btn3 mt-2">Update </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="orders2">
                        <div class="text-end">
                            <a href="/editaddress" class=" fcdin">Edit</a>
                        </div>
                        <h5 class="def_addrer"><strong>Default</strong> <span> Address</span> </h5>
                        <p class="def_del">Delivery at <strong>
                                @if ($add = App\Models\user_addres::where('user_id', Auth::user()->user_id)->where('id', Auth::user()->user_default_address_id)->first())
                                    {{ $add->address_line_one }} , {{ $add->area_name }}, {{ $add->city }} ,
                                    {{ $add->state }} - {{ $add->pincode }}
                                @endif
                            </strong> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('.passwor_manage_acc').hide();

            $('#show_passwoi').on('click', function() {
                $('.passwor_manage_acc').show();
                $('#show_passwoi').hide();
            })
        });
    </script>
    <script>
        $(document).ready(function() {

            const validator = new JustValidate("#update_user", {
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
                .addField('.passwor_manage_acc', [{
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
                .addField('.clientsup_img', [{
                    rule: 'files',
                    value: {
                        files: {
                            maxSize: 500000,
                        },
                    },
                    errorMessage: 'Image is too large below 500kb',
                }, ])


                .onSuccess(() => {
                    e.preventDefault();

                    var formData = new FormData($('#update_user')[0]);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '/update_product',
                        type: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log(response);
                            swal.fire(
                                'Success',
                                'Your User form has been Updated',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed || result.isDismissed) {
                                    window.location.href = "/myaccount";
                                }
                            });
                        },
                        error: function(xhr) {
                            console.log(xhr);
                            if (xhr.responseJSON && xhr.responseJSON.error) {
                                swal.fire('Error!', xhr.responseJSON.error, 'error');
                            } else {
                                swal.fire('Error!', 'An error occurred during the update.',
                                    'error');
                            }
                        }
                    });
                });

        });
    </script>
@endsection
