<button type="button" class="btn btn-primary  ofers" hidden data-bs-toggle="modal" data-bs-target="#ofersModal"></button>

{{-- <button type="button" class="btn btn-primary  ofers" data-bs-toggle="modal" data-bs-target="add_new_cart_submit"></button> --}}
<!-- ========================== ADD TO CART  ================================== -->
<div class="modal fade  add_to_carts" id="add_new_cart_submit" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-body addses_cart">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-center">
                            <img src="/assets/images/succes.png" class="isod" alt="">
                            <p class="addes_csrtr">Item Added To Cart !</p>
                            <div class="weight">
                                <img src="/assets/images/small.png" class="img-fluid product_image" id=""
                                    alt="">
                                <div class="pricre">
                                    <h5 class="product_name">Combo Smart</h5>
                                    <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span></h5>
                                </div>
                            </div>
                            <a href="/mycart" class=" btn home-btn3 poster">Proceed to cart</a>
                            <a href="/" class="kalart">Back to Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade  add_to_carts" id="add_new_wishlist_submit" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-body addses_cart">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-center">
                            <img src="/assets/images/succes.png" class="isod" alt="">
                            <p class="addes_csrtr">Item Added To Wishlist !</p>
                            <div class="weight">
                                <img src="/assets/images/small.png" class="img-fluid  product_image" alt="">
                                <div class="pricre">
                                    <h5 class="product_name">Combo Smart</h5>
                                    <h5 class="he_para">₹349.00 <span class="he_para1">₹1128.00</span></h5>
                                </div>
                            </div>
                            <a href="/mywishlist" class=" btn home-btn3 poster">Proceed to Wishlist</a>
                            <a href="/" class="kalart">Back to Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================offer ================================== -->

@php
    $userId = Auth::user()?->user_id;

    $previousPurchaseCount = DB::table('product_orders')
        ->where('user_id', $userId)
        ->where('payment_status', 1)
        ->count();

@endphp

@if (!$userId || $previousPurchaseCount == 0)

    <div class="modal fade  offer_zone" id="ofersModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content sunber">
                <div class="closed_opo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="container">
                        <div class="row align-items-center  leadese">
                            <div class="col-lg-6">
                                <img src="/assets/images/comp.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 text-center">
                              @if (Auth::check())
                                <p class="tolog"></p>
                            @else
                                <p class="tolog">Login to</p>
                            @endif
                                @if ($cou = App\Models\Coupon::first())
                                    <h5 class="rozha">Get {{ $cou->discount }}% OFF on your first purchase</h5>
                                @endif
                                <div class="ofer_full">
                                    <p class="code">Use code at checkout <button id="copyButton"
                                            value="{{ $cou->codename }}" title="click to copying"
                                            class="btn home-btn6">{{ $cou->codename }}</button> </p>
                                </div>
                                @if (Auth::check())
                                    {{-- <a class="xsd btn home-btn7">{{ Auth::user()->name }}</a> --}}
                                @else
                                    <a class="xsd btn home-btn7"  data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Login</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


<footer class="footer_section">
    <div class="container foot_section">
        <div class="row foter_ofg">
            <div class="col-lg-3 fdfdtrt">
                <a href="">
                    <img src="/assets/images/footer.svg" class="img-fluid" alt="">
                </a>

                <p class="foot_br">Home Grow is the definition of Health and Wellness! Founded in 2023, we like to say we are bringing joy to India, and it’s something we hope to be doing for years to come. But we offer more than just high-quality, delicious products. </p>
                <a  href="https://play.google.com/store/apps/details?id=com.ecom.home_grow" target="_blank" class="btn home-btn9">Download App</a>
                <!--<p class="foot_br">Based in India</p>-->
            </div>
            <div class="col-lg-3">
                <h5 class="foot_head">Quick Links</h5>
                <ul class="footer_list">
                    <li> <a href="/" class="footer_anc"> Home </a></li>
                    <li> <a href="/about" class="footer_anc"> About Us</a></li>
                    <li> <a href="/allproducts" class="footer_anc"> All Categories </a></li>
                    <li> <a href="/contact" class="footer_anc"> Contact </a></li>
                    {{-- <li> <a href="/gallery" class="footer_anc"> Gallery </a></li> --}}
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="foot_head">Information</h5>
                <ul class="footer_list">
                    <!--<li> <a href="/cancellation" class="footer_anc"> Cancellation  </a></li>-->
                    <!--<li> <a href="/faq" class="footer_anc"> FAQs </a></li>-->

                    <li> <a href="/terms" class="footer_anc"> Terms and Conditions </a></li>
                    <li> <a href="/privacy_policy" class="footer_anc"> Privacy Policy </a></li>
                    <li> <a href="/shipping" class="footer_anc"> Shipping Policy </a></li>
                    <li> <a href="/replacement" class="footer_anc"> Replacement and Return Policy </a></li>
                </ul>
            </div>
            {{-- <div class="col-lg-4">
                <h5 class="foot_head">Contact Us</h5>

                <p>Merchant Mart
                    Room 606, T2, HCC,
                    Menghe road,
                    Linyi,
                    Lanshan district,
                    Shandong Province,
                    China</p>
                <ul class="FOOT_NUMs">
                    <li> <a href="tel:+86-18353930062 " class="foot_num">+86 18353930062 </a> </li>
                </ul>
                <p> <a href="mailto:merchantmartint@gmail.com" class="foot_num"> merchantmartint@gmail.com</a> </p>

            </div> --}}
            <div class="col-lg-3">
                <h5 class="foot_head1">Follow Us</h5>

                <div class="footer-icon">
                    <a href="https://www.facebook.com/Home.Grow.CBE" target="_blank" class="art"><img src="/assets/images/fas.png"
                            class="img-fluid" alt=""></a>
                    <a href="https://www.instagram.com/Home.Grow.CBE" target="_blank" class="art"><img src="/assets/images/ins1.png"
                            class="img-fluid" alt=""></a>
                    {{-- <a href="" target="_blank" class="art"><img src="/assets/images/you.png"
                            class="img-fluid" alt=""></a> --}}
                </div>
                <h5 class="foot_head1">For Queries</h5>
                <ul class="FOOT_NUMs">
                    <li> <a href="tel:+91-7788996891 " class="foot_num">+91-7788996891</a> </li>
                </ul>
            </div>
        </div>

    </div>

</footer>
<section class="  crer">
    <div class="container">
        <div class="row align-items-center">
            <p class="foot_para">Copyright © 2023 Homegrow All Rights Reserved. </p>
        </div>
    </div>
</section>