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
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <h5><strong>Account</strong> Settings</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 ">
                    <div class="sticky-top">
                        <a href="/myaccount" class="accounting ">
                            <img src="/assets/images/usr.png" alt="">
                            <div class="names">
                                <h5 class="hel1">Hello,</h5>
                                <h5 class="hel2">{{ Auth::user()->first_name }}</h5>
                            </div>
                        </a>

                        <div class="accounting2">
                            <ul class="manages">
                                <li class="listers"><a href="/myaccount" class="vart ">My Orders</a></li>
                                <li class="listers"><a href="/accountsetting" class="vart active">Account Settings</a></li>
                                <li class="listers"><a href="/editaddress" class="vart">Manage Addresses</a></li>
                            </ul>
                        </div>
                        <a href="/logout" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="orders1">
                        <form action="/update_user" method="post" id="update_user">
                            @csrf
                            <div class="row ac_sett">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id">
                                        <label class="roboto_set">Full Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                            name="first_name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-3">
                                        <label class="roboto_set">Email</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-3">
                                        <label class="roboto_set">Mobile Number</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->phone_number }}"
                                            onkeypress="return phone2(event);" oninput="checkPhoneNumberLength(this)"
                                            name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <button type="button" id="updateButton" class="btn home-btn3 mt-4">Update </button>
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
                                    {{ $add->address_line_one }}
                                @endif
                            </strong> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
