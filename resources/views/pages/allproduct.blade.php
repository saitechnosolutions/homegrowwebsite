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
                    <ul class="oilss_cat iso_one  des_one" id="custom-filter">
                        <li><a href="" data-filter="*" class="all " class="grocry">All category</a></li>
                        @if ($cat = App\Models\category::all())
                            @foreach ($cat as $ca)
                                <li><a href="" data-filter=".{{ $ca->id }}"
                                        class="grocry">{{ $ca->category_name }}</a></li>
                            @endforeach
                        @endif
                        {{-- <li><a href=""class="grocry">Rice</a></li>
                        <li><a href=""class="grocry">Edible Oils</a></li>
                        <li><a href=""class="grocry">House Hold</a></li>
                        <li><a href=""class="grocry">Spices</a></li> --}}
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
                <div class="col-lg-9 ">
                    {{-- <div class="row">
                        <div class="col-lg-4">
                            <p>vdsvhhvbjhjb</p>
                        </div>
                        <div class="col-lg-4 on">
                            <p>vdsvhhvbjhjb1</p>
                        </div>
                    </div> --}}
                    <div class="row iso-container drdrrrr">
                        @if ($products = App\Models\product_varient::all())
                            @foreach ($products as $pr)
                                <div class="col-lg-4    {{ $pr->categoryid }} ">
                                    <div class="product_one">
                                        <a href="/single_products/{{ $pr->product_id }}" class="las_pro">
                                            <div class="produs_img">
                                                <img src="/assets/images/gt1.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                        @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                                            <h5 class="he_head">{{ $vrs->product_name }}</h5>
                                        @endif
                                        <h5 class="he_para">₹{{ $pr->offer_price }} <span class="he_para1">
                                                ₹{{ $pr->mrp_price }}</span> </h5>
                                        <div class="prd_inp">
                                            <form class="ads_carts">
                                                @csrf
                                                @if (Auth::check())
                                                    <input type="hidden" value="{{ Auth::user()->user_id }}"
                                                        name="user_id" class="user_id">
                                                @endif

                                                @if ($var = App\Models\product_varient::where('product_id', $pr->product_id)->first())
                                                    <input type="hidden" value="{{ $var->id }}"
                                                        name="product_main_id" class="product_main_id">
                                                @endif

                                                <input type="hidden" name="prd_varient_id" value="{{ $pr->id }}"
                                                    class="prd_varient_id">


                                                <div class="ful_po">
                                                    <div class="prds_inr">
                                                        <button type="button" class="btn_min"
                                                            onclick="decreaseValue('hair-{{ $pr->id }}')">-</button>
                                                        <input type="number" class="input_poo  productqty"
                                                            id="hair-{{ $pr->id }}-number" min="1"
                                                            max="100" value="1" name="productqty">
                                                        <button type="button" class="btn_plus"
                                                            onclick="increaseValue('hair-{{ $pr->id }}')">+</button>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        @if (Auth::check())
                                                            <button type="button"
                                                                class="btn theme-btn1 add_new_cart_submit"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="add_new_cart_submit">Add to
                                                                cart <i class="fa fa-shopping-cart"
                                                                    aria-hidden="true"></i>
                                                            </button>
                                                        @else
                                                            <button type="button" class="btn theme-btn1 "
                                                                data-bs-toggle="modal" data-bs-target="#loginModal">Add to
                                                                cart <i class="fa fa-shopping-cart"
                                                                    aria-hidden="true"></i>
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
