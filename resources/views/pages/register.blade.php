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
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row  secdrt">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Full Name</label>
                                        <input type="text" class="form-control" name="full_name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Password</label>
                                        <div class="paswer">
                                            <div class="input-group">
                                                <input class="form-control  bnub" id="myInput1" type="password"
                                                    name="password" required="" placeholder="Password"
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
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Flat/House no.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div> --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto">Address</label>
                                        <input type="text" class="form-control" name="address" class="address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
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
                                </div>
                                <div class="col-lg-5 pt-4">
                                    <div class="tree text-center">
                                        <button type="submit" name="register_btn" class="btn m-auto d-block home-btn3">
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
