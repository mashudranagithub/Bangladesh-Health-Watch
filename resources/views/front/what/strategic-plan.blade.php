@extends('front.layouts.master')

	@section('content')


<section id="Page-banner">
	<img src="{{ asset('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Strategic Plan</h2>
			</div>
		</div>
	</div>
</section>


<section id="Vision-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>In 2019, BHW decided to develop a strategy to revisit its objectives and define its vision, mission  objectives and strategies for achieving those in the context of the current health scenario. The strategy was developed through participation of key members of the working group and external third party participants and resulted in a document which was presented and endorsed by the Working Group of BHW. Subsequently, the strategy formed the main basis of designing a project 'Making Bangladesh’s Healthcare Systems More Responsive and Participatory', which was funded by Sida.</p>
					<p>BHW has strategic plan where the major activities are focused on</p> 
					<ul>
						<li>To create a platform for voicing concerns</li>
						<li>To create/facilitate creation of evidence</li>
						<li>Dissemination of new knowledge/information</li>
						<li>Engagement with stakeholders for policy change</li>
						<li>Optimal use of technology to disseminate information and generate debate</li>
					</ul>
					<p class="mt-4"><a target="_blank" href="{{ url('front/assets/files/Strategy-Plan_BHW.pdf') }}">Click to see the whole strategic plan</a></p>
				</div>
			</div>
		</div>

	</div>
</section>

@endsection