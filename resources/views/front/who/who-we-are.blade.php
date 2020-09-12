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


<section id="Promo-banner" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="bhw-paragraph">
					<p>Bangladesh Health Watch has started its three years journey from December 2019 to December 2022 title “Making Bangladesh’s Healthcare Systems More Responsive and Participatory” to execute a comprehensive plan for meeting its agenda of working as a citizens’ watchdog bringing lasting positive changes to the health scenario in Bangladesh by critically analyzing policies and programs and influencing policy changes. The overall objectives of the project is to utilize the opportunity to transform an active, evidence based, impactful watch-dog for the health sector, bringing citizen’s participation and voice to the health policy arena, and enhancing transparency and accountability. The theory of change is set for the project is to </p>
					<p>“A more responsive healthcare system that delivers better quality, more transparent and equitable healthcare for all being informed by people’s participation and voice”.</p>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection