@extends('layouts.default')
@section('main-content')
    <section class="home_main_section">
        <div class="home_ban_sec">
            <div class="home_full"
                style="background: linear-gradient(180deg, #FFFFFF 11.46%, rgba(244, 244, 242, 0.523636) 30.64%, rgba(232, 231, 227, 0) 51.66%), url('assets/images/banner1.png') ;">
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

                                        <div class="row">
                                            <div class="col-lg-4 col-md-8 col-10">
                                                <a class="  btn home-btn  shaded1">
                                                    <img src="assets/images/basket_fill.png" width="30px" alt="">
                                                    Order Now</a>
                                            </div>
                                        </div>

                                    </div>

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
        <h5 class="cats" data-aos="fade-up" data-aos-duration="800"> Our Categories </h5>
        <div class="container-fluid">
            <div class="row align-items-center" id="cat11">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="first_slick">
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr1.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>
                        </a>

                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr2.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr3.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr4.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr5.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr6.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr1.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>

                        </a>
                        <a href="">
                            <div class="first">
                                <img src="/assets/images/pr2.jpg" class="img-fluid" alt="">
                            </div>
                            <h5 class="gro">Grocery</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-1  soloi">
                    <a href="" class="vie_al">View All <i class="fa fa-chevron-right rtt" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="combo_section">
        <div class="container">
            <h5 class="combohead" data-aos="fade-up" data-aos-duration="800">Combo Products</h5>
            <div class="row num_weerr">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min" onclick="decreaseValue('hair-henna')">-</button>
                                    <input type="number" class="input_poo" id="hair-henna-number" min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Smart</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna1')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna1-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna1')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Savings</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna2')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna2-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna2')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Mini</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna3')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna3-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna3')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna4')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna4-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna4')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one"data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Smart</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna5')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna5-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna5')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Savings</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna6')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna6-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna6')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Mini</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna7')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna7-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna7')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="bt_linear"></div> --}}
    </section>


    <section class="nutri_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 nut_lu" data-aos="fade-up" data-aos-duration="800">
                    <img src="/assets/images/nut1.svg" class="img-fluid" alt="">
                    <h5 class="nut_head">High Nutritonal Value</h5>
                    <p class="nut_para"> foods preserves for more
                        natural vitamins and minarals</p>
                </div>
                <div class="col-lg-3 nut_lu" data-aos="fade-up" data-aos-duration="800">
                    <img src="/assets/images/nut2.svg" class="img-fluid" alt="">
                    <h5 class="nut_head">Preserves the
                        Environment</h5>
                    <p class="nut_para"> foods preserves for more
                        natural vitamins and minarals</p>
                </div>
                <div class="col-lg-3 nut_lu" data-aos="fade-down" data-aos-duration="800">
                    <img src="/assets/images/nut3.svg" class="img-fluid" alt="">
                    <h5 class="nut_head">Certified Orgonic
                        Sources</h5>
                    <p class="nut_para"> foods preserves for more
                        natural vitamins and minarals</p>
                </div>
                <div class="col-lg-3 nut_lu" data-aos="fade-down" data-aos-duration="800">
                    <img src="/assets/images/nut4.svg" class="img-fluid" alt="">
                    <h5 class="nut_head">No Chemical &
                        Pestisides</h5>
                    <p class="nut_para"> foods preserves for more
                        natural vitamins and minarals</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hot_section">
        <div class="container">
            <h5 class="combohead">Hot Deals</h5>
            <div class="row num_weerr">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna8')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna8-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna8')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna9')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna9-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna9')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna10')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna10-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna10')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna11')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna11-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna11')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna12')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna12-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna12')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna13')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna13-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna13')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one">
                        <div class="produs_img" data-aos="fade-right" data-aos-duration="800">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna14')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna14-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna14')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="product_one" data-aos="fade-right" data-aos-duration="800">
                        <div class="produs_img">
                            <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                        </div>
                        <h5 class="he_head">Combo Delight</h5>
                        <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                        <div class="prd_inp">
                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button class="btn_min"  onclick="decreaseValue('hair-henna15')">-</button>
                                    <input type="number" class="input_poo"  id="hair-henna15-number"  min="1" max="100" value="1" name="productqty" >
                                    <button class="btn_plus"  onclick="increaseValue('hair-henna15')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    <a href="" class="btn theme-btn1">Add to cart <i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="green"></div>

    <section class="testimonial_section">
        <h5 class="over">Over 10000+ Customers <span class="love"> love Us</span></h5>
        <div class="container">
            <div class="rsr">
                <div>
                    <div class="row  gapses">
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row  gapses">
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first_testimonials">
                                <div class="imgs">
                                    <div class="img111">
                                        <img src="/assets/images/user.png" class="img-fluid" alt="">
                                        <h5 class="ctns1">Bharani</h5>
                                    </div>
                                    <ul class="restts">
                                        <li><i class="fa fa-star rest1" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star  rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star rest" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <p class="ctns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem esse qui
                                    odit,
                                    animi voluptate doloribus cum nemo incidunt, amet id laboriosam itaque quidem, minima
                                    accusantium ea nulla sequi! Eos, nulla?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
