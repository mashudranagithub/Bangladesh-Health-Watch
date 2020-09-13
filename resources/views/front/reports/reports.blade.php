@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/reports-banner.jpg') }}" alt="Page Banner Image">
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
					<h3>a. BHW reports:</h3>
					<p>Bangladesh Health Watch published seven reports and the first report published on December 2006. The reports have been published on the issues: Sate of Health in Bangladesh (2006), Health Workforce (2007), Health Sector Governance (2009), Universal health Coverage (2011), Urban health Scenario on Bangladesh (2014), Non-Communicable Diseases (2016), Humanitarian Crisis in Rohingya Camps: A Health Perspective (2018-2019).</p>
					<p>All the reports are available in <a href="{{ route('bhw-reports') }}">here.</a></p>
				</div>
				<hr>

				<div class="bhw-text">
					<h3>b. BHW bulletins:</h3>
					<p>The bulletins were published with a purpose to emphasis the importance of the concepts and to learn the good practices in implementing Universal Health Coverage. During the period of 2013 to 2016, BHW published six bulletins on Universal Health Coverage on What? Why? How?(Dec.2013), Call to Action: taking the Universal Health Coverage agenda forward(Apr. 2014), Bangladesh’s path to UHC: the Health Care Financing Strategy – 2012-2032(Sep.2014), Creating momentum for Universal Health Coverage (UHC) in Bangladesh: challenges and opportunities(Dec.2016).</p>
					<p>All the bulletins are available <a href="{{ route('bhw-bulletin') }}">here</a></p>
				</div>
				<hr>

				<div class="bhw-text">
					<h3>c. Policy brief:</h3>
					<p>BHW will publish policy brief now on words semi-annually. The first policy brief has been published in May 2020 on Fear and Stigma in the Context of Corona Epidemic in Bangladesh.  The policy brief has widely distributed as a knowledge sharing tool to relevant Ministries and various directorates/departments including public representatives both at national and regional levels, academia, civil society, NGOs and other allied organizations. </p>
					<p>Policy brief is available .<a href="{{ route('policy-brief') }}">here</a></p>
				</div>
				<hr>

				<div class="bhw-text">
					<h3>d. Media Monitoring report:</h3>
					<p>BHW is scanning health news published in six mainstream leading daily newspapers (3 Bangla, 3 English) since March 2020 through a media firm/house to generate evidence for its advocacy initiatives. The media house has been developing monthly analyzed report based on the media scanning. </p>
					<p>Monthly scanning report is available <a href="{{ route('media-monitoring') }}">here</a></p>
					<p>Besides regular media scanning reports, a media synthesis reports on covid19 on different aspects of health issues periodically published based on the news in the leading national Bangla and English newspapers in Bangladesh which are also available <a href="{{ route('media-synthesis') }}">here</a></p>
				</div>
				<hr>

				<div class="bhw-text">
					<h3>e. Media campaign report on covid-19:</h3>
					<p>BHW carried out a study on fear and stigma related to Covid-19. Based on that study BHW launched a well-designed outreach communication campaign to sensitize the wider population against fear and stigma related to Covid-19. The campaign targets potentially stigmatized people, those who make people stigmatized and support groups like, local administration, political agencies; BGMEA, BKMEA. This initiative was a series of online based campaign programmes that included video spots and other static materials. </p>
					<p>The campaign materials are <a href="{{ route('media-campaign') }}">here</a></p>
				</div>
				<hr>
			</div>
		</div>
		

	</div>
</section>


<section id="Bulletin">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>Bangladesh Health Watch (BHW) Bulletin</h3>
			</div>
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