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

		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>The Health Watch Reports, published since 2008, are a flagship activity of BHW. Seven such reports have been published to date: list the names of the reports and year of publication. The Health Watch Reports are well known within the health sector policy makers and researchers, providing comprehensive coverage of the topics by renowned experts. Information from these reports are widely quoted and help to not only mould opinions of policy makers and progamme planners but also provide critical analysis and recommendations on the concerned topic.</p>
					<p>BHW’s Working Group members regularly publish articles in national mainstream newspapers and journals on contemporary issues. The pdf format of the reports are avialble <a href="{{ route('reports-all') }}">here</a>.</p>
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