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
                    <h5><strong>Manage  </strong> Address</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 ">
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
                        <a href="" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="orders1">
                        <form action="">
                            @csrf
                            <div class="row ac_sett justify-content-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="roboto_set">Flat/House no.</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group  pt-3">
                                        <label for="" class="roboto_set">Address</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group  pt-3">
                                        <label for="" class="roboto_set">City</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group  pt-3">
                                        <label for="" class="roboto_set">State</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group  pt-3">
                                        <label for="" class="roboto_set">Pincode</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group  pt-3">
                                        <label for="" class="roboto_set">Landmark</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <div class="form-group  ">
                                        <input class="form-check-input" type="checkbox" name="status" id="exampleCheckbox">
                                        <label class="form-check-label" for="exampleCheckbox">My shipping and Billing
                                            address are the same
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-2">
                                    <div class="form-group">
                                        <input class="form-check-input" type="checkbox" name="status" id="exampleCheckbox">
                                        <label class="form-check-label" for="exampleCheckbox">Make this my default address
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" class="btn home-btn3 mt-4">Submit </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
