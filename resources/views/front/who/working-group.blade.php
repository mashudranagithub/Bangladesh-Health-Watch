@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Working-Group.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Working Group Members of Bangladesh health watch</h2>
			</div>
		</div>
	</div>
</section>


<section id="Group">
	<div class="container">
		<div class="row">


		@foreach($members as $member)
			<div class="col-md-3">
				<div class="group-member">
					<div class="group-member-image">
						<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" alt="Group Member Image">
						<p class="name">{{ $member->member_name }}</p>
					</div>
					<a href="{{ route('single-member', $member->id) }}" class="group-member-details-link">
						<img src="{{ url ('front/assets/images/who-we-are/link-icon.png') }}" alt="Single member link icon">
					</a>
				</div>
			</div>
		@endforeach


		</div>
	</div>
</section>


@endsection