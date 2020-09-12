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
    <li class="active">Edit NGO</li>
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
			<form role="form" action="{{ route('updateNgo', $ngo->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2 class="text-aqua">Ngo Edit Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="region-id">Select Region</label>
                  <select name="region_id" class="form-control" id="region-id" required>
                    <option>Select Region</option>
                    @foreach($regions as $region)
                    
                    <option value="{{ $region->id }}" @if($ngo->region_id === $region->id)selected @endif>{{ $region->region_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="ngo-image">Ngo Image</label>
                  <div style="max-height: 120px; max-width: 200px; overflow: hidden;margin-bottom: 10px;">
                    <img style="max-width: 100%;" src="{{ url('front/assets/images/ngo/'.$ngo->ngo_image) }}" alt="{{ $ngo->ngo_name }} Image">
                  </div>
                  <input name="ngo_image" type="file" id="ngo-image">

                  <p class="help-block text-red">Size: 350px width and 300px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="ngo-name">Ngo Name</label>
                  <input value="{{ $ngo->ngo_name }}" name="ngo_name" type="text" class="form-control" id="ngo-name">
                </div>
                <div class="form-group">
                  <label for="ngo-detail">Ngo Detail</label>
                  <textarea name="ngo_detail" class="form-control" rows="5" id="ngo-detail">{{ $ngo->ngo_detail }}</textarea>
                </div>
                <div class="form-group">
                  <label for="focal-person-name">Focal Person Name</label>
                  <input value="{{ $ngo->focal_person_name }}" name="focal_person_name" type="text" class="form-control" id="focal-person-name">
                </div>
                <div class="form-group">
                  <label for="focal-person-phone">Focal Person Phone</label>
                  <input value="{{ $ngo->focal_person_phone }}" name="focal_person_phone" type="text" class="form-control" id="focal-person-phone">
                </div>
                <div class="form-group">
                  <label for="focal-person-email">Focal Person Email</label>
                  <input value="{{ $ngo->focal_person_email }}" name="focal_person_email" type="text" class="form-control" id="focal-person-email">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ngo Update</button>
              </div>
            </form>
		</div>

	</div>

</section>

@endsection