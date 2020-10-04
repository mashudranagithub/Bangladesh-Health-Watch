@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/policy-brief-banner.jpg') }}" alt="Page Banner Image">
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
					<h3>Policy brief</h3>
					<p>BHW will publish policy brief now on words semi-annually. The first policy brief has been published in May 2020 on Fear and Stigma in the Context of Corona Epidemic in Bangladesh. The policy brief has widely distributed as a knowledge sharing tool to relevant Ministries and various directorates/departments including public representatives both at national and regional levels, academia, civil society, NGOs and other allied organizations.</p>
					<p>Policy brief is available below.</p>
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