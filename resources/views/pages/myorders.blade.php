@extends('layouts.default')
@section('main-content')
    <div class="myaccount_section"></div>
    <section class="myaccount_section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="acc">My <span class="ct"> Account</span> </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="my_acc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <h5>My Orders</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 ">
                    <div class="sticky-top">
                        <a href="/myaccount" class="accounting ">
                            <img src="/assets/images/usr.png" alt="">
                            <div class="names">
                                <h5 class="hel1">Hello,</h5>
                                <h5 class="hel2">{{ Auth::user()->name }}</h5>
                            </div>
                        </a>

                        <div class="accounting2">
                            <ul class="manages">
                                @if (Auth::check())
                                    <li class="listers"><a href="/myaccount" class="vart active">My Orders</a></li>
                                @else
                                    <li class="listers"><a href="/" class="vart active">My Orders</a></li>
                                @endif

                                @if (Auth::check())
                                    <li class="listers"><a href="/accountsetting" class="vart">Account Settings</a></li>
                                @else
                                    <li class="listers"><a href="/" class="vart">Account Settings</a></li>
                                @endif

                                @if (Auth::check())
                                    <li class="listers"><a href="/manageaddress" class="vart">Manage Addresses</a></li>
                                @else
                                    <li class="listers"><a href="/" class="vart">Manage Addresses</a></li>
                                @endif



                            </ul>
                        </div>
                        <a href="" class="btn logout_btn">Logout</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="orders">

                        @if ($orders = App\Models\product_order::where('user_id', Auth::user()->user_id)->get())
                            @foreach ($orders as $oo)
                                @if ($slots1 = App\Models\productslot::where('order_id', $oo->order_id)->first())
                                    <div class="shopses">
                                        <a href="/my_order_status/{{ $slots1->order_id }}"  class="orde_ert">
                                            <div class="coco  acoun">
                                                <div class="car1">
                                                    <img src="/assets/images/my.jpg" class="img-fluid" alt="">
                                                    <div class="ioio">
                                                        @if ($vrs = App\Models\product::where('id', $slots1->product_id)->first())
                                                            <h5>{{ $vrs->product_name }}</h5>
                                                        @endif
                                                        @if ($vrs = App\Models\product::where('id', $slots1->product_id)->first())
                                                            <p>{{ $vrs->product_description }}</p>
                                                        @endif
                                                        @if ($mart = App\Models\product_varient::where('id', $slots1->product_varient_id)->first())
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
                                                        {{-- <h5>Coconut Oil</h5>
                                                <p>(Fresh product from Home Grow)</p>
                                                <h5>1Ltr</h5> --}}
                                                    </div>
                                                </div>
                                                <div class="car2">
                                                    <h5 class="rubee">₹{{ $oo->total_amount }}</h5>
                                                    <p class="qty33">Qty: {{ $slots1->quantity }}</p>
                                                </div>
                                                <div class="car3">
                                                    @if ($oo->delivery_status == 0)
                                                        <h5 class="last_h"><i class="fa fa-circle  cret1"
                                                                aria-hidden="true"></i>pending</h5>
                                                    @elseif ($oo->delivery_status == 1)
                                                        <h5 class="last_h"><i class="fa fa-circle  cret1"
                                                                aria-hidden="true"></i>Packing</h5>
                                                    @elseif ($oo->delivery_status == 2)
                                                        <h5 class="last_h"><i class="fa fa-circle  cret1"
                                                                aria-hidden="true"></i>Dispatched</h5>
                                                    @elseif ($oo->delivery_status == 3)
                                                        <h5 class="last_h"><i class="fa fa-circle  cret1"
                                                                aria-hidden="true"></i>Delivery</h5>
                                                    @elseif ($oo->delivery_status == 4)
                                                        <h5 class="last_h"><i class="fa fa-circle  cret"
                                                                aria-hidden="true"></i>
                                                            Delivered on {{ $slots1->delivery_date }}</h5>
                                                    @endif

                                                    <p class="last_p">Your item has been delivered</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
