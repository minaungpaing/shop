@extends('layout.app')

@section('title')
    Shopping
@endsection()
@section('content')
    <div class="shop">
        @include('layout.nav')
        <br>
        <h4 align="center"><font color="#fff" style="font-family: 'Oswald';"> SHOPPING</font></h4>
        <div class="tabs">
            <a href="{{URL::to('/index') }}">HOME</a> &nbsp;&nbsp;&nbsp; >> &nbsp;&nbsp;&nbsp;<a href="{{URL::to('/shop') }}">SHOPPING</a>
        </div>
        <div style="height:30px;"></div>
    </div>
    <div style="height:50px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3 category">
                        <br>
                        <h6 style="font-family: 'Oswald';">SEARCH <font color="#ff7513" style="font-family: 'Oswald';">HERE</font> </h6>
                        <div style="height:15px;"></div>

                        <form action="#" method="post">
                            <div class="d-flex justify-content-between ">                                
                                    <input type="text" id="search" placeholder="Search Here..."> 
                                    <button id="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <div style="height:40px;"></div>

                        <h6 style="font-family: 'Oswald';">PRODUCT <font color="#ff7513" style="font-family: 'Oswald';">CATEGORIES</font> </h6>
                        <br>
                        <ul class="c-ul">
                            <a href="#"><li class="d-flex justify-content-between">Men <p>14</p></li></a>
                            <a href="#"><li class="d-flex justify-content-between">Women <p>14</p></li></a>
                            <a href="#"><li class="d-flex justify-content-between">Kid <p>14</p></li></a>
                            <a href="#"><li class="d-flex justify-content-between">Sport <p>14</p></li></a>
                            <a href="#"><li class="d-flex justify-content-between">Accessories <p>14</p></li></a>
                        </ul>
                        <br>
                        <br>
                        <h6 style="font-family: 'Oswald';">BR<font color="#ff7513" style="font-family: 'Oswald';">A</font>NDS</h6>
                        <br>
                        <label class="checkbox">ADDIDAS
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox">NIKE
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox">PUMA
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox">GUCCI
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox">GUCCI
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <br>
                        <h6 style="font-family: 'Oswald';">BEST <font color="#ff7513" style="font-family: 'Oswald';">SELLERS</font></h6>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="img/products/p1.jpg" alt="" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <p style="font-size:12px;">
                                    Blue Sweater<br>
                                    <small><font color="#797979">$ 499.00</font></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="img/products/p5.jpg" alt="" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <p style="font-size:12px;">
                                    Blue Sweater<br>
                                    <small><font color="#797979">$ 499.00</font></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="img/products/p6.jpg" alt="" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <p style="font-size:12px;">
                                    Blue Sweater<br>
                                    <small><font color="#797979">$ 499.00</font></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="img/products/p2.jpg" alt="" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <br>
                                <p style="font-size:12px;">
                                    Blue Sweater<br>
                                    <small><font color="#797979">$ 499.00</font></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 product">                
                        <div class="d-flex justify-content-between">
                        <h6 style="font-family: 'Oswald';">ALL PRODUCTS</h6>
                            <div style="font-size:12px;">                    
                                <form action="#" method="post">
                                    Sort By: &nbsp;  <select name="">
                                    <h4 style="font-family: 'Oswald';">ALL PRODUCTS</h4>
                                        <option value="all">Default</option>
                                        <option value="all">Name (A to Z)</option>
                                        <option value="all">Price (low > High)</option>
                                        <option value="all">Price (High > low)</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/products/p2.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p9.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p11.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/products/p10.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p3.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p13.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/products/p8.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p7.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/products/p12.jpg" alt="" width="100%"><br>
                                <p class="p-text">
                                    White T-shirt<br>
                                    <small><font color="#797979">$ 199</font></small>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>

    <div style="height:50px;"></div>
    @include('layout.footer')
@endsection()