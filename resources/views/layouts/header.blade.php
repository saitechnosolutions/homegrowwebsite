<header class="section-header" id="navi">
    <a href="/"> <img src="/assets/images/logo.svg" class="darks-logo img-fluid"> </a>
    <nav class="navbar navbar-expand-lg navbar-light  navbar-section ">

        <div class="login-nav1">
            <div class="loger">
                <button type="button" class="iconses_one rit" data-bs-toggle="modal" data-bs-target="#search"><i
                        class="fa fa-search hd" aria-hidden="true"></i> </button>
                <a href="#" class="iconses_one">
                    <div class="num_couny">0</div><i class="fa fa-heart hd" aria-hidden="true"></i>
                </a>
                <a href="#" class="iconses_one">
                    <div class="num_couny">0</div><i class="fa fa-shopping-cart hd" aria-hidden="true"></i>
                </a>

                <div class=" dropstart">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa fa-user hd" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                        @if (Auth::check())
                            <li><a class="dropdown-item  @if (Request::segment(1) == 'myaccount') active @endif "
                                    href="/myaccount">My Account</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        @else
                            <li class="droplink"><a class="dropdown-item " href="#" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Login</a></li>
                            <li class="droplink"><a
                                    class="dropdown-item @if (Request::segment(1) == 'register') active @endif "
                                    href="/register">Register</a></li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
            <div class="container ">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 col-xl-3">

                        <a class="nav-logo" href="/">
                            <img src="/assets/images/logo.svg" class="white-logo  img-fluid" alt="">

                        </a>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <ul class="navbar-nav me-auto  mb-lg-0 second-nav ">
                            <li class="nav-item navbar-lists   @if (Request::segment(1) == '/') active @endif  ">
                                <a class="nav-link  " aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'about') active @endif  ">

                                <a class="nav-link " href="/allproducts">All Categories</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'allproducts') active @endif   ">


                                <a class="nav-link " href="/products">Combo Products</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'gallery') active @endif    ">

                                <a class="nav-link " href="/gallery">Hot Deals</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <div class="login-nav">
                            <button type="button" class="iconses_one rit" data-bs-toggle="modal"
                                data-bs-target="#search"><i class="fa fa-search hd" aria-hidden="true"></i> </button>
                            @if (Auth::check())
                                @php $wishlistCount = \App\Models\wishlist::where('user_id', Auth::user()->user_id)->count(); @endphp
                                <a href="/mywishlist" class="iconses_one  wish_list_ic">
                                    <div class="num_couny add_to_wishlist_num">{{ $wishlistCount }}</div><i class="fa fa-heart hd"
                                        aria-hidden="true"></i>
                                </a>
                            @else
                                <a href="#" class="iconses_one" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">
                                    <div class="num_couny">0</div><i class="fa fa-heart hd" aria-hidden="true"></i>
                                </a>
                            @endif
                            @if (Auth::check())
                                @php $cartCount = \App\Models\cart::where('user_id', Auth::user()->user_id)->count(); @endphp
                                <a href="/mycart" class="iconses_one" id="cartIcon">
                                    <div class="num_couny  add_to_cart_num">{{ $cartCount }}</div><i
                                        class="fa fa-shopping-cart hd" aria-hidden="true"></i>
                                </a>
                            @else
                                <a href="#" class="iconses_one" id="cartIcon" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">
                                    <div class="num_couny">0</div><i class="fa fa-shopping-cart hd"
                                        aria-hidden="true"></i>
                                </a>
                            @endif

                            <div class=" dropstart">
                                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-user hd" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                    @if (Auth::check())
                                        <li><a class="dropdown-item  @if (Request::segment(1) == 'myaccount') active @endif "
                                                href="/myaccount">My Account</a></li>
                                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    @else
                                        <li class="droplink"><a class="dropdown-item " href="#"
                                                data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                                        <li class="droplink"><a
                                                class="dropdown-item @if (Request::segment(1) == 'register') active @endif "
                                                href="/register">Register</a></li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
</header>





{{-- =============================search modal ================== --}}

<div class="search_engine  modal right fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="modal-title" id="myModalLabel2">SEARCH OUR SITE</h4>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Search" name="searchwordsss"
                            id="searchwordsss" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search hd"
                                aria-hidden="true"></i> </span>
                    </div>
                </form>

                <h5 class="fdjjee">Search Results</h5>
                <div class="full_sided_head">
                    <div id="search_group"></div>
                    {{-- @foreach ($products as $product)
                        <div class="first_node" id="search_group">
                            <img src="/assets/images/{{ $product->image }}" class="img-fluid" width="70px"
                                alt="">
                            <div class="para_ht">
                                <h5 class="gro1">{{ $product->product_name }}</h5>
                                <h5 class="he_para11">{{ $product->unit_value }} <span
                                        class="he_para12">{{ $product->unit_value }}</span> </h5>
                            </div>
                        </div>
                    @endforeach --}}
                    @if ($products = App\Models\product::all())
                        @foreach ($products as $pr)
                            <div class="first_node  ghh">
                                <img src="/assets/images/pr3.jpg" class="img-fluid" width="70px" alt="">
                                <div class="para_ht">
                                    <h5 class="gro1">{{ $pr->product_name }}</h5>
                                    <h5 class="he_para11">₹349.00 <span class="he_para12">₹1128.00</span> </h5>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>

        </div>
    </div>
</div>















{{-- ====================login modal ======================== --}}

<div class="modal fade   loginform" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">
                <div class="container reg_container">
                    <div class="row">
                        <div class="col-lg-6  loher">
                            <div class="logses_ful">
                                <h5 class="wel_log">Welcome Back <img src="/assets/images/hand.png" class="img-fluid"
                                        width="23px" alt=""></h5>
                                <p class="groce">Welcome to your Healthy store! Sign in now to explore the
                                    Fresh & healthier groceries </p>
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="" class="roboto">Mobile Number</label>
                                                <input type="text" class="form-control emil" name="login_mblnum">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-3">
                                            <div class="form-group">
                                                <label for="" class="roboto">Password</label>
                                                <div class="loginssss">
                                                    <div class="input-group">
                                                        <input class="form-control  mert" id="myInput"
                                                            type="password" name="login_passwrd" required=""
                                                            placeholder="Password" autocomplete="off">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="input-group-text toggle-password form-control  login_pass_ide"
                                                                onclick="togglePassword()">
                                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="pind" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forgotModal">Forgot Pin ?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-4">
                                            <div class="tree text-center">
                                                <button class="btn  home-btn3  logins">
                                                    Sign Up</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-2">
                                            <div class="d-flex align-items-center">
                                                <div class="line1"></div>
                                                <div class="orser">or</div>
                                                <div class="line1"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="yiuo">Don't you have an account? <a href="/register"
                                                    class="sign_ups">Register</a> </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="/assets/images/login.jpg" class="img-fluid  logs_img" alt="">
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div> --}}
        </div>
    </div>
</div>


{{-- ================forget modal  ===================== --}}
<div class="modal fade  loginform" id="forgotModal" tabindex="-1" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container reg_container">
                    <div class="row  align-items-center ">
                        <div class="col-lg-6 loher">
                            <div class="logses_ful">
                                <h5 class="wel_log">Forgot Pin <img src="/assets/images/forpin.png" class="img-fluid"
                                        width="25px" alt=""></h5>
                                <p class="groce">Enter your email address to change
                                    your password</p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12 pt-5">
                                            <div class="form-group">
                                                <label for="" class="roboto">Email</label>
                                                <input type="text" class="form-control emil">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 pt-4">
                                            <div class="tree text-center">
                                                <a href="" class="btn  home-btn3">
                                                    Reset Password</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <button type="button" class="btn killer_cop"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="/assets/images/for.png" class="img-fluid  logs_img" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- ================================Add to Cart ===================== --}}

<div class="modal fade  loginform1" id="forgotModal" tabindex="-1" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container reg_container">
                    <div class="row  align-items-center ">
                        <div class="col-lg-6">
                            <div class="logses_ful">
                                <h5 class="wel_log">Forgot Pin <img src="/assets/images/forpin.png" class="img-fluid"
                                        width="25px" alt=""></h5>
                                <p class="groce">Enter your email address to change
                                    your password</p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12 pt-5">
                                            <div class="form-group">
                                                <label for="" class="roboto">Email</label>
                                                <input type="text" class="form-control emil">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 pt-4">
                                            <div class="tree text-center">
                                                <a href="" class="btn  home-btn3">
                                                    Reset Password</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <button type="button" class="btn killer_cop"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="/assets/images/for.png" class="img-fluid  logs_img" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<nav class="social-media-side">
    <ul>
        <li><a href="https://api.whatsapp.com/send?phone=919898989898" class="callu" target="_blank"> <img
                    src="/assets/images/logo/Whatsapp.png" class="img-fluid" alt=""> Whatsapp</a></li>
        <li><a href="tel:+86-18353930062" class="callu"> <img src="/assets/images/logo/Call.png" class="img-fluid"
                    alt="">Call </a></li>
    </ul>
</nav>




{{-- @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        Email has been sent.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif --}}
