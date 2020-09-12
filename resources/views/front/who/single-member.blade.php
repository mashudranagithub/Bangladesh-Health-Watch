@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Working-Group.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@if($single_member->member_group == 'working-group')
				<h2>Working Group Members of Bangladesh health watch</h2>
				@elseif($single_member->member_group == 'advisory-group')
				<h2>Advisory Group Members of Bangladesh health watch</h2>
				@elseif($single_member->member_group == 'thematic-group')
				<h2>Thematic Group Members of Bangladesh health watch</h2>
				@else($single_member->member_group == 'secretariat-group')
				<h2>Secretariat of Bangladesh health watch</h2>
				@endif

			</div>
		</div>
	</div>
</section>


<section id="Single-member">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="single-member-image">
					<img src="{{ url ('front/assets/images/who-we-are/'.$single_member->member_group.'/'.$single_member->member_image)}}" alt="Group Member Image">
				</div>
			</div>
			<div class="col-md-8 d-flex align-items-center">
				<div class="single-member-details">
					<h3>{{ $single_member->member_name }}</h3>
					<h4>{{ $single_member->member_designation }}</h4>
					<p>{{ $single_member->member_detail }}</p>
					<p class="email">Email: {{ $single_member->member_email }}</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="Other-members">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel members-slider">
					@foreach($other_members as $member)
					<div class="group-member">
						<div class="group-member-image">
							<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" alt="Group Member Image">
							<p class="name">{{ $member->member_name }}</p>
						</div>
						<a href="{{ route('single-member', $member->id) }}" class="group-member-details-link">
							<img src="{{ url ('front/assets/images/who-we-are/link-icon.png') }}" alt="Single member link icon">
						</a>
					</div>
					@endforeach
				</div>				
			</div>
		</div>
	</div>
</section>



@endsection