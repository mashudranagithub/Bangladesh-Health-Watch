@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Blog-banner.jpg') }}" alt="Page Banner Image">
</section>

		<!-- Blogs section start here -->
		<section id="Blogs" class="white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>Bangladesh Health Watch (BHW) - <span>Blog</span></h2>
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
				
				{{ $blogs->links() }}

			</div>
		</section>
		<!-- Blogs section end here -->


@endsection