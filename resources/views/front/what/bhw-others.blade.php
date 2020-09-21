@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ asset('front/assets/images/page-banners/covid-page-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>BHW's role in COVID Crisis</h2>
			</div>
		</div>
	</div>
</section>


<section id="Vision-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>During the covid crisis, BHW also conducted research to address the gaps in knowledge regarding COVID-19.</p>
					<p><b>Between March-August 2020, BHW commissioned the following research :</b></p>
					
					<ul>
						<li>Front Line Health Workers (FLWs) perceptions and opinions on their personal safety while attending suspected or confirmed COVID-19 patients in Bangladesh</li>
						<li>Fear And Stigma in the context of corona epidemic in Bangladesh: A Rapid Assessment,</li>
						<li>Different aspects of health financing of COVID 19 Response.</li>
						<li>Opportunities and challenges of strengthening the COVID- 19 case management system in Bangladesh</li>
						<li>A Quick Assessment of treatment and medicines used in COVID-19 positive persons at home</li>
						<li>Find out the process and quality of sample collection and T-PCR testing for 
					SARS-CoV-2</li>
					</ul>

					<p>All research dissemination reports are available in the <a href="{{ route('reports-all') }}">publication</a> section.</p>

					<p>Given the exigency of the Covid-19 pandemic, a series of events were organized through <a href="{{ route('events') }}">Webinar</a>. </p>
					<a href="{{ route('events') }}">Click to see all events</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection