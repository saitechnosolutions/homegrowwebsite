@extends('layouts.default')
@section('main-content')
    <section class="all_desc_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">Product <span class="pr1"> Description </span></h5>
            </div>
        </div>
    </section>


    @if ($products = App\Models\product_varient::where('product_id', $product_id->id)->first())
        <section class="description_section">
            <div class="container">
                <div class="row sdfjk">
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <div class="alva">
                            <img src="/assets/images/lit1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <form class="ads_carts">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id" class="user_id">
                            @endif

                            <input type="hidden" value="{{ $products->product_id }}" name="product_main_id"
                                class="product_main_id">


                            <input type="hidden" name="prd_varient_id" value="{{ $products->id }}" class="prd_varient_id">


                            <div class="in_stock">

                                <div class="redt">
                                    @if ($stock = App\Models\productstock::where('productid', $products->id)->first())
                                        @if ($stock->availablestock == 0)
                                            <p class="cresesd"><i class="fa fa-times cresesd" aria-hidden="true"></i> Out of
                                                stock
                                            </p>
                                        @else
                                            <p class="gree"><i class="fa fa-check" aria-hidden="true"></i> In stock </p>
                                        @endif
                                    @endif
                                    @if (Auth::check())
                                        <button class="wish_list_icon   add_new_wishlist_submit" type="button"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></button>
                                    @else
                                        <button class="wish_list_icon  " type="button" data-bs-toggle="modal"
                                            data-bs-target="#loginModal"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></button>
                                    @endif
                                </div>

                                @if ($desc = App\Models\product::where('id', $product_id->id)->first())
                                    <h5 class="smar">{{ $desc->product_name }}</h5>
                                    <p class="desc_para">{{ $desc->product_description }}</p>
                                @endif
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="pases">
                                            <h5 class="he_price">₹{{ $products->offer_price }} <span
                                                    class="he_par">₹{{ $products->mrp_price }}</span> <span
                                                    class="offer">(63%
                                                    OFF)</span> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row qty_lit">
                                    <div class="col-lg-6  lent">
                                        @if ($mart = App\Models\product_varient::where('product_id', $product_id->id)->first())
                                            @if ($mart->varient == 1)
                                                <h5 class="qtys">Select Liter</h5>
                                            @elseif ($mart->varient == 2)
                                                <h5 class="qtys">Select ml</h5>
                                            @elseif ($mart->varient == 3)
                                                <h5 class="qtys">Select grm</h5>
                                            @elseif ($mart->varient == 4)
                                                <h5 class="qtys">Select kg</h5>
                                            @elseif ($mart->varient == 5)
                                                <h5 class="qtys">Select nos</h5>
                                            @endif
                                        @endif

                                        <div class="litre">
                                            @if ($variants = App\Models\product_varient::where('product_id', $product_id->id)->get())
                                                @foreach ($variants as $variant)
                                                    <button class="price_ty active" type="button">
                                                        @if ($variant->varient == 1)
                                                            {{ $variant->value }} Liter
                                                        @elseif ($variant->varient == 2)
                                                            {{ $variant->value }} ml
                                                        @elseif ($variant->varient == 3)
                                                            {{ $variant->value }} grm
                                                        @elseif ($variant->varient == 4)
                                                            {{ $variant->value }} kg
                                                        @elseif ($variant->varient == 5)
                                                            {{ $variant->value }} nos
                                                        @endif
                                                        <br>
                                                        <span class="price_twe">Price: ₹{{ $variant->offer_price }}</span>
                                                    </button>
                                                @endforeach
                                            @endif
                                            {{-- <button class="price_ty">Qty: 50g <br> <span class="price_twe">Price: ₹22</span>
                                        </button> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 lent1">
                                        <div class="atrt">
                                            <h5 class="qtys">Qty</h5>
                                            <div class="prds_inr">
                                                <button class="btn_min1" type="button"
                                                    onclick="decreaseValue('hair-{{ $products->product_id }}')">-</button>
                                                <input type="number" class="input_poo1  productqty"
                                                    id="hair-{{ $products->product_id }}-number" min="1"
                                                    max="100" value="1" name="productqty" readonly>
                                                <button class="btn_plus1" type="button"
                                                    onclick="increaseValue('hair-{{ $products->product_id }}')">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tyty">
                                    <div class="col-lg-4">
                                        @if (Auth::check())
                                            <a class="btn home-btn1 ">BUY NOW
                                                <img src="/assets/images/buy1.png" class="img-fluid" alt="">
                                            </a>
                                        @else
                                            <a class="btn home-btn1 "  data-bs-toggle="modal"
                                            data-bs-target="#loginModal">BUY NOW
                                                <img src="/assets/images/buy1.png" class="img-fluid" alt="">
                                            </a>
                                        @endif

                                    </div>
                                    <div class="col-lg-4">
                                        @if (Auth::check())
                                            <a class="btn home-btn2 add_new_cart_submit" data-bs-toggle="modal"
                                                data-bs-target="add_new_cart_submit">ADD TO CART
                                                {{-- <img src="assets/images/cart.png" class="img-fluid" alt=""> --}}
                                                <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a class="btn home-btn2 " data-bs-toggle="modal"
                                                data-bs-target="#loginModal">ADD TO CART
                                                {{-- <img src="assets/images/cart.png" class="img-fluid" alt=""> --}}
                                                <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                            </a>
                                        @endif

                                    </div>
                                    <div class="col-lg-4"></div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="full_link">
                                    <div class="sharess">
                                        <h5>Share </h5>
                                        <ul class="uit">
                                            <li><a href="" target="_blank"><img src="/assets/images/msg.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                    target="_blank"><img src="/assets/images/fac.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="https://api.whatsapp.com/send?text={{ url()->current() }}"
                                                    target="_blank"><img src="/assets/images/wha.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="" target="_blank"><img src="/assets/images/ins.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="" target="_blank"><img src="/assets/images/ex.png"
                                                        class="img-fluid ghg" alt=""></a></li>
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
            {{-- <div class="container thuyu"> --}}
            <div class="container ">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Description
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row aresa">
                                    @if ($desc = App\Models\product::where('id', $product_id->id)->first())
                                        <div class="col-lg-12 col-12">

                                            <p>{{ $desc->product_specification }}</p>

                                        </div>
                                        <div class="col-lg-12 col-12">
                                            {{-- <table class="table table-bordered table-striped table-seller">
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
                                            </table> --}}
                                        </div>
                                        <div class="col-lg-12  col-12">
                                            <ul class="juju">
                                                {{-- <li><i class="fa fa-check cheeee" aria-hidden="true"></i> {{ $desc->product_specification }} </li> --}}
                                                {{-- <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great
                                                    feature
                                                    name
                                                    here</li> --}}
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <h5 class="ptio_ead">Description <i class="fa fa-chevron-down gree" aria-hidden="true"></i>
            </h5> --}}
                {{-- <div class="row aresa">
                <div class="col-lg-12 col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                </div>
                <div class="col-lg-12 col-12">
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
                <div class="col-lg-12  col-12">
                    <ul class="juju">
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                        <li><i class="fa fa-check cheeee" aria-hidden="true"></i> Some great feature name here</li>
                    </ul>
                </div>
            </div> --}}
            </div>
        </section>
    @endif
@endsection
