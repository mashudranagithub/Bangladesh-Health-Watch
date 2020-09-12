@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ asset('front/assets/images/page-banners/Blog-banner.jpg') }}" alt="Page Banner Image">
</section>


		<!-- Events section start here -->
		<section id="Projects" class="gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2>Bangladesh Health Watch (BHW) - <span>Our Projects</span></h2>
						</div>
					</div>
				</div>
				<div class="row">

					@foreach($projects as $project)
					<div class="col-md-4">
						<div class="single-work full-box">
							<div class="single-work-image">
								<a href="{{ route('single-project', $project->id ) }}">
									<img src="{{ url('front/assets/images/project/'.$project->project_image) }}" alt="Work Image">
								</a>
							</div>
							<div class="single-work-info info-box">
								<h3><a href="{{ route('single-project', $project->id ) }}">{{ Illuminate\Support\Str::limit($project->project_title, 23) }}</a></h3>
								<p>
									{!! Illuminate\Support\Str::limit($project->project_detail, 150) !!}
								</p>
								<p class="info-update-date">{{ $project->created_at->format('d M, Y') }}</p>
							</div>
						</div>
					</div>
					@endforeach

				</div>

				<!-- BHW Pagination Start Here -->
				<div class="row">
					<div class="col-md-12">
						<div class="bhw-pagination">
							{{ $projects->links() }}
						</div>
					</div>
				</div><!-- BHW Pagination End Here -->
			</div>
		</section>

@endsection