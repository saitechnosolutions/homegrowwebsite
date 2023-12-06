@extends('layouts.default')
@section('main-content')
    <section class="mycart_section">
        <div class="container">
            <div class="row">
                <h5 class="all1">My <span class="pr1"> Wishlist </span></h5>
            </div>
        </div>
    </section>

    @if ($wishlists = App\Models\wishlist::where('user_id', Auth::user()->user_id)->get())
        @if ($wishlists->count() == 0)
            <section class="mycarts_sec  deee">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <h5 class="shop">My <span class="ct">Wishlist</span> </h5>
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
                                <p class="paresr">You don’t have any products in the Wishlist yet. <br>
                                    <span class="paresr1"> You will find a lot of interesting products on our “Shop”
                                        page.</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @else
            <section class="mycarts_sec">
                <div class="container">
                    <h5 class="shop">My <span class="ct">Wishlist</span> </h5>
                    <div class="row">
                        <div class="col-lg-6  shopses-full ">
                            @foreach ($wishlists as $wishlist)
                                <form class="ads_carts">

                                    @if (Auth::check())
                                        <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id"
                                            class="user_id">
                                    @endif

                                    <input type="hidden" value="{{ $wishlist->product_id }}" name="product_main_id"
                                        class="product_main_id">

                                    <input type="hidden" name="prd_varient_id" value="{{ $wishlist->product_varient_id }}"
                                        class="prd_varient_id">

                                    <div class="shopses">
                                        <div>
                                            <div class="coco">
                                                <div class="car1">
                                                    <a href="/single_products/{{ $wishlist->product_id }}">
                                                        <img src="/assets/images/my.jpg" class="img-fluid" alt="">
                                                    </a>
                                                    <div class="ioio">
                                                        @if ($vrs = App\Models\product::where('id', $wishlist->product_id)->first())
                                                            <h5>{{ $vrs->product_name }}</h5>
                                                        @endif
                                                        @if ($vrs = App\Models\product::where('id', $wishlist->product_id)->first())
                                                            <p>{{ $vrs->product_description }}</p>
                                                        @endif
                                                        @if ($mart = App\Models\product_varient::where('id', $wishlist->product_varient_id)->first())
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
                                                    @if ($vrs1 = App\Models\product_varient::where('id', $wishlist->product_varient_id)->first())
                                                        <h5 class="rubee" id="price-{{ $vrs1->offer_price }}">
                                                            ₹{{ $vrs1->offer_price }}</h5>
                                                    @endif

                                                    {{-- value="{{ $wishlist->product_quantity }}" --}}
                                                    <div class="prds_inr">
                                                        <button class="btn_min1" type="button"
                                                            onclick="decreaseValue1('{{ $vrs1->offer_price }}')">-</button>
                                                        <input type="number" class="input_poo1 productqty"
                                                            name="productqty" id="hair-{{ $vrs1->offer_price }}-number"
                                                            value="1" min="1" max="100" readonly
                                                            onchange="updatePrice('{{ $vrs1->offer_price }}')">
                                                        <button class="btn_plus1" type="button"
                                                            onclick="increaseValue1('{{ $vrs1->offer_price }}')">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tyet">
                                                <button type="button" data-id="{{ $wishlist->id }}"
                                                    class="btn  rems removes_wishlist">Remove</button>

                                                <button type="button" class="btn home-btn8 add_new_cart_submit"
                                                    data-bs-toggle="modal" data-bs-target="add_new_cart_submit">ADD TO CART
                                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endforeach

                            <div class="row ful_crtr">
                                <div class="col-lg-4">
                                    <a href="/" class="btn  home-btn3"><i class="fa fa-arrow-left"
                                            aria-hidden="true"></i>
                                        Back to shop</a>
                                </div>
                                <div class="col-lg-4 text-end">
                                    <button type="button" data-id="{{ Auth::user()->user_id }}"
                                        class="btn removall_wishlist">Remove all</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif
    @endif
@endsection
