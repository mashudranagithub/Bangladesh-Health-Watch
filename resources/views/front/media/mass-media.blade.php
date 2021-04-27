@extends('front.layouts.master')

	@section('content')

	<section id="Tv-talk-show">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Mass Media</h2>
				</div>
				<div class="col-md-12">
					<p>To raise awareness of a range of stakeholders and to trigger interest for bringing about much needed changes BHW continues its media activities through mass media and social media which include television talk shows, press events and media reflection of BHW activities.</p>
					<hr>
				</div>
				<div class="col-md-12">
					<h3>TV talk show</h3>
					<p>Making space for all the stakeholders to interface with each other through various means including TV talk show, BHW organized TV Talk show on Covid-19 pandemic in a private TV channel “Channel 24” as part of its evidence-based advocacy strategies. A total of four episodes were aired between late August and early September 2020.</p>
					<hr>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-3">
					<div class="single-video-info">
						<a href="https://www.youtube.com/watch?v=CmYX3uxTclk" class="video-link">
							<img src="http://i3.ytimg.com/vi/CmYX3uxTclk/hqdefault.jpg" alt="Video Thumbnail Image">
						</a>
						<p>জনস্বাস্থ্য ব্যবস্থা ও ব্যবস্থাপনা</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-video-info">
						<a href="https://www.youtube.com/watch?v=AYulDoeLlZ4" class="video-link">
							<img src="http://i3.ytimg.com/vi/AYulDoeLlZ4/hqdefault.jpg" alt="Video Thumbnail Image">
						</a>
						<p>করোনা টেস্ট</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-video-info">
						<a href="https://www.youtube.com/watch?time_continue=117&v=rksOlHTFfnY" class="video-link">
							<img src="http://i3.ytimg.com/vi/rksOlHTFfnY/hqdefault.jpg" alt="Video Thumbnail Image">
						</a>
						<p>করোনার ভ্যাকসিন : উৎস ও প্রস্তুতি</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-video-info">
						<a href="https://www.youtube.com/watch?v=AOJSiOxjhoE" class="video-link">
							<img src="http://i3.ytimg.com/vi/AOJSiOxjhoE/hqdefault.jpg" alt="Video Thumbnail Image">
						</a>
						<p>করোনা মোকাবেলায় সামাজিক অংশগ্রহণ</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="Press-release">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Press Releases</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="press">
						@foreach($press_releases as $press)
						<li>
							<a href="{{ asset('front/assets/files/media/press-releases/'.$press->press_file) }}" target="_blank">
								{{ $press->title }}
							</a>
						</li>
						@endforeach
					</ul>
					<hr>
					{{ $press_releases->links() }}
				</div>
			</div>
		</div>
	</section>


	@endsection