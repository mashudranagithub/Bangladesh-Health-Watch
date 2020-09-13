@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url ('front/assets/images/page-banners/Who-we-are-banner.jpg') }}" alt="Page Banner Image">
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
			<div class="col-md-12 mb-4">
				<div class="bhw-text">
					<h3>Working Group</h3>
					<p>BHW is governed by a Working Group (WG). The WG is led by a Convener and the other ten members are all stalwarts of the health sector in Bangladesh. Through regular meetings, the group approves plan, provides direction and guidance, and reviews progress of implementation. The WG identifies BHW’s priority issues for advocacy/publications, approves and monitors annual work plan and implementation, forms thematic groups and regional chapters, links with Advisory Committee. The Convener of WG also has some additional responsibilities, to oversee the performance and lend support and guidance to BHW Secretariat, and negotiate with JPGSPH in resolving issues.</p>
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