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
    <li class="active">Event Create</li>
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
      <button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('all-events') }}">All Events</a></button>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('storeEvent') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
        	<h2>Event Create Form</h2>
        	<hr>
          <div class="form-group">
            <label for="event-image">Event Image</label>
            <input name="event_image" type="file" class="form-control" id="event-image" placeholder="Event Image" accept=".jpg, .jpeg" required>
            <p class="help-block text-red">Size: 1110px width and 625px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
          </div>
          <div class="form-group">
            <label for="event_title">Event Title</label>
            <input name="event_title" type="text" class="form-control" id="event_title" placeholder="Event Title" required>
          </div>
          <div class="form-group">
            <label for="event_date">Event Date</label>
            <input name="event_date" type="text" class="form-control" id="event_date" placeholder="Event Date(Aug 22, 2020)" required>
          </div>
          <div class="form-group">
            <label for="event_start_time">Event Start Time</label>
            <input name="event_start_time" type="text" class="form-control" id="event_start_time" placeholder="9.00 am" required>
          </div>
          <div class="form-group">
            <label for="event_end_time">Event End Time</label>
            <input name="event_end_time" type="text" class="form-control" id="event_end_time" placeholder="5.00 pm" required>
          </div>
          <div class="form-group">
            <label for="event_place">Event Place</label>
            <input name="event_place" type="text" class="form-control" id="event_place" placeholder="Ex: James P Grant School of Publich Health" required>
          </div>
          <div class="form-group">
            <label for="event_status">Event Status</label>
            <select name="event_status" id="event_status" class="form-control" required>
              <option value="">Select Event Status</option>
              <option value="upcoming">Upcoming</option>
              <option value="running">Running</option>
              <option value="previous">Previous</option>
            </select>
          </div>
          <div class="form-group">
            <label for="bhw-ckeditor">Event Detail</label>
            <textarea name="event_detail" id="bhw-ckeditor" class="form-control" cols="30" rows="10" placeholder="Event Detail ..."></textarea>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Event Create</button>
        </div>
      </form>
		</div>
	</div>
</section>

@endsection