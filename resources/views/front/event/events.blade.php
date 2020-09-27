@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/events-banner.jpg') }}" alt="Page Banner Image">
</section>


		<!-- Events section start here -->
		<section id="Events" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>Bangladesh Health Watch - <span>Events</span></h2>
						</div>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-md-12">
						<div class="bhw-text">
							<p>Different events have been organised by BHW as its part of policy advocacy initiatives.  Since early March 2020, BHW has been organizing events on research disseminations, regional meetings etc. Given the exigency of the Covid-19 pandemic, a series of events were organized through Webinar. Among them, the webinar on Success with COVID–19: learning from Kerala (India), Thailand and Vietnam, webinar meeting on Coordination with NGOs in Bangladesh, webinar on COVID-19 in Bangladesh: Transmission Dynamics, Health System Preparedness and Financing, webinar on Bangladesh's health system and its commitment to achieving universal health coverage. All events’ reports are available in this section.</p>
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
				<div class="row">
					<div class="col-md-12">
						{{ $events->links() }}
					</div>
				</div>
			</div>
		</section>
		<!-- Events section end here -->

@endsection