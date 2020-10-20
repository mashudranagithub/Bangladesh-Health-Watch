@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/photo-gallery-banner.jpg') }}" alt="Page Banner Image">
</section>




<!-- Contact section start here -->
<section id="Contact-address">
	<!-- Page Heading Start Here -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Bangladesh Health Watch (BHW) - <span>Contact</span></h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Heading End Here -->
	<div class="address">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="address-content">
						<h4>Address</h4>
					</div>
				</div>
				<div class="col-md-4">
					<div class="address-content">
						<h4>Phone</h4>
					</div>
				</div>
				<div class="col-md-4">
					<div class="address-content">
						<h4>Email</h4>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4">
					<div class="address-content">
						<div class="content d-flex align-items-center">
							<div class="address-icon">
								<i class="fa fa-home"></i>
							</div>
							<div class="address-details">
								<p>Bangladesh Health Watch Secretariat, James P Grant School of Public Health, BRAC University,	68, Shaheed Tajuddin Ahmen Sharani, 5th Floor (Level 6), icddr,b Building, Mohakhali, Dhaka 1212, Bangladesh</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="address-content">
						<div class="content d-flex align-items-center">
							<div class="address-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="address-details">
								<p>+8800000000000</p>
								<p>+8800000000000</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="address-content">
						<div class="content d-flex align-items-center">
							<div class="address-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="address-details">
								<p>bhw@bracu.ac.bd</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?ll=23.7762341,90.3998372&q=ICDDRB Dhaka Hospital&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Do you want to know if you are <a rel="nofollow" href="https://techwithlove.com/how-to-know-if-someone-blocked-you-on-whatsapp/">blocked on WhatsApp?</a></div><style>.mapouter{position:relative;text-align:right;height:420px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div>
				</div>
			</div>
		</div>
	</div>
	<div class="message">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center">
						<h4>Send Us A Message</h4>
						<form action="{{ route('emailsend') }}" method="post">
                          @csrf
							<div class="form-group">
								<input name="name" type="text" class="form-control" placeholder="Your Name" required>
							</div>
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="email@example.com" required>
							</div>
							<div class="form-group">
								<input name="subject" type="text" class="form-control" placeholder="Subject">
							</div>

							<div class="form-group">
								<textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message ..." required></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Send Message</button>
						</form>
					</div>
				</div>
			</div>
	</div>
</section>
<!-- Contact section end here -->


@endsection