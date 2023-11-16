<header class="section-header" id="navi">
    <a href="/"> <img src="/assets/images/logo.png" class="darks-logo img-fluid"> </a>
    <nav class="navbar navbar-expand-lg navbar-light  navbar-section ">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
            <div class="container ">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 col-xl-3">

                        <a class="nav-logo" href="/">
                            <img src="/assets/images/logo.png" class="white-logo  img-fluid" alt="">

                        </a>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <ul class="navbar-nav me-auto  mb-lg-0 second-nav ">
                            <li class="nav-item navbar-lists   @if (Request::segment(1) == '') active @endif  ">
                                <a class="nav-link  " aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'about') active @endif  ">

                                <a class="nav-link " href="/about">All Categories</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'products') active @endif   ">


                                <a class="nav-link " href="/products">Combo Products</a>
                            </li>
                            <li class="nav-item navbar-lists    @if (Request::segment(1) == 'gallery') active @endif    ">


                                <a class="nav-link " href="/gallery">Hot Deals</a>
                            </li>




                        </ul>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <div class="login-nav">
                            <a href="contact"><i class="fa fa-search hd" aria-hidden="true"></i></a>
                            <a href="contact"><i class="fa fa-heart hd" aria-hidden="true"></i></a>
                            <a href="contact"><i class="fa fa-shopping-cart hd" aria-hidden="true"></i></a>
                            <a href="contact"><i class="fa fa-user hd" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
</header>


<nav class="social-media-side">
    <ul>
        <li><a href="https://api.whatsapp.com/send?phone=919898989898" class="callu" target="_blank"> <img
                    src="/assets/images/logo/Whatsapp.png" class="img-fluid" alt=""> Whatsapp</a></li>
        <li><a href="tel:+86-18353930062" class="callu"> <img src="/assets/images/logo/Call.png" class="img-fluid"
                    alt="">Call </a></li>
    </ul>
</nav>




@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show " role="alert">
        Email has been sent.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
