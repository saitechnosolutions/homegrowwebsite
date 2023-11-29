@extends('layouts.default')
@section('main-content')
    <section class="all_product_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">All <span class="pr1"> Products </span></h5>
            </div>
        </div>
    </section>

    <section class="all_cat_section">
        <div class="container">
            <div class="row  rte">
                <div class="col-lg-8">
                    <ul class="oilss_cat">
                        <li><a href="" class="grocry">All category</a></li>
                        <li><a href="" class="grocry">Grocery</a></li>
                        <li><a href=""class="grocry">Rice</a></li>
                        <li><a href=""class="grocry">Edible Oils</a></li>
                        <li><a href=""class="grocry">House Hold</a></li>
                        <li><a href=""class="grocry">Spices</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <form action="" class="search_ajx" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control  prd_serar" placeholder="Search Here"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <button type="button" class="ser_ic" id="basic-addon2">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row  eortst">
                <div class="col-lg-3">
                    <h5 class="coiii"></h5>
                    <div class="accordion" id="regularAccordionRobots">

                        <div class="accordion-item">
                            <h2 id="regularHeadingFirst" class="accordion-header">
                                <button class="accordion-button feat" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#regularCollapseFirst" aria-expanded="true"
                                    aria-controls="regularCollapseFirst">
                                    Features
                                </button>
                            </h2>
                            <div id="regularCollapseFirst" class="accordion-collapse collapse show"
                                aria-labelledby="regularHeadingFirst" data-bs-parent="#regularAccordionRobots">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Top Selling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Treanding
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Hot Deal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            New Arrival
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="regularHeadingSecond">
                                <button class="accordion-button collapsed feat" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#regularCollapseSecond" aria-expanded="false"
                                    aria-controls="regularCollapseSecond">
                                    Price range
                                </button>
                            </h2>
                            <div id="regularCollapseSecond" class="accordion-collapse collapse"
                                aria-labelledby="regularHeadingSecond" data-bs-parent="#regularAccordionRobots">
                                <div class="accordion-body">
                                    <div class="wrapper">
                                        <div class="price-input">
                                            <div class="field">
                                                <span>Min</span>
                                                <input type="number" class="input-min" value="2500">
                                            </div>
                                            <div class="separator">-</div>
                                            <div class="field">
                                                <span>Max</span>
                                                <input type="number" class="input-max" value="7500">
                                            </div>
                                        </div>
                                        <div class="slider">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="range-input">
                                            <input type="range" class="range-min" min="0" max="10000"
                                                value="2500" step="100">
                                            <input type="range" class="range-max" min="0" max="10000"
                                                value="7500" step="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row  drdrrrr">
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna16')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna16-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna16')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna17')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna17-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna17')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna18')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna18-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna18')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna19')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna19-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna19')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna20')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna20-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna20')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna21')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna21-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna21')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna22')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna15-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna22')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna23')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna23-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna23')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product_one" data-aos="fade-left" data-aos-duration="800">
                                <div class="produs_img">
                                    <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                </div>
                                <h5 class="he_head">Combo Delight</h5>
                                <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span> </h5>
                                <div class="prd_inp">
                                    <div class="ful_po">
                                        <div class="prds_inr">
                                            <button class="btn_min"   onclick="decreaseValue('hair-henna24')">-</button>
                                            <input type="number" class="input_poo"   id="hair-henna24-number"   min="1" max="100" value="1" name="productqty">
                                            <button class="btn_plus"  onclick="increaseValue('hair-henna24')">+</button>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="" class="btn theme-btn1">Add to cart <i
                                                    class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
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
@endsection
