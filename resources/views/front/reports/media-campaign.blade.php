@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/media-campaign-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch (BHW) Reports</h2>
			</div>
		</div>
	</div>
</section>


<section id="Report">
	<div class="container">

		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<h3>Media campaign report on covid-19:</h3>
					<p>BHW carried out a study on fear and stigma related to Covid-19. Based on that study BHW launched a well-designed outreach communication campaign to sensitize the wider population against fear and stigma related to Covid-19. The campaign targets potentially stigmatized people, those who make people stigmatized and support groups like, local administration, political agencies; BGMEA, BKMEA. This initiative was a series of online based campaign programmes that included video spots and other static materials. </p>
					<p>The campaign materials are in below</p>
				</div>
				<hr>
			</div>
		</div>


		@foreach($reports as $report)
		<!-- Single report start here -->
		<div class="row">
			<div class="col-md-9">
				<div class="bhw-single-report">
					<a href="{{ url('front/assets/files/report/'.$report->report_file) }}" target="_blank">{{ $report->report_title }}</a>
				</div>
			</div>
			<div class="col-md-3">
				<a href="{{ url('front/assets/files/report/'.$report->report_file) }}" class="btn btn-download report" download>Download</a>
			</div>
		</div>
		<!-- single report end here -->
		@endforeach

		{{ $reports->links() }}
		

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