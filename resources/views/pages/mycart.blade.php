@extends('layouts.default')
@section('main-content')
    <section class="mycart_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">My <span class="pr1"> Cart </span></h5>
            </div>
        </div>
    </section>

    @if ($cart = App\Models\Cart::where('user_id', Auth::user()->user_id)->get())
        {{-- @dd($cart) --}}
        @if ($cart->count() == 0)
            <section class="mycarts_sec  deee">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <h5 class="shop">My <span class="ct">Cart</span> </h5>
                        </div>
                        <div class="col-lg-2">
                            <a href="/" class="btn  home-btn3"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back to shop</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="emptyu">
                                <img src="/assets/images/no.png" class="img-fluid " alt="">
                                <p class="paresr">Your cart is empty. Start shopping!<br>
                                    <!--<span class="paresr1"> You will find a lot of interesting products on our “Shop”-->
                                    <!--    page.</span>-->
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @else
            <section class="mycarts_sec">
                <div class="container">
                    <h5 class="shop">My <span class="ct">Cart</span> </h5>
                    <form method="POST" action="/checkout">
                        @csrf
                        <div class="row  myhart_ale">
                            <div class="col-lg-8  shopses-full">
                                @foreach ($cart as $car)
                                    <div class="shopses">
                                        <div>

                                            <div class="coco">
                                                <div class="car1">
                                                    @if ($vrs = App\Models\product::where('id', $car->product_id)->first())
                                                        <a
                                                            href="/single_products/{{ $car->product_varient_id }}/{{ $car->product_id }}">
                                                            <img src="{{ env('MAIN_URL') }}images/{{ $vrs->product_image }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    @endif
                                                    <div class="ioio">
                                                        @if ($vrs = App\Models\product::where('id', $car->product_id)->first())
                                                            <h5>{{ $vrs->product_name }}</h5>
                                                        @endif
                                                        @if ($vrs = App\Models\product::where('id', $car->product_id)->first())
                                                            <p>{{ $vrs->product_description }}</p>
                                                        @endif
                                                        @if ($mart = App\Models\product_varient::where('id', $car->product_varient_id)->first())
                                                            @if ($mart->varient == 1)
                                                                <h5>{{ $mart->value }}Liter</h5>
                                                            @elseif ($mart->varient == 2)
                                                                <h5>{{ $mart->value }}ml</h5>
                                                            @elseif ($mart->varient == 3)
                                                                <h5>{{ $mart->value }}grm</h5>
                                                            @elseif ($mart->varient == 4)
                                                                <h5>{{ $mart->value }}kg</h5>
                                                            @elseif ($mart->varient == 5)
                                                                <h5>{{ $mart->value }}nos</h5>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="car2">
                                                    @if ($productstock = App\Models\ProductStock::where('pro_ver_id', $car->product_varient_id)->first())
                                                        <input type="hidden" name="available_stock[]"
                                                            value="{{ $productstock->availablestock }}">
                                                    @endif
                                                    @if ($vrs1 = App\Models\product_varient::where('id', $car->product_varient_id)->first())


                                                        <input type="hidden" value="{{ $vrs1->product_id }}"
                                                            name="product_id[]">
                                                        <input type="hidden" value="{{ $vrs1->id }}"
                                                            name="product_varient_id[]">
                                                        <input type="hidden" value="{{ $vrs1->product_gst }}"
                                                            name="gst[]">
                                                        <input type="hidden" id="price_offer_{{ $vrs1->offer_price }}"
                                                            name="proprice[]" >
                                                        <input type="hidden"
                                                            name="ogproprice[]" value="{{$vrs1->offer_price}}">
                                                        <input type="hidden" id="mrprice" value="{{ $vrs1->mrp_price }}"
                                                            name="mrpprice[]">
                                                        <input type="hidden" class="cart_qty" name="product_quantity[]">
                                                        <input type="hidden" class="totalamtcart" name="totalamt">

                                                        <h5 class="rubee" id="price-{{ $vrs1->offer_price }}">
                                                            ₹{{ $vrs1->offer_price }}</h5>
                                                    @endif
                                                    <div class="prds_inr">
                                                        <button type="button" class="btn_min1"
                                                            onclick="decreaseValue1('{{ $vrs1->offer_price }}')">-</button>
                                                        <input type="number" class="input_poo1"
                                                            id="hair-{{ $vrs1->offer_price }}-number" value="{{ $car->product_quantity }}"
                                                            min="1" max="{{ $productstock->availablestock }}"
                                                            readonly onchange="updatePrice('{{ $vrs1->offer_price }}')">
                                                        <button type="button" class="btn_plus1"
                                                            onclick="increaseValue1('{{ $vrs1->offer_price }}')">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" data-id="{{ $car->id }}"
                                                class="btn  rems removes_carts">Remove</button>

                                        </div>
                                    </div>
                                @endforeach
                                <div class="row ful_crtr">
                                    <div class="col-lg-3 col-6">
                                        <a href="/" class="btn  home-btn3"><i class="fa fa-arrow-left"
                                                aria-hidden="true"></i>
                                            Back to shop</a>
                                    </div>
                                    <div class="col-lg-3 col-6 text-end">
                                        <button type="button" data-id="{{ Auth::user()->user_id }}"
                                            class="btn removall_cart">Remove all</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  dasdd">
                                <div class="go_chec sticky-top">
                                    <div class="row  tere">
                                        {{-- <div class="col-lg-12  retfyy">
                                        <div class="bo_che">
                                            <div class="sub_to">
                                                <h5 class="subtot1">Subtotal:</h5>
                                                <h5 class="subtot1">₹1403.97</h5>
                                            </div>
                                        </div>

                                    </div> --}}
                                        <div class="bo_che1">
                                            <div class="sub_to">
                                                <h5 class="tot1">Total:</h5>
                                                <h5 class="tot" id="totalAmount" name="tota_cart_value">₹</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn  home-btn4">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        @endif
    @endif
@endsection