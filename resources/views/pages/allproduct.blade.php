@php
    use App\Models\product;
    use App\Models\product_varient;

@endphp

@extends('layouts.default')
@section('main-content')
    <section class="all_product_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">All <span class="pr1"> Categories </span></h5>
            </div>
        </div>
    </section>

    <section class="all_cat_section">
        <div class="container">
            <div class="row  rte">
                <div class="col-lg-12 col-md-12">
                    <ul class="nav nav-tabs" id="myTabs">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-2 col-12 brack">
                                <button class="nav-link des_one1 active" data-category="all">All Products</button>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
                                    <div class="d-flex">
                                        @if ($cat = App\Models\category::all())
                                            @foreach ($cat as $ca)
                                                <button type="button" class="nav-link des_one1 "
                                                    id="category-{{ $ca->id }}" name="cat-{{ $ca->id }}"
                                                    data-category="{{ $ca->id }}">{{ $ca->category_name }}</button>
                                            @endforeach
                                        @endif
                                    </div>
                                </marquee>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="row  eortst">
                <div class="col-lg-3 col-md-5">
                    <h5 class="coiii"></h5>
                    <div class="accordion sticky-top" id="regularAccordionRobots">


                        <div class="accordion-item">
                            <h2 id="regularHeadingFirst" class="accordion-header">
                                <button class="accordion-button feat" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#regularCollapseFirst" aria-expanded="true"
                                    aria-controls="regularCollapseFirst">
                                    All Products
                                </button>
                            </h2>
                            <div id="regularCollapseFirst" class="accordion-collapse collapse show"
                                aria-labelledby="regularHeadingFirst" data-bs-parent="#regularAccordionRobots">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input id="all_for" class="form-check-input acts all_acts nav-link1" type="checkbox"
                                            data-category="all">
                                        <label class="form-check-label" for="all_for">
                                            All Products
                                        </label>
                                    </div>
                                    @if ($cat = App\Models\category::all())
                                        <div class="category-container">
                                            @foreach ($cat as $ca)
                                                <div class="form-check">
                                                    <input class="form-check-input acts nav-link1" type="checkbox"
                                                        id="categorys-{{ $ca->id }}" name="cat-{{ $ca->id }}"
                                                        data-category="{{ $ca->id }}">
                                                    <label class="form-check-label" for="categorys-{{ $ca->id }}">
                                                        {{ $ca->category_name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                        @if (count($cat) > 8)
                                            <div class="d-flex justify-content-center">
                                                <button id="see-more-btn">See More</button>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 id="regularHeadingFirst" class="accordion-header">
                                <button class="accordion-button feat" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#regularCollapsethree" aria-expanded="true"
                                    aria-controls="regularCollapseFirst">
                                    Features
                                </button>
                            </h2>
                            <div id="regularCollapsethree" class="accordion-collapse collapse show"
                                aria-labelledby="regularHeadingFirst" data-bs-parent="#regularAccordionRobots">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input filtercheck" type="checkbox" value="1"
                                            id="sellingCheckbox">
                                        <label class="form-check-label" for="sellingCheckbox">
                                            Top Selling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filtercheck" type="checkbox" value="3"
                                            id="hotDealCheckbox">
                                        <label class="form-check-label" for="hotDealCheckbox">
                                            Hot Deal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input filtercheck" type="checkbox" value="4"
                                            id="newArrivalCheckbox">
                                        <label class="form-check-label" for="newArrivalCheckbox">
                                            New Arrival
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <!--<div class="accordion-item">-->
                        <!--    <h2 class="accordion-header" id="regularHeadingSecond">-->
                        <!--        <button class="accordion-button collapsed feat" type="button" data-bs-toggle="collapse"-->
                        <!--            data-bs-target="#regularCollapseSecond" aria-expanded="false"-->
                        <!--            aria-controls="regularCollapseSecond">-->
                        <!--            Price range-->
                        <!--        </button>-->
                        <!--    </h2>-->
                        <!--    <div id="regularCollapseSecond" class="accordion-collapse collapse"-->
                        <!--        aria-labelledby="regularHeadingSecond" data-bs-parent="#regularAccordionRobots">-->
                        <!--        <div class="accordion-body">-->
                        <!--            <form class="price_range">-->
                        <!--                <div class="wrapper">-->
                        <!--                    <div class="price-input">-->
                        <!--                        <div class="field">-->
                        <!--                            <span>Min</span>-->
                        <!--                            <input type="number" class="input-min  fr" value="0" readonly>-->
                        <!--                        </div>-->
                        <!--                        <div class="separator">-</div>-->
                        <!--                        <div class="field">-->
                        <!--                            <span>Max</span>-->
                        <!--                            <input type="number" class="input-max  fr" value="6000" readonly>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="slider">-->
                        <!--                        <div class="progress"></div>-->
                        <!--                    </div>-->
                        <!--                    <div class="range-input">-->
                        <!--                        <input type="range" class="range-min rabge" min="0" max="6000"-->
                        <!--                            name="min_num" value="0" step="100">-->
                        <!--                        <input type="range" class="range-max rabge" min="0"-->
                        <!--                            max="6000" name="max_num" value="6000" step="100">-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </form>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    {{-- <div class="row">
                        <div class="col-lg-4">
                            <p>vdsvhhvbjhjb</p>
                        </div>
                        <div class="col-lg-4 on">
                            <p>vdsvhhvbjhjb1</p>
                        </div>
                    </div> --}}
                    <div class="row iso-container drdrrrr">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="all">
                                <!-- Display all products here -->
                                <div class="row drdrrrr er">

                                    @php
                                        $allProducts = Product::select('id')
                                            ->get()
                                            ->toArray();

                                        $productVariants = product_varient::get()->groupBy('product_id');

                                        $products = collect();

                                        foreach ($allProducts as $product) {
                                            $productId = $product['id'];

                                            // Check if the product has variants
                                            if ($productVariants->has($productId)) {
                                                // Get the first product variant for the current product
                                                $firstProductVariant = $productVariants[$productId]->first();

                                                // Add it to the collection
                                                $products->push($firstProductVariant);
                                            }
                                        }

                                    @endphp

                                    @if ($products)
                                        @foreach ($products as $pr)
                                            <div class="col-lg-4  col-md-12 col-sm-12  col-6 {{ $pr->categoryid }}  ">
                                                <div class="product_one">
                                                    <div class="las_pro">
                                                        @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                                                            <div class="produs_img">
                                                                <a
                                                                    href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}">
                                                                    <img src="{{ env('MAIN_URL') }}images/{{ $vrs->product_image }}"
                                                                        class="img-fluid" alt=""></a>
                                                            </div>
                                                        @endif
                                                        <div class="prd_inp">
                                                            <form class="ads_carts">
                                                                @csrf
                                                                @if (Auth::check())
                                                                    <input type="hidden"
                                                                        value="{{ Auth::user()->user_id }}"
                                                                        name="user_id" class="user_id">
                                                                @endif

                                                                {{-- @if ($var = App\Models\product_varient::where('product_id', $pr->product_id)->first()) --}}
                                                                <input type="hidden" value="{{ $pr->product_id }}"
                                                                    name="product_main_id" class="product_main_id">
                                                                {{-- @endif --}}

                                                                <input type="hidden" name="prd_varient_id"
                                                                    value="{{ $pr->id }}" class="prd_varient_id">


                                                                <div class="ful_po">
                                                                    <div class="prds_inr">
                                                                        <button type="button" class="btn_min"
                                                                            onclick="decreaseValue('hair-{{ $pr->id }}')">-</button>
                                                                        <input type="number"
                                                                            class="input_poo  productqty  ali_in"
                                                                            id="hair-{{ $pr->id }}-number"
                                                                            min="1" max="100" value="1"
                                                                            name="productqty" readonly>
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
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#loginModal">Add to
                                                                                cart <i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <a href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}"
                                                        class="wer">
                                                        @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                                                            <p class="he_head">{{ $vrs->product_name }}</p>
                                                        @endif
                                                        <h5 class="he_para">₹{{ $pr->offer_price }} <span
                                                                class="he_para1">
                                                                ₹{{ $pr->mrp_price }}</span> </h5>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            {{-- @if ($cat = App\Models\category::all())
                                @foreach ($cat as $ca)
                                    <div class="tab-pane fade  er" id="cat-{{ $ca->id }}">
                                        <div class="row  drdrrrr ">
                                            @if ($products = App\Models\product_varient::where('categoryid', $ca->id)->get())
                                                @foreach ($products as $pr)
                                                    <div class="col-lg-4    {{ $pr->categoryid }} ">
                                                        <div class="product_one">
                                                            <div class="las_pro">
                                                                @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                                                                    <div class="produs_img">
                                                                        <a href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}">   <img src="{{ env('MAIN_URL') }}images/{{ $vrs->product_image }}"
                                                                            class="img-fluid" alt=""></a>
                                                                    </div>
                                                                @endif
                                                                <div class="prd_inp">
                                                                    <form class="ads_carts">
                                                                        @csrf
                                                                        @if (Auth::check())
                                                                            <input type="hidden"
                                                                                value="{{ Auth::user()->user_id }}"
                                                                                name="user_id" class="user_id">
                                                                        @endif
                                                                        <input type="hidden"
                                                                            value="{{ $pr->product_id }}"
                                                                            name="product_main_id"
                                                                            class="product_main_id">

                                                                        <input type="hidden" name="prd_varient_id"
                                                                            value="{{ $pr->id }}"
                                                                            class="prd_varient_id">


                                                                        <div class="ful_po">
                                                                            <div class="prds_inr">
                                                                                <button type="button" class="btn_min"
                                                                                    onclick="decreaseValue('hair-{{ $pr->id }}')">-</button>
                                                                                <input type="number"
                                                                                    class="input_poo  productqty"
                                                                                    id="hair-{{ $pr->id }}-number"
                                                                                    min="1" max="100"
                                                                                    value="1" name="productqty">
                                                                                <button type="button" class="btn_plus"
                                                                                    onclick="increaseValue('hair-{{ $pr->id }}')">+</button>
                                                                            </div>
                                                                            <div class="add_to_cart">
                                                                                @if (Auth::check())
                                                                                    <button type="button"
                                                                                        class="btn theme-btn1 add_new_cart_submit"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add_new_cart_submit">Add
                                                                                        to
                                                                                        cart <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </button>
                                                                                @else
                                                                                    <button type="button"
                                                                                        class="btn theme-btn1 "
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#loginModal">Add to
                                                                                        cart <i class="fa fa-shopping-cart"
                                                                                            aria-hidden="true"></i>
                                                                                    </button>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            <a  href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}">
                                                                @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                                                                    <h5 class="he_head">{{ $vrs->product_name }}</h5>
                                                                @endif
                                                                <h5 class="he_para">₹{{ $pr->offer_price }} <span
                                                                        class="he_para1">
                                                                        ₹{{ $pr->mrp_price }}</span> </h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif --}}
                        </div>
                        <div id="productsContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')
    <script>
        $(document).ready(function() {
            $(".filtercheck").click(function() {
                $(".all_cat_section .nav-link.active").removeClass("active");
                setTimeout(function() {
                    $("html, body").scrollTop(200);
                }, 1000);
            });
        });
        $(document).ready(function() {
            $(".nav-link1").click(function() {
                $(".all_cat_section .nav-link.active").removeClass("active");
                setTimeout(function() {
                    $("html, body").scrollTop(200);
                }, 1000);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".all_cat_section .nav-link.des_one1.active").click(function() {
                $(".filtercheck").prop("checked", false);
            });
        });
        $(document).ready(function() {
            $("des_one1.active").click(function() {
                $(".nav-link1").prop("checked", false);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.form-check-input').click(function() {
                // Uncheck all checkboxes except the one that was clicked
                $('.form-check-input').not(this).prop('checked', false);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var categoryContainer = document.querySelector('.category-container');
            var seeMoreBtn = document.getElementById('see-more-btn');

            if (seeMoreBtn) {
                seeMoreBtn.addEventListener('click', function() {
                    categoryContainer.classList.toggle('show-more');
                    seeMoreBtn.textContent = categoryContainer.classList.contains('show-more') ?
                        'show Less' : 'show more';
                });
            }
        });
    </script>
@endsection
