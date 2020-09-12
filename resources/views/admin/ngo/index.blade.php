@extends('admin.layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All NGO</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createNgo') }}">Create New NGO</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif

	<div class="row">
		@foreach($regions as $region)
            	@foreach($ngos as $ngo)
					@if($ngo->region_id === $region->id)
		<div class="col-md-12 col-lg-12 col-xs-12">
			<div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title text-aqua">{{ $region->region_name }} Region</h3>
	            </div>
	            <div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div style="max-width: 300px;max-height: 200px;overflow: hidden;">
								<img style="width: 100%; margin-top:10px;" src="{{ url('front/assets/images/ngo/'.$ngo->ngo_image) }}" alt="{{ $ngo->ngo_name }} image">
							</div>
						</div>
						<div class="col-md-5">
							<h4 class="text-aqua" style="text-transform: uppercase;">Ngo Name: {{ $ngo->ngo_name }}</h4>
							<p>{{ $ngo->ngo_detail }}</p>
						</div>
						<div class="col-md-3" style="border-left:1px solid #ddd;">
							<h4 class="text-aqua" style="text-transform: uppercase;">Focal Person</h4>
							<p><b>Name: </b>{{ $ngo->focal_person_name }}</p>
							<p><b>Phone: </b>{{ $ngo->focal_person_phone }}</p>
							<p><b>Email: </b>{{ $ngo->focal_person_email }}</p>
							<div>
								<a class="btn btn-warning" href="{{ route('editNgo', $ngo->id) }}">Edit</a>
								{!! Form::open(['method' => 'DELETE','route' => ['deleteNgo', $ngo->id],'style'=>'display:inline']) !!}
								  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
								{!! Form::close() !!}
							</div>
						</div>
					</div>
	            </div>
	        </div>
		</div>
					@endif
            	@endforeach
		@endforeach
	</div>

</section>

@endsection