@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Blog-banner.jpg') }}" alt="Page Banner Image">
</section>


		<!-- Events section start here -->
		<section id="Events" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>Bangladesh Health Watch (BHW) - <span>Events</span></h2>
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
					
					{{ $events->links() }}
					
				</div>
			</div>
		</section>
		<!-- Events section end here -->

@endsection