@extends('layouts.default')
@section('main-content')
    <style>
        :root {
            --line-border-fill: #5CA904;
            --line-border-empty: rgba(205, 205, 180, 1);
            --text-empty: rgba(175, 175, 150, 1);
            --text-fill: rgba(74, 54, 50, 1);
            --background-color: #5CA904;
        }

        .port .progress-container {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 30px;
            max-width: 100%;
            width: 100%;
        }

        .port .progress-container::before {
            content: '';
            background-color: var(--line-border-empty);
            position: absolute;
            top: 18px;
            left: 20px;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            z-index: -1;
        }

        .port .progress {
            background-color: #5CA904;
            position: absolute;
            top: 7px;
            left: 27px;
            transform: translateY(-50%);
            height: 4px;
            max-width: 100%;
            width: 0%;
            z-index: 1;
            transition: 400ms ease;
        }

        .port .text-wrap {
            display: inline-block;
            text-align: center;
            width: 75px;
        }

        .port .text-wrap p {
            color: var(--text-fill);
            transition: 400ms ease;
            padding-top: 16px;
            margin: 0px;
        }

        .port .text-wrap.active p {
            font-weight: 400;
            color: var(--text-fill);
            transition: 400ms ease;
        }

        .port .circle {
            background-color: #5CA904;
            border: 3px solid var(--line-border-empty);
            color: var(--text-empty);
            font-weight: 700;
            border-radius: 50%;
            height: 15px;
            width: 15px;
            position: relative;
            /* Position the child element */
            left: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 400ms ease;
        }

        .port .text-wrap.active div.circle {
            border-color: #5CA904;
            color: var(--text-fill);
        }

        .port .btn {
            background-color: #5CA904;
            color: white;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            font-family: inherit;
            padding: 10px 30px;
            margin: 5px;
            font-size: 14px;
        }

        .port .btn:active {
            transform: scale(0.98);
        }


        .port .btn:focus {
            outline: 0;
        }

        .port .btn:disabled {
            background-color: var(--line-border-empty);
            cursor: not-allowed;
            color: #5CA904;
            transform: none;
        }
    </style>

    <section class="delivery_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="deliver_status">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="stroy"><strong>Delivery</strong> Address</h5>
                                @if (Auth::check())
                                    <p class="loosuiku"><strong>{{ Auth::user()->name }}</strong></p>

                                    @if ($adre = App\Models\product_order_user_adress::where('order_id', $order_id->order_id)->first())
                                        <p>Delivery at <strong>{{ $adre->address_line_one }}</strong></p>

                                        <p><strong>Contact :</strong> {{ $adre->address_phone_number }}</p>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 pt-3 pb-3">
                    <div class="row orders">
                        <div class="col-lg-5">
                            <div class="">
                                <div>
                                    <div class="coco  acoun">
                                        <div class="car1">
                                            <img src="/assets/images/my.jpg" class="img-fluid" alt="">
                                            <div class="ioio">
                                                @if ($orders = App\Models\productslot::where('order_id', $order_id->order_id)->get())
                                                    {{-- @dd($orders); --}}
                                                    @foreach ($orders as $order_id1)
                                                        @if ($vrs = App\Models\product::where('id', $order_id1->product_id)->first())
                                                            <h5>{{ $vrs->product_name }}</h5>
                                                        @endif
                                                        @if ($vrs = App\Models\product::where('id', $order_id1->product_id)->first())
                                                            <p>{{ $vrs->product_description }}</p>
                                                        @endif
                                                        @if ($mart = App\Models\product_varient::where('id', $order_id1->product_varient_id)->first())
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
                                                        <div class="whole-ru">
                                                            @if ($vrs = App\Models\product_order::where('order_id', $order_id1->order_id)->first())
                                                                <div class="ret">₹{{ $vrs->total_amount }}</div>
                                                            @endif
                                                            <div class="ret1">Qty: {{ $order_id1->quantity }}</div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  port">
                            <div class="total_track">
                                <p class="vere">Shipped</p>
                                <p class="vere">dispatched</p>
                                <p class="vere">Out of delivery</p>
                                <p class="vere">Delivered</p>
                            </div>
                            <div class="track_order_bar">
                                <div class="progress-container">
                                    <div class="progress" id="progress"></div>
                                    <div class="text-wrap active">
                                        <div class="circle"></div>
                                        {{-- <p class="text">18-10-2023</p>
                                    <p>01:15</p> --}}
                                    </div>
                                    <div class="text-wrap">
                                        <div class="circle"></div>
                                        {{-- <p class="text">20-10-2023</p>
                                    <p>01:15</p> --}}
                                    </div>
                                    <div class="text-wrap">
                                        <div class="circle"></div>
                                        {{-- <p class="text">22-10-2023</p>
                                    <p>01:15</p> --}}
                                    </div>
                                    <div class="text-wrap">
                                        <div class="circle"></div>
                                        {{-- <p class="text">23-10-2023</p>
                                    <p>01:15</p> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="total_track1">
                                <div class="vertio">
                                    <p class="text">18-10-2023</p>
                                    <p>01:15</p>
                                </div>
                                <div class="vertio">
                                    <p class="text">20-10-2023</p>
                                    <p>01:15</p>
                                </div>
                                <div class="vertio">
                                    <p class="text">22-10-2023</p>
                                    <p>01:15</p>
                                </div>
                                <div class="vertio">
                                    <p class="text">23-10-2023</p>
                                    <p>01:15</p>
                                </div>
                            </div> --}}
                            <button class="btn" id="back" disabled hidden>&larr; Back</button>
                            <button class="btn next" hidden data-triggerval="{{ $order_id->delivery_status }}">Next
                                &rarr;</button>



                            {{-- @dd($order_id->delivery_status); --}}
                            @if ($order_id->delivery_status == 0)
                                <h5 class="last_h" hidden><i class="fa fa-circle  cret1" aria-hidden="true"></i>pending</h5>
                            @elseif ($order_id->delivery_status == 1)
                                <h5 class="last_h" hidden><i class="fa fa-circle  cret1" aria-hidden="true"></i>Packing</h5>
                            @elseif ($order_id->delivery_status == 2)
                                {{-- dis --}}
                                <h5 class="last_h" hidden><i class="fa fa-circle  cret1" aria-hidden="true"></i>Dispatched</h5>
                            @elseif ($order_id->delivery_status == 3)
                                <h5 class="last_h" hidden><i class="fa fa-circle  cret1" aria-hidden="true"></i>Delivery</h5>
                            @elseif ($order_id->delivery_status == 4)
                                <h5 class="last_h" hidden><i class="fa fa-circle  cret" aria-hidden="true"></i>
                                    Delivered on </h5>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var triggerval = parseInt($(".btn.next").data("triggerval"));

            function triggerClickWithDelay() {
                $(".btn.next").trigger("click");
            }

            for (var i = 1; i < triggerval; i++) {
                setTimeout(triggerClickWithDelay, i *
                1500);
            }
        });
    </script>
@endsection
