@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Who-we-are-banner.jpg') }}" alt="Page Banner Image">
</section>

<section id="Who-we-are">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-paragraph">
					<h3>Who We Are</h3>
					<p>Bangladesh Health Watch (BHW), a multi-stakeholder civil society advocacy and monitoring network dedicated to improve the health system in Bangladesh through critical review of policies and programmes and recommendation of appropriate actions for change.</p>

					<p>It was initiated in 2006 aiming to improve health of the people by way of monitoring progress in the health of the population and health systems, and playing a catalytic role in making lasting changes in the health sector. A Working Group consisting of researchers and activists from different organizations carry out the different activities for the Watch.</p>
				</div>
			</div>
		</div>
	</div>
</section>


@include('front.partials.page-links')

@endsection