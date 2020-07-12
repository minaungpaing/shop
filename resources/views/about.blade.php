@extends('layout.app')

@section('title')
    PARADISE/ABOUT
@endsection()
    
@section('content')
	<section>
		<div class="background-div">
			<div style="position: relative;">
				@include('layout.nav')
                <br>
				<h5 align="center"><font color="#fff" style="font-family: 'Oswald';"> ABOUT</font></h5>
                    <div class="tabs">
                        <a href="{{URL::to('/index') }}">HOME</a> &nbsp;&nbsp;&nbsp; >> &nbsp;&nbsp;&nbsp;<a href="{{URL::to('/about') }}">ABOUT</a>
                    </div>
                    <div style="height:20px;"></div>
			</div>
		</div>
	</section>
	<section>
		<div class="py-5">
			<div class="container py-lg-5">
				<div class="welcome-grid row">
					<div style="height:100px;"></div>
					<div class="col-lg-1"></div>
					<div class="col-lg-5 mb-lg-0 mb-5">
						<h3 class="about-title">ABOUT OUR PARA<font color="#ff7315">D</font>ISE</h3>
						<p class="my-4">
							We launched in 2006 and have been your fashion bestie ever since.

							Style never sleeps and neither do we – we're 24/7, dropping over 500 new products a week, so you always have the latest looks for less. We make fashion accessible and fun, so every girl can get the wardrobe of her dreams.
						</p>
						<p class="mb-4">
							One thing we love more than your amazing style is your individuality – we want to help you show it off, do your thing and look incredible at the same time.	
						</p>
						<div>
							<a href="#" class="read-more btn">Shop Now</a>
						</div>
					</div>
					<div class="col-lg-5 welcome-image">
						<img src="../img/welcome.jpg" width="100%" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="sec-section py-5">
			<div class="container py-lg-5">
				<div class="row text-left" style="align-items: center;">
					<div class="col-lg-1"></div>
					<div class="col-lg-5">
						<img src="../img/offer.jpg" class="img-fluid">
					</div>
					<div class="col-lg-5 pl-lg-4" style="margin-top: 50px;">
						<h4 class="about-title">WHAT WE <font color="#ff7315">OFFER</font></h4>
						<p class="offer-txt">Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elit. Fuga, suscipit totam animi consequatur saepe blanditiis.</p>

						<div class="row" style="margin-top: 3rem;">
							<div class="col-md-6">
								<h5>
									<a href="#" class="offer-subtitle">01. Visit Store</a>
									<p class="offer-txt">Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur.</p>
								</h5>
							</div>
							<div class="col-md-6">
								<h5>
									<a href="#" class="offer-subtitle">02. Add To Cart</a>
									<p class="offer-txt">Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur.</p>
								</h5>
							</div>
							<div class="col-md-6">
								<h5>
									<a href="#" class="offer-subtitle">03. Gift Cards</a>
									<p class="offer-txt">Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur.</p>
								</h5>
							</div>
							<div class="col-md-6">
								<h5>
									<a href="#" class="offer-subtitle">04. Unique Shop</a>
									<p class="offer-txt">Lorem illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam animi consequatur.</p>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="services-frame">
			<div class="py-5" style="background: rgba(0, 0, 0, 0.6);">
				<div class="container py-lg-5">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fab fa-codepen service-icon"></i>
										<h3 class="service-h3">Let your footwear do the talking</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fa fa-mobile service-icon"></i>
										<h3 class="service-h3">Trendy celebrity collecions</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fa fa-hourglass service-icon"></i>
										<h3 class="service-h3">Animation</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fab fa-modx service-icon"></i>
										<h3 class="service-h3">Vast collection of Sports shoes</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fas fa-chart-bar service-icon"></i>
										<h3 class="service-h3">Uniquely designed collection</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 46px;">
									<a href="#" style="text-decoration: none;">
										<i class="fa fa-shopping-bag service-icon"></i>
										<h3 class="service-h3">High Qulity Footwear</h3>
										<div class="clearfix"></div>
									</a>
									<p class="service-p">Lorem sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in culpa quis. Phasellus lacinia.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<section>
		<div class="section4 py-5 sec-section">
			<div class="container py-lg-5">
				<h6 style="text-align: center;color:#ff7315; ">WE ARE THE BEST</h6>
				<h3 class="title-hny text-center" style="color: black;">WHAT WE <font color="#ff7315">OFFERING</font></h3>
				<div class="row text-center mt-5">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="sec4-grid">
									<i class="fas fa-bullhorn sec4-icon"></i>
									<h6><a href="#" class="offer-subtitle" style="font-size: 18px;">Call Us Anytime</a></h6>
									<p class="offer-txt">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="sec4-grid">
									<i class="fas fa-truck sec4-icon"></i>
									<h6><a href="#" class="offer-subtitle" style="font-size: 18px;">Free Shipping</a></h6>
									<p class="offer-txt">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="sec4-grid">
									<i class="fas fa-recycle sec4-icon"></i>
									<h6><a href="#" class="offer-subtitle" style="font-size: 18px;">Free Returns</a></h6>
									<p class="offer-txt">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="sec4-grid">
									<i class="fas fa-money-bill-alt sec4-icon"></i>
									<h6><a href="#" class="offer-subtitle" style="font-size: 18px;">Secure Payments</a></h6>
									<p class="offer-txt">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('layout.footer')
@endsection()