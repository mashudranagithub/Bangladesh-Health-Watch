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
					<p>Given the exigency of the Covid-19 pandemic, BHW organized a series of events through <a href="{{ route('events') }}">Webinar</a>.</p>

					<p>During the covid crisis, BHW also conducted research to address the gaps in knowledge regarding COVID-19.</p>

					<p><b>Between March-August 2020, BHW commissioned the following research</b> (Click on the title to show the pdf report)</p>

					<p></p>
					
					<ul class="mb-4">
						<li><a href="{{ url('front/assets/files/research/Frontline workers_April 19_final brief 2020-min.pdf') }}" target="_blank">Front Line Health Workers (FLWs) perceptions and opinions on their personal safety while attending suspected or confirmed COVID-19 patients in Bangladesh</a></li>
						<li><a href="{{ url('front/assets/files/research/FearStigma-Corona-HW-Final Report-5May 2020.pdf') }}" target="_blank">Fear And Stigma in the context of corona epidemic in Bangladesh: A Rapid Assessment,</a></li>
						<li><a href="{{ url('front/assets/files/research/Financial Analysis Report 4_17.5.2020_Clean_Final.pdf') }}" target="_blank">Different aspects of health financing of COVID 19 Response.</a></li>
						<li><a href="#" target="_blank">Opportunities and challenges of strengthening the COVID- 19 case management system in Bangladesh</a></li>
						<li><a href="#" target="_blank">A Quick Assessment of treatment and medicines used in COVID-19 positive persons at home</a></li>
						<li><a href="#" target="_blank">Find out the process and quality of sample collection and T-PCR testing for SARS-CoV-2</a></li>
						<li><a href="{{ url('front/assets/files/research/Re-visiting-the-FLWs-Study_updated-version-Syed-Masud-Ahmed-et-al.-2-June-2020.pdf') }}" target="_blank">Re-visiting the Front Line health Workers’ (FLWs)  attending suspected or confirmed COVID-19 patients in Bangladesh: how far the situation improved in a month since the last survey?</a></li>
					</ul>

					<a href="{{ route('events') }}">Click to see all events</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection