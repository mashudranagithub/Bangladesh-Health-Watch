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
				<p class="mb-3">In the health sector, a strong civil society voice has the potential to influence and positively impact on social exclusion and health inequity through stronger participation, active monitoring and increased accountability and transparency. It can also play a role in refocusing healthcare systems according to health rights and social welfare goals to impact quality of life of the citizens and also provide citizens the power, especially the marginalized and poor, to influence policy decisions.</p>
				<p>In the vacuum created by the absence of a strong, thriving civil society movement in the early 2000, Bangladesh Health Watch (BHW) was established in 2006 as a multi-stakeholder civil society body dedicated to improve the health system in Bangladesh through evidence-based critical review of policies and programmes, and recommend appropriate actions for change.</p>
			</div>
			<div class="col-md-6">
				<div class="video-link">
					<a href="javascript:void(0);">
						<img src="{{ url ('front/assets/images/who-we-are/BHW-Report-Launch.jpg') }}" alt="Background Image">
					</a>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<p>BHW began with the publication of a series of reports, the Bangladesh Health Watch Reports, which identified the most critical challenges to the health sector at particular points of time and published insightful situation analyses leading to practical recommendations, based on evidence from existing secondary resources and primary research. BHW is also engaged to gather evidence through regular research for evidence based advocacy on topical issues to improve the situation related to quality of care, accountability and equity. BHW is poised to  form Regional Chapter at district level which will act as  citizens’ platform to hold government (and other actors) accountable for their major health sector commitments  their catchment areas.</p>
			</div>
		</div>
	</div>
</section>


<section id="Vision-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-2">
				<h3>objectives</h3>
				<hr>
			</div>
			<div class="col-md-6">
				<h3>Vision</h3>
				<p>A country where all citizens are able to achieve optimum health through policies and programmes based on evidence and citizens’ voice.</p>
			</div>
			<div class="col-md-6">
				<h3>Mission</h3>
				<p>To provide a strong platform through which health care professionals and programmers, researchers and citizens can get their voices heard and thereby influence policies and programmes impacting citizens’ health.</p>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="bhw-text">
					<p><b>BHW has been established to achieve the following five main objectives:</b></p>
					<ul>
						<li>To create a platform for drawing in the voices/opinions of citizens and other stakeholders to voice their concerns on critical public health issues</li>
						<li>To help generate/identify new evidence for changing practices/policies</li>
						<li>To disseminate latest research/best practices evidence</li>
						<li>To actively engage with GoB and other interested parties in formulating and changing policies in light of evidence/citizens’ demand</li>
						<li>To develop technology based mechanisms for collecting feedback for optimal delivery of health care services.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


@include('front.partials.page-links')

@endsection