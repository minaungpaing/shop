@extends('layout.app')

@section('title')
    PARADISE
@endsection()

@section('content')   
    <div class="body">
        @include('layout.nav')
        <div class="heading-text">
            WOMEN'S FASHION 
            <br> 50% OFF<br>
            <button id="mybtn" class="btn btn-lg">Shop Now</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4" id="banner1">
                <div class="banner-button">
                    <p style="color:#fff;font-size:40px;text-shadow:2px 2px 2px rgba(0,0,0,0.5);"><b>MEN</b></p>
                    <button class="btn btn-lg" id="b-btn">Shop Now</button>
                </div>
            </div>
            <div class="col-lg-4"  style="padding:0" id="banner2">
                <div class="banner-button">
                    <p style="color:#fff;font-size:40px;text-shadow:2px 2px 2px rgba(0,0,0,0.5);"><b>WOMEN</b></p>
                    <button class="btn btn-lg" id="b-btn">Shop Now</button>
                </div>
            </div>
            <div class="col-lg-4" style="padding:0" id="banner3">
                <div class="banner-button">
                    <p style="color:#fff;font-size:40px;text-shadow:2px 2px 2px rgba(0,0,0,0.5);"><b>GLASSES</b></p>
                    <button class="btn btn-lg" id="b-btn">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px;"></div>

    <!-- banner1 -->
    <div class="container" >
        <h4 style="text-align:center">SHOP WITH <font color="#ff7513">US</font></h4>
        <div style="height:50px;"></div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <p class="banner-text">
                    ALL BRANDED MEN'S<br> SUITS ARE FLAT<font color="#ff7513"> 30% <br>  DISCOUNT</font>
                </p>
                <p><font color="#797979" size="2px">Visit our shop to see amazing creations from our designers.</font></p>
                <br>
                <button id="b-button" class="btn btn-xs">Shop Now</button>
            </div>
            <div class="col-lg-5">
                <img src="img/banner/banner5.jpg" width="100%" style="border-radius:10px;">
            </div>
        </div>
        <div style="height:100px;"></div>
    </div>

    <!-- banner2 -->
    <div class="container-fluid" style="background:#f4f4f4">
        <div class="row">
            <div class="col-lg-8" style="padding:0">
                <img src="img/banner/33.jpg" width="100%">
            </div>
            <div class="col-lg-4">
            <div style="height:25px;"></div>
                <p class="banner-text1">
                ALL BRANDED <br>WOMEN'S BAGS ARE <br>FLAT<font color="#ff7513"> 30%  DISCOUNT</font>
                </p>
                <p><font color="#797979" size="2px">Visit our shop to see amazing creations from our designers.</font></p>
                <br>
                <button id="b-button" class="btn btn-xs">Shop Now</button>
            </div>
        </div>
    </div>
    <div style="height:75px;"></div>

    <!-- latest product -->
    <div class="container">
        <h4 style="text-align:center">LATEST  <font color="#ff7513">PRO</font>DUCT<font color="#ff7513">S</font></h4>
        <p style="text-align:center;color:#797979;font-size:12px;">What People love</p>
        <div style="height:50px;"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/products/p1.jpg" alt="p1" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p2.jpg" alt="p2" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p3.jpg" alt="p3" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p6.jpg" alt="p4" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/products/p6.jpg" alt="p1" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p3.jpg" alt="p2" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p2.jpg" alt="p3" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/products/p1.jpg" alt="p4" width="100%"><br>
                        <p class="p-text">
                            White T-shirt<br>
                            <small><font color="#797979">$ 199</font></small>
                        </p>
                    </div>
                </div>        
            </div>
        </div>
    </div>    
    <div style="height:50px;"></div>

    <!-- bestseller! -->
    <div class="bestseller">
        <div class="container">
                <div style="height:100px;"></div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6" style="text-align:center;">
                        <h4 style="text-shadow:2px 2px 2px rgba(0,0,0,0.2);"><b><font color="#fff">NEW IN<font color="#ff7513"> &</font> OPTIONS</font><font color="#ff7513"> TO CHANGE</font></b></h4>
                        <br>
                        <p style="color:#fff;font-family:arial;font-size:12px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore rem, dicta assumenda mollitia molestias quas nihil quasis.</p>
                        <br>
                        <button id="mybtn" class="btn btn-xs">Shop Now</button>
                    </div>
                </div>
        </div>
        <div style="height:75px;"></div>    
    </div>

    <!-- Our Service! -->
    <div style="service">
        <div style="height:75px"></div>
        <h4 align="center">OUR <font color="#ff7513">SER</font>VICE<font color="#ff7513">S</font></h4>
        <div style="height:50px"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title" align="center">FREE DELIVERY</h6>
                                    <p class="card-text" align="center">For all order over 99$.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-icon">
                                    <i class="fa fa-user-clock"></i>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title" align="center">DELIVER ON TIME</h6>
                                    <p class="card-text" align="center">For all order over 99$.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-icon">
                                    <i class="fa fa-money-bill-wave"></i>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title" align="center">SECURE PAYMENT</h6>
                                    <p class="card-text" align="center">100% secure payment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-icon">
                                    <i class="fa fa-headset"></i>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title" align="center">24hr SERVICE</h6>
                                    <p class="card-text" align="center">For all order over 99$.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
        </div>
        <div style="height:75px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/1.png" width="100%" alt="">
                </div>
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/2.png" width="100%" alt="">
                </div>
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/3.png" width="100%" alt="">
                </div>
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/4.png" width="100%" alt="">
                </div>
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/5.png" width="100%" alt="">
                </div>
                <div class="col-md-2" style="padding:0px;">
                    <img src="img/footer/1.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection