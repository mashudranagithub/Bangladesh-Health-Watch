@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ asset('front/assets/images/what-we-do/short-course/Short-Course-banner.jpg') }}" alt="Page Banner Image">
</section>



<section id="Courses">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Short courses for duty-bearers</h2>
				</div>
			</div>
		</div>

		<div class="row pb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>Receiving funds from the Swedish International Development Cooperation Agency (Sida) BHW started a three-year project since December 1, 2019 – December 31, 2022 titled `Making Bangladesh’s Healthcare Systems More Responsive and Participatory’. In this current project, short courses for duty-bearers will be conducted as forthcoming activities.</p>
					<hr>
					<p>The courses will be developed under this Healthcare Systems More Responsive and Participatory RHS project.</p>
					<p><b>Courses Name</b></p>
					<ol>
						<li>Transparency for Good Governance</li>
						<li>Voice and Participation</li>
						<li>Equity for Accessing Services</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach($courses as $course) 
			<div class="col-md-4">
				<div class="single-course">
					<div class="single-course-image">
						<a href="{{ route('single-course', $course->id) }}">
							<img src="{{ url('front/assets/images/course/'.$course->course_image) }}" alt="Single Course Image">
						</a>
					</div>
					<p class="course-name"><a href="{{ route('single-course', $course->id) }}">{{ $course->course_title }}</a></p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection