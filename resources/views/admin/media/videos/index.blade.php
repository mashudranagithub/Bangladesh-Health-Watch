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
    <li class="active">All Videos</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createVideo') }}">Add new</a></button>
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
              <h3 class="box-title text-aqua">Videos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>SI</th>
						<th>Video Category</th>
						<th>Title</th>
						<th>Link or ID</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
			@foreach($videos as $video)
					<tr>
						<td>
							<?php echo $i++; ?>
						</td>
						<td>{{ $video->v_category }}</td>
						<td>{{ $video->title }}</td>
						<td>{{ $video->link_or_id }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showVideo', $video->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editVideo', $video->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteVideo', $video->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
			@endforeach

				</tbody>
			</table>
			{{ $videos->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection