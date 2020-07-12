@extends('layout.app')


@section('title')
    PARADISE/CONTACT
@endsection()

@section('content')
	<section>
		<div class="background-div">
			<div style="position: relative;">
				@include('layout.nav')
                <br>
				<h5 align="center"><font color="#fff" style="font-family: 'Oswald';"> CONTACT</font></h5>
                    <div class="tabs">
                        <a href="{{URL::to('/index') }}">HOME</a> &nbsp;&nbsp;&nbsp; >> &nbsp;&nbsp;&nbsp;<a href="{{URL::to('/contact') }}">CONTACT</a>
                    </div>
                    <div style="height:20px;"></div>
			</div>
		</div>
	</section>
	<section>
		<div class="py-5">
			<div class="container py-lg-5">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-5">
						<div>
							<h4 class="title-hny mb-0" style="color: black;">GET IN <font color="#ff7315">TOUCH</font></h4>
							<p class="mb-5 offer-txt">We're ready to make your happiness with beauty.Contact us.</p>
							<p class="mt-4">
								<font color="#ff7315">Call Us :</font>
								<a href="#" class="contact-txt ml-2" style="color: black;">+(96) 692831204</a>
							</p>
							<p>
								<font color="#ff7315">Email :</font>
								<a href="#" class="contact-txt ml-2" style="color: black;">fired6559@gmail.com</a>
							</p>
							<p class="offer-txt">
								No.2/1 U Lwn Maung st.,7mile, Mayangone, Yangon.642 Nga Moe Yeik(3)street, Thingangyun, Yangon, Myanmar.
							</p>
						</div>
						<div class="mt-4">
							<h4 class="title-hny mb-4" style="color: black;">WORKING <font color="#ff7315">HOURS</font></h4>
							<h6 class="hours-title">Bussiness Services:</h6>
							<p class="offer-txt mb-0">Monday to Friday 8.00 am - 6.00 pm</p>
							<p class="offer-txt mt-0">Saturday and Sunday - Closed</p>
							<h6 class="hours-title mt-3">Customer support:</h6>
							<p class="offer-txt mb-0">Monday to Friday 8.00 am - 6.00 pm</p>
							<p class="offer-txt mb-0 mt-0">Saturday 10.00 am - 4.00 pm</p>
							<p class="offer-txt mt-0">Sunday - Closed</p>
						</div>
					</div>
					<div class="col-lg-5">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-bg-img1">
			<div style="background: rgba(0, 0, 0, 0.6);" class="py-5">
				<div class="container py-lg-5">
					<div>
						<h4 class="title-hny text-center" style="color: #fff;">FILL OUT THE FORM.</h4>
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<form action="#" method="post" class="mt-5">
									<div class="row form-group">
										<div class="col-md-4">
											<input type="text" name="name" placeholder="Name" class="form-control form-input-contact" required="">
										</div>
										<div class="col-md-4">
											<input type="email" name="email" placeholder="Email" class="form-control form-input-contact" required="">
										</div>
										<div class="col-md-4">
											<input type="text" name="subject" placeholder="Subject" class="form-control form-input-contact" required="">
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-12">
											<textarea class="form-control form-input-contact" placeholder="Message" name="message" required=""></textarea>
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-12">
											<button type="submit" class="btn btn-send-contact">Send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		function initMap() {
			var location = {lat: 16.871976, lng: 96.152109};
			var map = new google.maps.Map(document.getElementById("map"), {
				zoom: 4,
				center: location
			});

			var marker = new google.maps.Marker({
				position: location,
				map: map
			})
		}
		
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnwEXn_AfcKkTGx4844dzaMj81Pyh8xrg&callback=initMap" type="text/javascript"></script>
  	<script src="http://somemapprodcutaddress.js" key="AIzaSyCnwEXn_AfcKkTGx4844dzaMj81Pyh8xrg"> </script> 
	@include('layout.footer')
@endsection()