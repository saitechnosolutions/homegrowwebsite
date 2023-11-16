@extends('layouts.default')
@section('main-content')
    <section class="home_main_section">
        <div class="home_ban_sec">
            <div class="home_full"
                style="background: linear-gradient(180deg, #FFFFFF 11.46%, rgba(244, 244, 242, 0.523636) 30.64%, rgba(232, 231, 227, 0) 51.66%), url('assets/images/banner1.jpg') ;">
                <div class="home_banner_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  head_banner_filling3">
                                <div class="head_banner_filling">
                                    <div class="head_banner_filling1">
                                        <h5 class="head_max_head1" data-animation="fadeInLeft" data-delay="0.5s">Get
                                            60%</span>
                                        </h5>
                                        <h4 class="head_max_head3" data-animation="fadeInLeft" data-delay="0.5s">
                                            Discount Now</h4>
                                        <p class="head_max_para" data-animation="fadeInRight" data-delay="0.5s">*Applicable
                                            on
                                            selective products</p>
                                        {{-- <button id="cust_btn" class="merit apointerses btn" type="button "
                                        data-bs-toggle="modal" data-bs-target="#exampleModl" data-animation="fadeInUp"
                                        data-delay="1s"> --}}
                                        <div class="row">

                                            <div class="col-lg-4 col-12">
                                                <a class=" apointers_action btn" data-animation="fadeInUp" data-delay="1s">
                                                    <img src="assets/images/basket_fill.png" width="30px" alt="">
                                                    Order
                                                    Now</a>
                                            </div>
                                        </div>

                                        {{-- </button> --}}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="categories_section">
        <div class="scr_full">
            <img src="/assets/images/scr.png" class="scr" alt="">
            <div href="#" class="scroll-down-btn" aria-label="Scroll Down">
                <i class="fa fa-chevron-down down1" aria-hidden="true"></i>
                <i class="fa fa-chevron-down down2" aria-hidden="true"></i>
            </div>
        </div>
        <h5 class="cats"> Our Categories </h5>
        <div class="container-fluid">
            <div class="row align-items-center" id="cat11">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="first_slick">
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr1.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>
                        </div>

                        <div>
                            <div class="first">
                                <img src="/assets/images/pr2.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr3.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr4.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr5.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr6.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr1.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </div>
                        <div>
                            <div class="first">
                                <img src="/assets/images/pr2.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                    <a href="" class="vie_al">View All <i class="fa fa-chevron-right rtt" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="testimonial_section">
        <h5 class="over">Over 10000+ Customers <span> love Us</span></h5>
        <div class="container">

        </div>
    </section>
@endsection
