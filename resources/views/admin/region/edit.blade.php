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
    <li class="active">Region Edit</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-regions') }}">All Regions</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif

	<div class="row">
		
		
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('updateRegion', $region->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Region Edit Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="region-image">Region Image</label>
                  @if($region->region_image)
                  <img style="max-width: 100px;margin-bottom: 10px;" src="{{ url('front/assets/images/region/'.$region->region_image) }}" alt="Region Image">
                  @endif
                  <input name="region_image" type="file" id="region-image">

                  <p class="help-block text-red">Size: 400px width and 350px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="region-name">Region Name</label>
                  <input name="region_name" value="{{ $region->region_name }}" type="text" class="form-control" id="region-name" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Region Update</button>
              </div>
            </form>
		</div>

	</div>

</section>

@endsection