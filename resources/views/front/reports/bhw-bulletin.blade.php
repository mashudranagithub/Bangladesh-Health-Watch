@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/BHW-Bulletin.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch (BHW) Bulletin</h2>
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