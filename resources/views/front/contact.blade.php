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
<div id="mapid" style="width: 100%; height: 400px;"></div>
<script>
	var bhwMap = L.map('mapid').setView([23.776315, 90.399880], 16);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(bhwMap);
	L.marker([23.776315, 90.399880]).addTo(bhwMap).bindPopup("<b>Bangladesh Health Watch</b>").openPopup();
	L.circle([23.776315, 90.399880], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 5
	}).addTo(bhwMap);
	var popup = L.popup();
</script>
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