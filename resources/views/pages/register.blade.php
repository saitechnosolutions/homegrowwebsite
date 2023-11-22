@extends('layouts.default')
@section('main-content')
<style>
    .toggle-password{
        padding: 10px
    }
</style>
    <section class="register_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  col-12">
                    <div class="regst_sec">
                        <h5 class="wel_re">Welcome <img src="/assets/images/hand.png" class="img-fluid" alt=""></h5>
                        <div class="row  secdrt">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Full Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Password</label>
                                    <div class="paswer">
                                        <div class="input-group">
                                            <input class="form-control  bnub" id="myInput" type="password" name="password"
                                                required="" placeholder="Password" autocomplete="off">
                                            <div class="input-group-append">
                                                <span class="input-group-text toggle-password form-control"
                                                    onclick="togglePassword()">
                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <a class="pind">Forgot Pin ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Flat/House no.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="roboto">City</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="roboto">State</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="roboto">Pincode</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-5 pt-4">
                                <div class="tree text-center">
                                    <a href="" class="btn  home-btn3">
                                        Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
