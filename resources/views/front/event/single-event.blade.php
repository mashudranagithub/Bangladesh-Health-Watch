@extends('front.layouts.master')

	@section('content')

		<!-- Blogs section start here -->
		<section id="single-Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>{{ $event->event_title }}</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
							<div class="blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url('front/assets/images/event/'.$event->event_image) }}" alt="Event Image">
								</a>
							</div>

							<div class="blog-meta d-flex justify-content-between">
								
                  <div class="event-meta">
                    <p class="mb-2" style="font-size: 18px; font-weight: 700;">Date: {{ $event->event_date }}</p>
                    <p style="font-size: 18px; font-weight: 700;">Time: {{ $event->event_start_time }} - {{ $event->event_end_time }}</p>
                  </div>
                
                  <div class="event-meta">
                    <p class="mb-2" style="font-size: 18px; font-weight: 700;">Place: {{ $event->event_place }}</p>
                    <p style="font-size: 18px; font-weight: 700;">Status: {{ $event->event_status }}</p>
                  </div>


							</div>

							<div class="blog-info">
								
								{!! $event->event_detail !!}
								
							</div>
					</div>


				</div>

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection