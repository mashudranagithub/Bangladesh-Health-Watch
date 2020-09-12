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
					<p>Eight Regional Chapters of Bangladesh Health Watch will be set up to monitor the health situation in their catchment areas. The Regional Chapters, each with 8-12 members, with at least 4-6 women, will be based in a district headquarter and will ‘adopt’ a selected upazila and union within that district to reach out to more remote communities. Each chapter will maintain close contact with those remote upazilas and unions, including one or more community clinics in the area to remain aware of health situation at those sub-regional levels and bring up any significant observation from those sub-regions for discussion/action at the regional/national level. The terms of reference of the Regional Chapters will be detailed during the inception phase of this project but will entail identifying specific problems in the areas of quality of care, accountability and equity in the respective region. In the process, equity will be explored not just in terms of geography, but also in terms of socio-economic indicators, e.g., gender, income levels etc. The Chapters will be tasked to initiate actions to mitigate the issues unearthed, propose solutions and follow up implementation. If issues cannot be solved at local level, the Chapters will then raise the issue with BHW secretariat which will initiate appropriate action, if feasible. 
<!-- 
The Regional chapters will systematically collect public opinion ensuring that the voices of women and girls are heard, and collect feedback on quality, transparency and equity of service access/utilization from the district, upazila and union levels (at least once Community Clinic will be included as well). Through the BHW secretariat the feedback will be channeled to government appraisals and reviews. In addition to the findings from Regional Chapters’ interactions, the situation in catchment areas of the Regional Chapters will be reviewed on the basis of  available information from Government of Bangladesh (GoB)’s databases, media reporting, other reliable reports from formal/informal sources, direct interaction with community members especially women and girls. The secretariat with technical help from an expert in qualitative research will devise a process to collect, collate and analyze the information from both these sources, drawing lessons from the Community Score Card exercise piloted earlier.  For year 1, since the Regional Chapters will not yet be fully active, a structured round of qualitative research will be carried out with the help of the Regional Chapters to feed into the Mid Term Review of the sector programme.  

A host organization from the civil society with mandate and interest similar to BHW will be identified for hosting the Regional Chapters. The host organization may be an NGO or a medical college/university. In the interest of sustainability, the host organization will be chosen which would have funding and staff capacity to host the Chapters. The host will provide a meeting venue and minimal logistical support. A BHW secretariat representative will attend meetings to document proceedings. Chapter members will not be paid any honorarium for attending meetings, but their costs of participation will be met by the host organization and later reimbursed by BHW; the Regional Chapter members will also be reimbursed for travels to respective ‘adopted’ upazilas and unions. 

How far the above design will work will need to be explored and monitored carefully in the field. It is possible that the design of the Regional Chapters may vary for one region to the other. The feasibility study/formative research to be commissioned at the beginning of the project will identify potential host organization, potential participants, costs, and specific terms of reference
 --></p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($regions as $region)
			<div class="col-md-3">
				<div class="single-region">
					<a href="{{ route('single-region', $region->id) }}">
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