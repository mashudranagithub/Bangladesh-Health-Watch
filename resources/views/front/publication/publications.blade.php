@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/BHW-Bulletin.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bangladesh Health Watch (BHW) Publications</h2>
			</div>
		</div>
	</div>
</section>


<section id="Publication" class="gray">
	<div class="container">
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