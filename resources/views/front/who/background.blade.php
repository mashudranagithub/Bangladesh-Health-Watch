@extends('front.layouts.master')

@section('content')
<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Background.jpg') }}" alt="Page Banner Image">
</section>


<section id="Background">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Background</h3>
				<p>Bangladesh Health Watch (BHW), a multi-stakeholder civil society advocacy and monitoring network dedicated to improve the health system in Bangladesh through critical review of policies and programmes and recommendation of appropriate actions for change.</p>
				<p>It was initiated in 2006 aiming to improve health of the people by way of monitoring progress in the health of the population and health systems, and playing a catalytic role in making lasting changes in the health sector. A Working Group consisting of researchers and activists from different organizations carry out the different activities for the Watch.</p>
			</div>
			<div class="col-md-6">
				<div class="video-link">
					<a href="javascript:void(0);">
						<img src="{{ url ('front/assets/images/who-we-are/video-thumb.jpg') }}" alt="Video Thumbnail Image">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="Vision-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Vision</h3>
				<p>A country where all citizens are able to achieve optimum health through policies and programmes based on evidence and citizens’ voice.</p>
			</div>
			<div class="col-md-6">
				<h3>Mission</h3>
				<p>To provide a strong platform through which health care professionals and programmers, researchers and citizens can get their voices heard and thereby influence policies and programmes impacting citizens’ health.</p>
			</div>
		</div>
	</div>
</section>


@include('front.partials.page-links')

@endsection