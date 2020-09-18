@extends('front.layouts.master')

	@section('content')
		<!-- Slider section start here -->
		<section id="Slider">
			<div id="main-slider" class="carousel slide" data-ride="carousel">
			    <div class="carousel-inner">

			        <div class="carousel-item active">
			            <img src="{{ url ('front/assets/images/sliders/'.$first_slide[0]->slide_image) }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>{{ $first_slide[0]->slide_big_title }}</h2>
			                <p>{{ $first_slide[0]->slide_small_title }}</p>
			            </div>
			        </div>

					@foreach($slides as $slide)
			        <div class="carousel-item">
			            <img src="{{ url ('front/assets/images/sliders/'.$slide->slide_image) }}" class="d-block w-100" alt="Slider Image">
			            <div class="carousel-caption d-none d-md-block">
			                <h2>{{ $slide->slide_big_title }}</h2>
			                <p>{{ $slide->slide_small_title }}</p>
			            </div>
			        </div>
					@endforeach

			    </div>
			    <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			</div>
		</section>
		<!-- Slider section end here -->


		<!-- Intro section start here -->
		<section id="Intro" class="d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>Bangladesh health watch</h2>
						</div>
					</div>
					<div class="col-md-12 text-center">
						<div class="intro-text">
							<p>In the health sector, a strong civil society voice has the potential to influence and positively impact on social exclusion and health inequity through stronger participation, active monitoring and increased accountability and transparency. It can also play a role in refocusing healthcare systems according to health rights and social welfare goals to impact quality of life of the citizens and also provide citizens the power, especially the marginalized and poor, to influence policy decisions.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Intro section end here -->


		<!-- Work section start here -->
<!-- 		<section id="Work" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>Our Work</h2>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-carousel work-slider">

				@foreach($projects as $project)
					<div class="single-work full-box">
						<div class="single-work-image">
							<a href="javascript:void(0);">
								<img src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Work Image">
							</a>
						</div>
						<div class="single-work-info info-box">
							<h3><a href="javascript:void(0);">{{ Illuminate\Support\Str::limit($project->project_title, 23) }}</a></h3>
							<p>
								{!! Illuminate\Support\Str::limit($project->project_detail, 150) !!}
							</p>
							<p class="info-update-date">{{ $project->created_at->format('d M, Y') }}</p>
						</div>
					</div>
				@endforeach

			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('projects') }}" class="view-all">All works</a>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Work section end here -->


		<!-- Link-banner start here -->
		<section id="Link-banner">
			<div class="link-banner-image">
				<img src="{{ url ('front/assets/images/banner/link-banner.jpg') }}" alt="Banner Image">
			</div>
			<div class="banner-links">
				<div class="container">
					<div class="row justify-content-end align-items-center">
						<div class="col-md-5">
							<div class="section-heading">
								<h2>Bangladesh Health Watch (BHW)</h2>
								<a href="{{ route('bhw-bulletin') }}" class="btn btn-bhw btn-link">Bulletin</a>
								<a href="{{ route('reports-all') }}" class="btn btn-bhw btn-link">Report</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Link-banner end here -->


		<!-- Events section start here -->
		<section id="Events" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>BHW Events</h2>
						</div>
					</div>
				</div>
				<div class="row">


					@foreach($events as $event)
					<div class="col-md-4">
						<div class="single-event full-box">
							<div class="single-event-image image-box">
								<a href="{{ route('single-event', $event->id) }}">
									<img src="{{ url ('front/assets/images/event/'.$event->event_image) }}" alt="Event Image">
								</a>
								@if($event->event_status !== 'previous')
								<span class="status">{{ $event->event_status }}</span>
								@endif
							</div>
							<div class="single-event-info info-box">
								<p class="event-date">{{ $event->event_date }}</p>
								<h3><a href="{{ route('single-event', $event->id) }}">{{ Illuminate\Support\Str::limit($event->event_title, 28) }}</a></h3>
								<p class="time-venue">
									<!-- Ei gulor pseudo element a icon hobe -->
									<span class="event-time float-left">{{ $event->event_start_time }} - {{ $event->event_end_time }}</span>
									<span class="event-venue float-right">{{ Illuminate\Support\Str::limit($event->event_place, 20) }}</span>
								</p>
								<p class="event-info">{!! Illuminate\Support\Str::limit($event->event_detail, 150) !!}</p>
								<a href="{{ route('single-event', $event->id) }}" class="know-more">Know more about event</a>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('events') }}" class="view-all">All Events</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Events section end here -->


		<!-- Blogs section start here -->
		<section id="Blogs" class="white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>New Blogs</h2>
						</div>
					</div>
				</div>
				<div class="row">


					@foreach($blogs as $blog)
					<div class="col-md-4">
						<div class="single-blog">
							<div class="single-blog-image">
								<a href="{{ route('single-blog', $blog->id) }}">
									<img src="{{ url('front/assets/images/blog/'.$blog->blog_image) }}" alt="Blog Image">
								</a>
								<div class="date">
									<span class="publish-date">{{ $blog->created_at->format('d') }}</span>
									<br>
									<span class="publish-month">{{ $blog->created_at->format('M') }}</span>
								</div>
							</div>
							<div class="single-blog-info">
								<h3><a href="{{ route('single-blog', $blog->id) }}">{{ Illuminate\Support\Str::limit($blog->blog_title, 35) }}</a></h3>
								<p class="blog-meta">
									<span class="author flot-left">By: <a href="javascript:void(0);">{{ $blog->blog_admin }}</a></span>
									<!-- <span class="total-comments float-right">3</span> -->
								</p>
								
								{!! Illuminate\Support\Str::limit($blog->blog_detail, 150) !!}
								
								<br><a href="{{ route('single-blog', $blog->id) }}" class="know-more">Know more</a>
							</div>
						</div>
					</div>
					@endforeach

				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="{{ route('blogs') }}" class="view-all">View All</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Blogs section end here -->

	@endsection