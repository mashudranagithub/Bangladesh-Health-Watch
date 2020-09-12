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
    <li class="active">Activity Edit</li>
  </ol>
</section>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif


<!-- Main content -->
<section class="content">
  <div class="row" style="margin-bottom:30px;">
    <div class="col-md-12 text-right">
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-activity') }}">All activity</a></button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <form role="form" action="{{ route('updateActivity', $activity->id) }}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
              <div class="box-body">
                <h2>Activity Edit Form</h2>
                <hr>
                <div class="form-group">
                  <label for="region-id">Select Region</label>
                  <select name="region_id" class="form-control" id="region-id" required>
                    <option>Select Region</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}" @if($activity->region_id == $region->id)selected @endif>{{ $region->region_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="institution-image">Activity Image</label>
                  @if($activity->activity_image)
                  <img src="{{ url ('front/assets/images/activities/'.$activity->activity_image)}}" style="width:150px;" alt="Activity Image">
                  @endif
                  <input name="activity_image" type="file" id="activity-image">

                  <p class="help-block text-red">Size: 400px width and 350px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="activity-title">Activity Title</label>
                  <input value="{{ $activity->activity_title }}" name="activity_title" type="text" class="form-control" id="activity-name" required>
                </div>
                <div class="form-group">
                  <label for="activity-detail">Activity Detail</label>
                  <textarea name="activity_detail" class="form-control" rows="5" id="activity-detail">{{ $activity->activity_detail }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Activity Update</button>
              </div>
            </form>
    </div>
  </div>
</section>



@endsection
				
                