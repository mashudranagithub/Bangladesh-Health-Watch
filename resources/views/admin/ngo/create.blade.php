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
    <li class="active">Create New NGO</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-ngo') }}">All NGO</a></button>
		</div>
	</div>

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif

	<div class="row">

		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storeNgo') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Ngo Create Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="region-id">Select Region</label>
                  <select name="region_id" class="form-control" id="region-id" required>
                    <option>Select Region</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="ngo-image">Ngo Image</label>
                  <input name="ngo_image" type="file" id="ngo-image" required>

                  <p class="help-block text-red">Size: 350px width and 300px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="ngo-name">Ngo Name</label>
                  <input name="ngo_name" type="text" class="form-control" id="ngo-name" placeholder="Region Name" required>
                </div>
                <div class="form-group">
                  <label for="ngo-detail">Ngo Detail</label>
                  <textarea name="ngo_detail" class="form-control" rows="5" placeholder="Details ..." id="ngo-detail"></textarea>
                </div>
                <div class="form-group">
                  <label for="focal-person-name">Focal Person Name</label>
                  <input name="focal_person_name" type="text" class="form-control" id="focal-person-name" placeholder="Focal person name">
                </div>
                <div class="form-group">
                  <label for="focal-person-phone">Focal Person Phone</label>
                  <input name="focal_person_phone" type="text" class="form-control" id="focal-person-phone" placeholder="Focal person phone">
                </div>
                <div class="form-group">
                  <label for="focal-person-email">Focal Person Email</label>
                  <input name="focal_person_email" type="text" class="form-control" id="focal-person-email" placeholder="Focal person email">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ngo Create</button>
              </div>
            </form>
		</div>

	</div>

</section>

@endsection