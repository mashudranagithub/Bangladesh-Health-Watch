@extends('front.layouts.master')

	@section('content')

		<!-- Blogs section start here -->
		<section id="single-Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>{{ $project->project_title }}</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
							<div class="blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Blog Image">
								</a>
							</div>

							<div class="blog-meta d-flex justify-content-between">
								<p><b>Project Created: {{ $project->created_at->format('d M') }}, {{ $project->created_at->format('Y') }}</b></p>
							</div>

							<div class="blog-info">
								
								{!! $project->project_detail !!}
								
							</div>
					</div>


				</div>

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection