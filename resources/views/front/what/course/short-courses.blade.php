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


<section class="info-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-text">
					<p><i>will be developed under this project.</i></p>
					
					<p>The courses, each of 5 days will be targeted at programme planners and managers of government, NGO and private sectors and increase their understanding of and commitment to these areas. </p>
					<p>The courses will provide participants with the knowledge and skills to enable them to incorporate the elements of these two areas in their programmes. The courses will be developed by external consultants working closely with a local one, and delivered through a team of trained resource persons. The resource persons will be drawn from experts in these areas from both GoB as well as NGOs and universities and other agencies. </p>

				</div>
			</div>
		</div>
	</div>
</section>

@endsection