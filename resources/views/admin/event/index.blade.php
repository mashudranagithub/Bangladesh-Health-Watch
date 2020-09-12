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
    <li class="active">All Events</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createEvent') }}">Add New Event</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">Events</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Event Title</th>
						<th>Date</th>
						<th>Place</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($events as $event)
					<tr>
						<td width="320px">{{ $event->event_title }}</td>
						<td width="150px">{{ $event->event_date }}</td>
						<td width="250px">{{ $event->event_place }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showEvent', $event->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editEvent', $event->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteEvent', $event->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
			@endforeach


				</tbody>
			</table>
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection