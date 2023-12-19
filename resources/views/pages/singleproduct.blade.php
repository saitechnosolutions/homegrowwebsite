@extends('layouts.default')
@section('main-content')
    <section class="all_desc_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">Product <span class="pr1"> Description </span></h5>
            </div>
        </div>
    </section>
    @if ($products = App\Models\product_varient::where('id', $proid->id)->first())
        {{-- @dd($products) --}}
        <section class="description_section">
            <div class="container">
                <div class="row sdfjk">
                    <div class="col-lg-5 col-md-5 col-12 text-center">
                        <div class="alva">
                            @if ($desc = App\Models\product::where('id', $protbl_data->id)->first())
                                <div class="alva">
                                    <img src="{{ env('MAIN_URL') }}images/{{ $desc->product_image }}" class="img-fluid"
                                        alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">

                        <form class="ads_carts" action="/checkout" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id" class="user_id">
                            @endif

                            <input type="hidden" class="product_main_id" value="{{ $products->product_id }}"
                                name="product_id[]">
                            <input type="hidden" class="prd_varient_id" value="{{ $products->id }}"
                                name="product_varient_id[]">
                            <input type="hidden" id="proprice1" value="{{ $products->offer_price }}" name="proprice1[]">
                            <input type="hidden" id="mrprice" value="{{ $products->mrp_price }}" name="mrpprice[]">
                            <input type="hidden" id="progst" value="{{ $products->product_gst }}" name="gst[]">
                            <input type="hidden" id="totalamt1" name="proprice[]" value="{{ $products->offer_price }}">

                            @if ($productstock = App\Models\ProductStock::where('pro_ver_id', $productstock->pro_ver_id)->first())
                                <input type="hidden" id="maxqty1" value="{{ $productstock->availablestock }}"
                                    name="available_stock[]">
                            @endif
                            <div class="in_stock">

                                <div class="redt">
                                    @if ($stock = App\Models\ProductStock::where('pro_ver_id', $products->id)->first())
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

                                @if ($desc = App\Models\product::where('id', $protbl_data->id)->first())
                                    <h5 class="smar">{{ $desc->product_name }}</h5>
                                    <p class="desc_para">{{ $desc->product_description }}</p>
                                @endif
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="pases">
                                            <h5><span class="he_price">₹{{ $products->offer_price }} </span>
                                                <span class="he_par">₹{{ $products->mrp_price }}</span> <span
                                                    class="offer">(63% OFF)</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row qty_lit">
                                    <div class="col-lg-6  lent">
                                        @if ($mart = App\Models\product_varient::where('id', $varient_id->id)->first())
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
                                            @foreach ($varient as $product)
                                                @php
                                                    $fgujh = App\Models\product_varient::where('product_id', $product->product_id)->first();
                                                    $var = $fgujh->id;

                                                @endphp
                                                <button class="price_ty sts {{ $var == $product->id ? 'active' : '' }}"
                                                    data-vrid={{ $product->id }} type="button">
                                                    @if ($product->varient == 1)
                                                        {{ $product->value }} Liter
                                                    @elseif ($product->varient == 2)
                                                        {{ $product->value }} ml
                                                    @elseif ($product->varient == 3)
                                                        {{ $product->value }} grm
                                                    @elseif ($product->varient == 4)
                                                        {{ $product->value }} kg
                                                    @elseif ($product->varient == 5)
                                                        {{ $product->value }} nos
                                                    @endif
                                                    <br>
                                                    <span class="price_twe">Price: ₹{{ $product->offer_price }}</span>
                                                </button>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="col-lg-6 lent1">
                                        <div class="atrt">
                                            <h5 class="qtys">Qty</h5>
                                            <div class="prds_inr">
                                                <button class="btn_min1" type="button"
                                                    onclick="decrement(1,this)">-</button>
                                                <input type="number" class="input_poo1  productqty" minqty="1"
                                                    value="1" name="product_quantity[]" id="qty1"
                                                    maxqty="{{ $productstock->availablestock }}" readonly>
                                                <button class="btn_plus1" type="button"
                                                    onclick="increment(1,this)">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row tyty">
                                    <div class="col-lg-6">
                                        @auth
                                            <button class="btn home-btn1 singproduct_btn" type="submit" name="buynowbtn">
                                                BUY NOW
                                                &nbsp;<img src="/assets/images/buy1.png" class="img-fluid" alt="">
                                            </button>
                                        @else
                                            <a class="btn home-btn1" data-bs-toggle="modal" data-bs-target="#loginModal">
                                                BUY NOW
                                                &nbsp;<img src="/assets/images/buy1.png" class="img-fluid" alt="">
                                            </a>
                                        @endauth
                                    </div>
                                    <div class="col-lg-6">
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
                                            {{-- <li><a href="" target="_blank"><img src="/assets/images/msg.png"
                                                        class="img-fluid ghg" alt=""></a></li> --}}
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                    target="_blank"><img src="/assets/images/fac.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="https://api.whatsapp.com/send?text={{ url()->current() }}"
                                                    target="_blank"><img src="/assets/images/wha.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            {{-- <li><a href="" target="_blank"><img src="/assets/images/ins.png"
                                                        class="img-fluid ghg" alt=""></a></li>
                                            <li><a href="" target="_blank"><img src="/assets/images/ex.png"
                                                        class="img-fluid ghg" alt=""></a></li> --}}
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
                                    @if ($desc = App\Models\product::where('id', $protbl_data->id)->first())
                                        <div class="col-lg-12 col-12">
                                            <p style="word-wrap: break-word;">{{ $desc->product_specification }}</p>
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





@section('scripts')

<script>
  $(document).ready(function () {
    // Your PHP variables
    var offerPrice = @json($products->offer_price);
    var mrpPrice = @json($products->mrp_price);

    // Update elements with these values
    $('.he_price').text('₹' + offerPrice);
    $('.he_par').text('₹' + mrpPrice);

    // Calculate discount
    var discount = ((mrpPrice - offerPrice) / mrpPrice) * 100;
    $(".offer").text('(' + discount.toFixed(2) + "%" + ')');
});

</script>
@endsection