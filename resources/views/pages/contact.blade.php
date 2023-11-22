@extends('layouts.default')
@section('main-content')
    <section class="contact_section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 dffsrds">
                    <img src="/assets/images/Frame97.jpg" height="700px" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <form action="/mail" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="tps">
                            <h5 class="heer"data-aos="fade-up" data-aos-duration="500">Find Your</h5>
                            <h5 class="heer1" data-aos="fade-up" data-aos-duration="500">Interior Product Here</h5>
                            <div class="cont_cd">
                                <div class="toors" data-aos="fade-up" data-aos-duration="500">
                                    <div class="form-group">
                                        <label for="Name" class="fdsfddfd">Name</label>
                                        <input type="text" class="form-control name" name="name"
                                            placeholder="Enter Your Name Here" required
                                            onkeydown="return /[a-z ]/i.test(event.key)">
                                        <span id="message1" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="toors" data-aos="fade-up" data-aos-duration="500">
                                    <div class="form-group">
                                        <label for="PhoneNumber" class="fdsfddfd">Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+91</span>
                                            </div>
                                            <input type="text" class="form-control phone" id="PhoneNumber" name="phone"
                                                placeholder="Enter Your Phone Number Here" maxlength="10" required
                                                onkeypress="return phone2(event);">
                                        </div>
                                        <span id="message3" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="toors" data-aos="fade-up" data-aos-duration="500">
                                    <div class="form-group">
                                        <label for="Country" class="fdsfddfd">Products</label>
                                        <select class="form-control products" id="Country" name="products">
                                            <option value="" hidden> Select Products</option>
                                            <option value="	 PVC MARBLE SHEET"> PVC MARBLE SHEET</option>
                                            <option value=" PVC 3D marble sheet"> PVC 3D marble sheet</option>
                                            <option value="PVC Wood Series ">PVC Wood Series </option>
                                            <option value="Wpc interior">Wpc interior</option>
                                            <option value="Wpc Exterior">Wpc Exterior</option>
                                            <option value="WPC Decking ">WPC Decking </option>
                                            <option value="Wooden flooring & laminated flooring ">Wooden flooring &
                                                laminated flooring </option>
                                            <option value=" Stone coated roofing "> Stone coated roofing </option>
                                            <option value="Soffit Panels">Soffit Panels</option>
                                            <option value="Wallpaper ">Wallpaper </option>
                                            <option value=" PU stone"> PU stone</option>
                                        </select>
                                        <span id="message5" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="toors" data-aos="fade-up" data-aos-duration="500">
                                    <div class="form-group">
                                        <label for="Message" class="fdsfddfd">Other Details</label>
                                        <textarea class="form-control comments" name="comments" id="" rows="2" placeholder="Any Message"></textarea>
                                        <span id="message4" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="btn-one text-center" data-aos="fade-up" data-aos-duration="500">
                                    <button type="submit" class="btn home-btn5" id="send-message">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="cont_section">
        {{-- <img src="/assets/images/cntact.png" class="img-fluid reddd" alt=""> --}}
        <h5 class="reddd">Contact</h5>
        <div class="container vcfdv">
            <div class="row" id="quick">
                <div class="col-lg-12">
                    <h2 class="fh2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">Quick.</h2>
                    <h2 class="fh2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="400">Support</h2>
                    <p class="fp" vdata-aos="fade-down" data-aos-duration="500">YOU CAN GET ALL THE CONTACT
                        INFORMATION.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row  bagggw" id="address">
                <div class="col-lg-5 col-md-5 col-sm-4 col-12 sds11 aos-init" data-aos="fade-up" data-aos-duration="500">

                    <img src="assets/images/maic.png">

                    <h3 class="foic">Address</h3>
                    <p class="foicp1">Home Grow Enterprises - Vadavalli, Coimbatore.
</p>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-12 sds11 aos-init" data-aos="fade-down"
                    data-aos-duration="500" id="tel">
                    <img src="assets/images/phic.png">

                    <h3 class="foic">Call Us</h3>



                    <a href="tel:+91-7788996891" style="text-decoration: none;"> +91 7788996891</a> <br>
                    {{-- <a href="tel:+91-8976523410" style="text-decoration: none;">+91 8976523410</a>  --}}



                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12 sds11 aos-init" data-aos="fade-up" data-aos-duration="500"
                    id="mail">

                    <img src="assets/images/miic.png">


                    <h3 class="foic">Email Us</h3>
                    <p class="foicp">support@homegrow.co.in</p>

                </div>
            </div>
        </div>



    </section>

    <div class="follow-img">
        <div class="container">
            <div class="row allos">
                <div class="col-lg-4">
                    <div class="footer-icon11">
                        <h5 class="foot_head11">Follow Us</h5>
                        <div class="asstrs">
                            <a href=" " target="_blank" class="yue"><i class="fab fa-instagram  footing-icons"
                                    aria-hidden="true"></i></a>
                            <a href="" target="_blank" class="yue"><i class="fab fa-whatsapp  footing-icons"
                                    aria-hidden="true"></i></a>
                            <a href="" target="_blank" class="yue"><i class="fab fa-facebook-f  footing-icons"
                                    aria-hidden="true"></i></a>
                            <!--<a href="" target="_blank"><i class="fab fa-twitter  footing-icons"-->
                            <!--        aria-hidden="true"></i></a>-->
                            <!--<a href="" target="_blank"><i class="fab fa-youtube  footing-icons"-->
                            <!--        aria-hidden="true"></i></a>-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-end">
                    <p class="rersesr">© 2023 Homegrow All Rights Reserved.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
