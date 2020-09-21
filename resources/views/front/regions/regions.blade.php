@extends('front.layouts.master')

@section('content')
<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Policy-Advocacy.jpg') }}" alt="Page Banner Image">
</section>



<section id="Regions">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Regional Chapter</h2>
				</div>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>Eight Regional Chapters in eight divisions are in the process of being set up  to monitor the health situation in their catchment areas. The Regional Chapters, each with 8-12 members, includingat least 4-6 women,  will be based in a district headquarter and will ‘adopt’ a selected upazila and union within that district to reach out to more remote communities. Each chapter will maintain close contact with those remote upazilas and unions, including one or more community clinics in the area to remain aware of health situation at those sub-regional levels and bring up any significant observation from those sub-regions for discussion/action at the regional/national level.</p>
					<p>The terms of reference of the Regional Chapters will be detailed  but will entail identifying specific problems in the areas of quality of care, accountability and equity in the respective region. In the process, equity will be explored not just in terms of geography, but also in terms of socio-economic indicators, e.g., gender, income levels etc. The Chapters will be tasked to initiate actions to mitigate the issues unearthed, propose solutions and follow up implementation. If issues cannot be solved at local level, the Chapters will then raise the issue with BHW secretariat which will initiate appropriate action, if feasible. BHW hope to complete setting up the chapters by the end of 2020.</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($regions as $region)
			<div class="col-md-3">
				<div class="single-region">
					<!-- <a href="{{ route('single-region', $region->id) }}"> -->
					<!-- Note:: Ei khane single region page er link disable korar jonno link comment kore deoa hoyese -->
					<a href="javascript:void(0);">
						<img src="{{ url('front/assets/images/region/'.$region->region_image) }}" alt="Region Image">
						<h4 class="region-name">{{ $region->region_name }}</h4>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


@endsection