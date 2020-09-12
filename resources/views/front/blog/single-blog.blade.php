@extends('front.layouts.master')

	@section('content')

		<!-- Blogs section start here -->
		<section id="single-Blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>{{ $blog->blog_title }}</h2>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
							<div class="blog-image">
								<a href="javascript:void(0);">
									<img src="{{ url('front/assets/images/blog/'.$blog->blog_image) }}" alt="Blog Image">
								</a>
							</div>

							<div class="blog-meta d-flex justify-content-between">
								<p>Published: <span class="publish-date">{{ $blog->created_at->format('d') }}</span>
								<span class="publish-month">{{ $blog->created_at->format('M') }}</span>, {{ $blog->created_at->format('Y') }}</p>

								<p><span class="author flot-left">By: <a href="javascript:void(0);">{{ $blog->blog_admin }}</a></span></p>
							</div>

							<div class="blog-info">
								
								{!! $blog->blog_detail !!}
								
							</div>
					</div>


				</div>

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection