@extends('layouts.default')
@section('main-content')
    <section class="mycart_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">My <span class="pr1"> Wishlist </span></h5>
            </div>
        </div>
    </section>


    <section class="mycarts_sec">
        <div class="container">
            <h5 class="shop">My <span class="ct">Wishlist</span> </h5>
            <div class="row">
                <div class="col-lg-6  shopses-full ">
                    <div class="shopses">
                        <div>
                            <div class="coco">
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
                                    <div class="prds_inr">
                                        <button class="btn_min1" onclick="decreaseValue('hair-henna14')">-</button>
                                        <input type="number" class="input_poo1" id="hair-henna14-number" value="1"
                                            min="1" max="100">
                                        <button class="btn_plus1"  onclick="increaseValue('hair-henna14')">+</button>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn  rems">Remove</a>
                        </div>
                    </div>

                    <div class="shopses">
                        <div>
                            <div class="coco">
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
                                    <div class="prds_inr">
                                        <button class="btn_min1"  onclick="decreaseValue('hair-henna15')">-</button>
                                        <input type="number" class="input_poo1"  id="hair-henna15-number" value="1"
                                            min="1" max="100">
                                        <button class="btn_plus1"  onclick="increaseValue('hair-henna15')">+</button>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btn  rems">Remove</a>
                        </div>
                    </div>

                    <div class="row ful_crtr">
                        <div class="col-lg-4">
                            <a href="" class="btn  home-btn3"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back to shop</a>
                        </div>
                        <div class="col-lg-4 text-end">
                            <a href="" class="btn removall_cart">Remove all</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mycarts_sec  deee">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <h5 class="shop">My <span class="ct">Wishlist</span> </h5>
                </div>
                <div class="col-lg-2">
                    <a href="" class="btn  home-btn3"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Back to shop</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="emptyu">
                        <img src="/assets/images/no.png" class="img-fluid " alt="">
                        <p class="paresr">You don’t have any products in the Wishlist yet. <br>
                            <span class="paresr1"> You will find a lot of interesting products on our “Shop” page.</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
