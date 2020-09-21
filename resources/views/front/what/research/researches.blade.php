@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ asset('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>



<section id="Research">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Evidence Generation for Advocacy</h2>
				</div>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>BHW facilitates research to generate evidence for evidence based advocacy on different topics to improve the situation related to quality of care, accountability and equity. In order to provide inputs into the Annual Programme Review (APR) of the ongoing sector wide health programme, BHW conducted an assessment of `Users’ Perspective of Public Health Services in Bangladesh’. The findings of the study was disseminated on 5 March 2020. Report is available in <a href="{{ route('reports-all') }}">here</a></p>
				</div>
			</div>
		</div>

		<div class="row">

			@foreach($research as $single_research)
			<div class="col-md-4">
				<div class="single-research">
					<div class="single-research-img">
						<a href="{{ route('single-research', $single_research->id) }}">
							<img src="{{ url('front/assets/images/what-we-do/research/'.$single_research->research_image) }}" alt="Research Image">
						</a>
					</div>
					<div class="research-info">
						<h4><a href="{{ route('single-research', $single_research->id) }}">{{ Illuminate\Support\Str::limit($single_research->research_title, 60) }}</a></h4>
						<p class="published-date">{{ $single_research->created_at->format('d M Y') }}</p>
					</div>
				</div>
			</div>
			@endforeach

		</div>

		<div class="row">
			
			<div class="col-md-12 text-right">
				{{ $research->links() }}
			</div>

		</div>
	</div>
</section>


@endsection