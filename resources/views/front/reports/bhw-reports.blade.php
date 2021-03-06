@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/bhw-report-page-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch Reports</h2>
			</div>
		</div>
	</div>
</section>


<section id="Report">
	<div class="container">

		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<h3>BHW reports</h3>
					<p>Bangladesh Health Watch published seven reports and the first report published on December 2006. The reports have been published on the issues: Sate of Health in Bangladesh (2006), Health Workforce (2007), Health Sector Governance (2009), Universal health Coverage (2011), Urban health Scenario on Bangladesh (2014), Non-Communicable Diseases (2016), Humanitarian Crisis in Rohingya Camps: A Health Perspective (2018-2019).</p>
					<p>All the reports are available below.</p>
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

@endsection