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
                    <h5>My Orders</h5>
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
                                <li class="listers"><a href="/myaccount" class="vart active">My Orders</a></li>
                                <li class="listers"><a href="/accountsetting" class="vart">Account Settings</a></li>
                                <li class="listers"><a href="/manageaddress" class="vart">Manage Addresses</a></li>
                            </ul>
                        </div>
                        <a href="" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="orders">

                        <div class="shopses">
                            <div>
                                <div class="coco  acoun">
                                    <div class="car1">
                                        <img src="/assets/images/my.jpg" class="img-fluid" alt="">
                                        <div class="ioio">
                                            <h5>Coconut Oil</h5>
                                            <p>(Fresh product from Home Grow)</p>
                                            <h5>1Ltr</h5>
                                        </div>
                                    </div>
                                    <div class="car2">
                                        <h5 class="rubee">₹249</h5>
                                        <p class="qty33">Qty: 2</p>
                                    </div>
                                    <div class="car3">
                                        <h5 class="last_h"><i class="fa fa-circle  cret" aria-hidden="true"></i> Delivered on Nov 01</h5>
                                        <p class="last_p">Your item has been delivered</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
