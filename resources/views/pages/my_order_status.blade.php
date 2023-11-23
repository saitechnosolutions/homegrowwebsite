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
            top: 18px;
            left: 52px;
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
            height: 35px;
            width: 35px;
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
                <div class="col-lg-12">
                    <div class="deliver_status">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="stroy"><strong>Delivery</strong> Address</h5>

                                <p class="loosuiku"><strong>Bharani Dharan</strong></p>

                                <p>Delivery at <strong>Home - 13-1, PSG-GRD Bhavan,Thaneer pandal,
                                        Vilankurichi Road, Peelamedu, Coimbatore-641004 </strong></p>


                                <p><strong>Contact :</strong> 9876542130</p>
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
                                                <h5>Coconut Oil</h5>
                                                <p>(Fresh product from Home Grow)</p>
                                                <h5>1Ltr</h5>
                                                <div class="whole-ru">
                                                    <div class="ret">₹249</div>
                                                    <div class="ret1">Qty: 9</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7  port">
                            <div class="total_track">
                                <p class="vere">Order Confirmed</p>
                                <p class="vere">Shipped</p>
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
                            <div class="total_track1">
                                <div class="vertio">
                                    <p class="text">18-10-2023</p>
                                    <p>01:15</p>
                                </div>
                                <div  class="vertio">
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
                            </div>
                            {{-- <button class="btn" id="back" disabled>&larr; Back</button>
                            <button class="btn" id="next">Next &rarr;</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
