@extends('front.layouts.master')

@section('content')


<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>



<section id="Single-region">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Regional Chapter - <span>{{ $region->region_name }}</span></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="regions-all-content">


					<ul class="nav nav-pills nav-justified nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="hostngo-tab" data-toggle="tab" href="#hostngo" role="tab" aria-controls="hostngo" aria-selected="true"><h4>Host NGO</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="committee-tab" data-toggle="tab" href="#committee" role="tab" aria-controls="committee" aria-selected="false"><h4>Committee</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="selected-institution-tab" data-toggle="tab" href="#selected-institution" role="tab" aria-controls="selected-institution" aria-selected="false"><h4>Selected Institutions</h4></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="activities-tab" data-toggle="tab" href="#activities" role="tab" aria-controls="activities" aria-selected="false"><h4>Activities</h4></a>
						</li>
					</ul>
					<div class="tab-content" id="region-content">
						<div class="tab-pane fade show active" id="hostngo" role="tabpanel" aria-labelledby="hostngo-tab">
							<div class="region-content host-ngo">
								@if($ngo)
								<h4>{{ $ngo->ngo_name }}</h4>

								<div class="row">
									<div class="col-md-5">
										<div class="ngo-image">
											<img src="{{ url('front/assets/images/ngo/'.$ngo->ngo_image) }}" alt="{{ $ngo->ngo_name }} Image">
										</div>
									</div>
									<div class="col-md-7">
										<div class="ngo-detail">
											<p>{{ $ngo->ngo_detail }}</p>
										</div>
										<div class="region-text">
											<h5>Focal Person</h5>
											<p><b>Name: </b>{{ $ngo->focal_person_name }}</p>
											<p><b>Phone: </b>{{ $ngo->focal_person_phone }}</p>
											<p><b>Email: </b>{{ $ngo->focal_person_email }}</p>
										</div>
									</div>
								</div>
								@else
								<h4>Information doesn't added yet</h4>
								<p>Information will be added within a short time</p>
								@endif
							</div>
						</div>
						<div class="tab-pane fade" id="committee" role="tabpanel" aria-labelledby="committee-tab">
							<div class="region-content committee">
								<h4>Membership Criteria and Members</h4>
								<div class="row">
									<div class="col-md-12">
										<div class="region-text">
											<h5>Selection Criteria of the member of Regional Chapter</h5>
											<p class="mt-2"><b>The persons who will meet the below criteria will be selected as member of the Regional Chapter:</b></p>
											<ul>
												<li>Permanent citizen of the District;</li>
												<li>Physically active and have interest to visit adopted health institutions at District, Upazila and Union level;</li>
												<li>Voluntary mentality and have interest to work with health institutions;</li>
												<li>Socially respected and free from any allegation of corruption;</li>
												<li>Politically non-partisan having no direct or formal involvement in partisan political activity;</li>
												<li>Person should not have any conflict of interest with health institutions;</li>
												<li>Should not be convicted of any criminal offence;</li>
												<li>Have good social linkage;</li>
												<li>Minimum age should be above 30 years</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="region-content">	
											<h4>Committee Members</h4>
											@foreach($c_members as $c_member)
											<div class="single-committee-member">
												<div class="row">
													<div class="col-md-4">
														<div class="committee-member-image">
															<img src="{{ url('front/assets/images/committee-members/'.$c_member->committee_member_image) }}" alt="Committee Member Image">
														</div>
													</div>
													<div class="col-md-8">
														<div class="committee-member-detail region-text">
															<h5>{{ $c_member->committee_member_name }}</h5>
															<p class="mb-2">{{ $c_member->committee_member_detail }}</p>
															<p><b>Phone: </b>{{ $c_member->committee_member_phone }}</p>
															<p><b>Email: </b>{{ $c_member->committee_member_email }}</p>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="selected-institution" role="tabpanel" aria-labelledby="selected-institution-tab">
							<div class="region-content">	
											<h4>Selected Institutions of {{ $region->region_name }}</h4>
								<div class="row">
									<div class="col-md-12">
										<div class="region-content" style="margin-top:-20px;">
											@foreach($institutions as $institution)
											<div class="single-committee-member">
												<div class="row">
													<div class="col-md-4">
														<div class="committee-member-image">
															<img src="{{ url('front/assets/images/institutions/'.$institution->institution_image) }}" alt="Institution Image">
														</div>
													</div>
													<div class="col-md-8">
														<div class="committee-member-detail region-text">
															<h5>{{ $institution->institution_name }}</h5>
															<p class="mb-2">{{ $institution->institution_detail }}</p>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
								
							<div class="region-content">	
											<h4>Activities of {{ $region->region_name }}</h4>
								<div class="row">
									<div class="col-md-12">
										<div class="region-content" style="margin-top:-20px;">
											@foreach($activities as $activity)
											<div class="single-committee-member">
												<div class="row">
													<div class="col-md-4">
														<div class="committee-member-image">
															<img src="{{ url('front/assets/images/activities/'.$activity->activity_image) }}" alt="Activity Image">
														</div>
													</div>
													<div class="col-md-8">
														<div class="committee-member-detail region-text">
															<h5>{{ $activity->activity_title }}</h5>
															<p class="mb-2">{{ $activity->activity_detail }}</p>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel region-slider">
					@foreach($regions as $single_region)
					<div class="single-region">
						<a href="{{ route('single-region', $single_region->id) }}">
							<img src="{{ url('front/assets/images/region/'.$single_region->region_image) }}" alt="Region Image">
							<h4 class="region-name">{{ $single_region->region_name }}</h4>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

	</div>
</section>


@endsection