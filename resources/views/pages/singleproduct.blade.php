@extends('layouts.default')
@section('main-content')
    <section class="all_desc_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">Product <span class="pr1"> Description </span></h5>
            </div>
        </div>
    </section>


    <section class="description_section">
        <div class="container">
            <div class="row sdfjk">
                <div class="col-lg-6 text-center">
                    <div class="alva">
                        <img src="/assets/images/lit1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in_stock">
                        <p class="gree"><i class="fa fa-check" aria-hidden="true"></i> In stock </p>
                        <h5 class="smar">Combo Smart</h5>
                        <p class="desc_para">Henna helps in building a protective barrier around each one of your hair
                            shafts</p>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="pases">
                                    <h5 class="he_price">₹349.00 <span class="he_par">₹1128.00</span> <span
                                            class="offer">(63% OFF)</span> </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row qty_lit">
                            <div class="col-lg-4  lent">
                                <h5 class="qtys">Select </h5>
                                <div class="litre">
                                    <button class="price_ty">Qty: 50g <br> <span class="price_twe">Price: ₹22</span>
                                    </button>
                                    <button class="price_ty">Qty: 50g <br> <span class="price_twe">Price: ₹22</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 lent1">
                                <div class="atrt">
                                    <h5 class="qtys">Select Qty</h5>
                                    <div class="prds_inr">
                                        <button class="btn_min1">-</button>
                                        <input type="number" class="input_poo1" id="input_poo1" value="1" min="1"  max="100">
                                        <button class="btn_plus1">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row tyty">
                            <div class="col-lg-4">
                                <a class="btn home-btn1 ">BUY NOW
                                    <img src="assets/images/buy.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn home-btn2 ">ADD TO CART
                                    {{-- <img src="assets/images/cart.png" class="img-fluid" alt=""> --}}
                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="full_link">
                                <div class="sharess">
                                    <h5>Share </h5>
                                    <ul class="uit">
                                        <li><a href=""><img src="/assets/images/msg.png" class="img-fluid ghg"
                                                    alt=""></a></li>
                                        <li><a href=""><img src="/assets/images/fac.png" class="img-fluid ghg"
                                                    alt=""></a></li>
                                        <li><a href=""><img src="/assets/images/wha.png" class="img-fluid ghg"
                                                    alt=""></a></li>
                                        <li><a href=""><img src="/assets/images/ins.png" class="img-fluid ghg"
                                                    alt=""></a></li>
                                        <li><a href=""><img src="/assets/images/ex.png" class="img-fluid ghg"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content_section">
        <div class="container thuyu">
            <h5 class="ptio_ead">Description <i class="fa fa-chevron-down gree" aria-hidden="true"></i>
            </h5>
            <div class="row aresa">
                <div class="col-lg-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped table-seller">
                        <tbody>
                            <tr>
                                <td class="tab_he">Model</td>
                                <td class="tab_td">#8786867</td>
                            </tr>
                            <tr>
                                <td class="tab_he">Qty</td>
                                <td class="tab_td">#8786867</td>
                            </tr>
                            <tr>
                                <td class="tab_he">Mfg Date</td>
                                <td class="tab_td">#8786867</td>
                            </tr>
                            <tr>
                                <td class="tab_he">Batch No.</td>
                                <td class="tab_td">#8786867</td>
                            </tr>
                            <tr>
                                <td class="tab_he">Weight</td>
                                <td class="tab_td">#8786867</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12">
                    <ul class="juju">
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
