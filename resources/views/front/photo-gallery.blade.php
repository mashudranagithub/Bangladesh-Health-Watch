@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Blog-banner.jpg') }}" alt="Page Banner Image">
</section>



<section id="Photo-gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Bangladesh Health Watch (BHW) - <span>Photo Gallery</span></h2>
				</div>
			</div>
		</div>
		<div class="row">

		</div>
		<div class="row gallery">

			@foreach($g_photos as $photo)
			<div class="col-md-3">
				<div class="gallery-item">
					<a href="{{ url ('front/assets/images/photo/'.$photo->photo) }}">
						<img src="{{ url ('front/assets/images/photo/'.$photo->photo) }}" alt="Gallery Image">
					</a>
				</div>
			</div>
			@endforeach

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-pagination">
					{{ $g_photos->links() }}
				</div>
			</div>

		</div>
	</div>
</section>



@endsection