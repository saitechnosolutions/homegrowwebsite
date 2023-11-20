@extends('layouts.default')
@section('main-content')
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
                        <h5>-<i class="fa fa-check-circle" aria-hidden="true"></i> - </h5>
                        <h5>Payment</h5>
                        <h5>-<i class="fa fa-check-circle" aria-hidden="true"></i> </h5>
                    </div>
                    <form action="" method="POST">
                        <h5 class="conty_de">Contact Details</h5>

                        <div class="row">

                            <div>
                                <label for="">Full Name (First and Last Name)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="toors" data-aos="fade-up" data-aos-duration="500">
                                <div class="form-group">
                                    <label for="PhoneNumber" class="fdsfddfd">Phone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="text" class="form-control phone" id="PhoneNumber" name="phone"
                                            placeholder="Enter Your Phone Number Here" maxlength="10" required
                                            onkeypress="return phone2(event);">
                                    </div>
                                    <span id="message3" class="text-danger"></span>
                                </div>
                            </div>
                            <div>
                                <label for="">Flat/House no.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div>
                                <label for="">Address</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="">City</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="">State</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Tamilnadu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Pincode</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Landmark</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" id="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="status" id="exampleCheckbox">
                                    <label class="form-check-label" for="exampleCheckbox">My shipping and Billing
                                        address are the same
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="status" id="exampleCheckbox">
                                    <label class="form-check-label" for="exampleCheckbox">Make this my default address
                                    </label>
                                </div>
                            </div>
                            <div class=" text-center">
                                <a href="" class="btn  home-btn3">
                                    Use this address</a>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="go_chec sticky-top">
                        <div class="row  tere">
                            <div class="col-lg-12  retfyy">
                                <div class="bo_che">
                                    <div class="sub_to">
                                        <h5 class="subtot1">Subtotal:</h5>
                                        <h5 class="subtot1">₹1403.97</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="bo_che1">
                                <div class="sub_to">
                                    <h5 class="tot1">Total:</h5>
                                    <h5 class="tot">₹1357.97</h5>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn  home-btn4">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
