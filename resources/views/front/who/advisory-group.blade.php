@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Who-we-are-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Advisory Committee Members of Bangladesh health watch</h2>
			</div>
		</div>
	</div>
</section>


<section id="Group">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="bhw-text">
					<h3>Advisory Group</h3>
					<p>The Advisory Group (AG) has been formed to provide overall direction, guidance and support to the Working Group (WG) while carrying out the activities of BHW. The members of AG are the eminent citizens of Bangladesh who have unique knowledge and skills in different sectors including health. The AG is led by a Convener, with the support of a Co-Convener.  AG meets bi annually.</p>
				</div>
			</div>
		</div>
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