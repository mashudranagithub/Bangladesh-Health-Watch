@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/BHW-Bulletin.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch Publications</h2>
			</div>
		</div>
	</div>
</section>


<section id="Publication" class="gray">
	<div class="container">

		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>To raise demand on different issues the Convener of BHW, Working Group and its members’ have been regularly writing articles on contemporary issues including Covid19 in relation to health and economic issues in the daily newspaper regularly. The articles are published in leading newspapers e.g. The Daily Prothom Alo; The Daily Star; The Daily New Age; The Daily Sun and The Daily Bonik Barta.</p>
				</div>
				<hr>
			</div>
		</div>

		<div class="row">
			@foreach($publications as $publication)
			<div class="col-md-12">
				<div class="single-publication">
					<h3><a href="{{ $publication->publication_link }}" target="_blank">{{ $publication->publication_title }}</a></h3>
					<p>By: {{ $publication->publication_writter }}</p>
					<a class="newspaper-name" href="{{ $publication->publication_link }}" target="_blank">{{ $publication->newspaper_name }}</a>
				</div>
			</div>
			@endforeach
		</div>
		{{ $publications->links() }}
	</div>
</section>


@endsection