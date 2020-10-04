@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/BHW-Bulletin.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch Bulletin</h2>
				<p>The bulletins were published with a purpose to emphasis the importance of the concepts and to learn the good practices in implementing Universal Health Coverage. During the period of 2013 to 2016, BHW published six bulletins on Universal Health Coverage on What? Why? How?(Dec.2013), Call to Action: taking the Universal Health Coverage agenda forward(Apr. 2014), Bangladesh’s path to UHC: the Health Care Financing Strategy – 2012-2032(Sep.2014), Creating momentum for Universal Health Coverage (UHC) in Bangladesh: challenges and opportunities(Dec.2016). All the bulletins are available here</p>
				<hr>
			</div>
		</div>
	</div>
</section>


<section id="Bulletin">
	<div class="container">
		<div class="row">
			@foreach($bulletins as $bulletin)
			<div class="col-md-3">
				<div class="single-bulletin">
					<div class="bulletin-image">
						<a target="_blank" href="{{ url('front/assets/files/bulletin/'.$bulletin->bulletin_file) }}">
							<img src="{{ url ('front/assets/images/bulletin/'.$bulletin->bulletin_image) }}" alt="BHW Bulletin Image">
						</a>
						<div class="name-year">
							<h4><a target="_blank" href="{{ url('front/assets/files/bulletin/'.$bulletin->bulletin_file) }}">{{ $bulletin->bulletin_title }}</a></h4>
							<p>{{ $bulletin->bulletin_month_year }}</p>
						</div>
					</div>
					<a href="{{ url('front/assets/files/bulletin/'.$bulletin->bulletin_file) }}" class="btn btn-download" download>Download</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


@endsection