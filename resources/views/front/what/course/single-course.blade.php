@extends('front.layouts.master')

	@section('content')

		<!-- Blogs section start here -->
		<section id="single-Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>{{ $course->course_title }}</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
							<div class="blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url('front/assets/images/course/'.$course->course_image) }}" alt="Blog Image">
								</a>
							</div>

							<div class="blog-info">
	
								{!! $course->course_detail !!}
								
							</div>
					</div>


				</div>

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection