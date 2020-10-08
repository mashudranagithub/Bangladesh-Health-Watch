@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Who-we-are-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Secreteriate of Bangladesh Helath Watch</h2>
			</div>
		</div>
	</div>
</section>


<section id="Group">
	<div class="container">
		<div class="row mb-4 justify-content-between">
			<div class="col-md-6">
				<div class="bhw-text">
					<h3>Secretariat</h3>
					<p>BHW Secretariat has been formed with the professionals to carry out the activities as per the approved plan. The secretariat is the hub of all activities and performs under the guidance of the Working Group and Project Steering Committee and is now housed within JPGSPH premises. The Chief Coordinator is leading the Secretariat with support of five other full time members. An Adviser is providing support and the Convener of the WG is leading the overall performance of the Secretariat.</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="secretariat-image">
					<img src="{{ url('front/assets/images/who-we-are/secretariat-group/Organogram.jpg') }}" alt="Organogram Image">
					<p class="text-center mt-2"><b>Organogram/Structure of BHW Secretariat</b></p>
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