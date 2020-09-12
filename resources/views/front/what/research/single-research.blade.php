@extends('front.layouts.master')

	@section('content')

		<!-- Blogs section start here -->
		<section id="single-Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>{{ $research->research_title }}</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
							<div class="blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url('front/assets/images/what-we-do/research/'.$research->research_image) }}" alt="Research Image">
								</a>
							</div>

							<div class="blog-meta d-flex justify-content-between">
								
                  <div class="event-meta">
                    <p class="mb-2" style="font-size: 18px; font-weight: 700;">Date: <span style="float:left;">{{ $research->created_at->format('D') }}, {{ $research->created_at->format('d M') }} {{ $research->created_at->format('Y') }}</span></p>
                  </div>
                
                  <div class="event-meta">

                @if(!empty($research->research_report))
                <span style="float:right;font-size: 18px; font-weight: 700;"><a target="_blank" href="{{ url('front/assets/files/research/'.$research->research_report) }}">Click to see the Research File</a></span>
                @endif
                  </div>


							</div>

							<div class="blog-info">
								
								{!! $research->research_detail !!}
								
							</div>
					</div>


				</div>

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection