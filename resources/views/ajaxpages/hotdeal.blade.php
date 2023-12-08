<div id="productsContainer">
    <div class="row  drdrrrr1">
        <!-- The products will be displayed here -->
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
                                <input type="hidden" value="{{ Auth::user()->user_id }}" name="user_id"
                                    class="user_id">
                            @endif

                            {{-- @if ($var = App\Models\product_varient::where('product_id', $pr->product_id)->first()) --}}
                            <input type="hidden" value="{{ $pr->product_id }}" name="product_main_id"
                                class="product_main_id">
                            {{-- @endif --}}

                            <input type="hidden" name="prd_varient_id" value="{{ $pr->id }}"
                                class="prd_varient_id">


                            <div class="ful_po">
                                <div class="prds_inr">
                                    <button type="button" class="btn_min"
                                        onclick="decreaseValue('hair-{{ $pr->id }}')">-</button>
                                    <input type="number" class="input_poo  productqty"
                                        id="hair-{{ $pr->id }}-number" min="1" max="100"
                                        value="1" name="productqty">
                                    <button type="button" class="btn_plus"
                                        onclick="increaseValue('hair-{{ $pr->id }}')">+</button>
                                </div>
                                <div class="add_to_cart">
                                    @if (Auth::check())
                                        <button type="button" class="btn theme-btn1 add_new_cart_submit"
                                            data-bs-toggle="modal" data-bs-target="add_new_cart_submit">Add to
                                            cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    @else
                                        <button type="button" class="btn theme-btn1 " data-bs-toggle="modal"
                                            data-bs-target="#loginModal">Add to
                                            cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="pagination">
            {{ $products->links() }}</div> --}}
    </div>
</div>
