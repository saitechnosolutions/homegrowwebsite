<div id="productsContainer">
    <div class="row  drdrrrr1">
        <!-- The products will be displayed here -->
        @foreach ($products as $pr)
            <div class="col-lg-4   col-md-12 col-sm-12   col-6   {{ $pr->categoryid }} ">
                <div class="product_one">
                    <div class="las_pro">
                        @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                            <div class="produs_img">
                                <a href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}"> <img
                                        src="{{ env('MAIN_URL') }}images/{{ $vrs->product_image }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                        @endif
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
                                            onclick="decreaseValue('top-hair-{{ $pr->id }}')">-</button>
                                        <input type="number" class="input_poo  productqty"
                                            id="top-hair-{{ $pr->id }}-number" min="1" max="100"
                                            value="1" name="productqty" readonly>
                                        <button type="button" class="btn_plus"
                                            onclick="increaseValue('top-hair-{{ $pr->id }}')">+</button>
                                    </div>
                                    <div class="add_to_cart">
                                        @if (Auth::check())
                                            <button type="button" class="btn theme-btn1 add_new_cart_submit"
                                                data-bs-toggle="modal" data-bs-target="add_new_cart_submit" >Add to
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
                    <a href="/single_products/{{ $pr->id }}/{{ $pr->product_id }}" class="wer">
                        @if ($vrs = App\Models\product::where('id', $pr->product_id)->first())
                            <h5 class="he_head">{{ $vrs->product_name }}</h5>
                        @endif
                        <h5 class="he_para">₹{{ $pr->offer_price }} <span class="he_para1">
                                ₹{{ $pr->mrp_price }}</span> </h5>
                    </a>
                </div>
            </div>
        @endforeach
        {{-- <div class="pagination">
            {{ $products->links() }}</div> --}}
    </div>
</div>