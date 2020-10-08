@extends('front.layouts.master')

	@section('content')

<section id="Page-banner">
	<img src="{{ url('front/assets/images/page-banners/Who-we-are-banner.jpg') }}" alt="Page Banner Image">
</section>


<section id="Page-heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>How Bangladesh Helath Watch Works</h2>
			</div>
		</div>
	</div>
</section>


<section id="Group">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<p>BHW activities are overall directed by a Working Group (WG) and an Advisory Group (AG). The WG is led by a Convener and the other ten members are all stalwarts of the health sector in Bangladesh. The Advisory Group has been formed to provide overall direction, guidance and support to the Working Group while carrying out the activities of BHW. BHW has Secretariat as the hub of all activities. Secretariat has been formed with the professionals to carry out the activities as per the approved plan by the WG.</p>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<h3>Working Group</h3>
					<p>BHW is governed by a Working Group (WG). The WG is led by a Convener and the other ten members are all stalwarts of the health sector in Bangladesh. Through regular meetings, the group approves plan, provides direction and guidance, and reviews progress of implementation. The WG identifies BHW’s priority issues for advocacy/publications, approves and monitors annual work plan and implementation, forms thematic groups and regional chapters, links with Advisory Committee. The Convener of WG also has some additional responsibilities, to oversee the performance and lend support and guidance to BHW Secretariat, and negotiate with JPGSPH in resolving issues.</p>
					<p>Details of Working Group is available <a href="{{ route('working-group') }}">here</a>.</p>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="bhw-text">
					<h3>Advisory Group</h3>
					<p>The Advisory Group (AG) has been formed to provide overall direction, guidance and support to the Working Group (WG) while carrying out the activities of BHW. The members of AG are the eminent citizens of Bangladesh who have unique knowledge and skills in different sectors including health. The AG is led by a Convener, with the support of a Co-Convener.  AG meets bi annually.</p>
					<p>Details of Advisory Group is available <a href="{{ route('advisory-group') }}">here</a>.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="bhw-text">
					<h3>Secretariat</h3>
					<p>BHW Secretariat has been formed with the professionals to carry out the activities as per the approved plan. The secretariat is the hub of all activities and performs under the guidance of the Working Group and Project Steering Committee and is now housed within JPGSPH premises. The Chief Coordinator is leading the Secretariat with support of five other full time members. An Adviser is providing support and the Convener of the WG is leading the overall performance of the Secretariat.</p>
					<p>Details of Secretariat is available <a href="{{ route('secretariat-group') }}">here</a>.</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection