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
    <li class="active">All Regions</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createRegion') }}">Create New Region</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif

	<div class="row">

		<div class="col-md-12 col-lg-12 col-xs-12">
			<h2>All Region</h2>
			<hr>
		</div>

		@foreach($regions as $region)
		<div class="col-md-4 col-lg-4 col-xs-12">
			<div class="box box-success">
	            <div class="box-header with-border text-center">
	              <h3 class="box-title text-aqua" style="text-transform: uppercase;font-weight: 700;">{{ $region->region_name }}</h3>
	            </div>
	            <div class="box-body">
	            	<img style="max-width: 100%;margin-bottom: 10px;" src="{{ url('front/assets/images/region/'.$region->region_image) }}" alt="Region Image">
	            	<div style="display: flex; justify-content: space-between;">
	            		<button type="button" class="btn btn-warning btn-lg"><a style="color: #fff;" href="{{ route('editRegion', $region->id) }}">Edit Region</a></button>

	            		{!! Form::open(['method' => 'DELETE','route' => ['deleteRegion', $region->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete Region', ['class' => 'btn btn-danger btn-lg']) !!}
						{!! Form::close() !!}
	            	</div>
	            </div>
	        </div>
        </div>
		@endforeach

	</div>

</section>

@endsection