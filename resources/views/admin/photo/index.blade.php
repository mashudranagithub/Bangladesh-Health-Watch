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
    <li class="active">All Photo</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createPhoto') }}">Add New Photo</a></button>
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
              <h3 class="box-title text-aqua">Photos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Photo</th>
						<th>Photo Type</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($photos as $photo)
					<tr>
						<td width="350px">
							<img style="width: 200px;" src="{{ url('front/assets/images/photo/'.$photo->photo) }}" alt="Gallery Photo">
						</td>
						<td width="200px;">{{ $photo->photo_type }}</td>
						<td width="300px;">
					         <a class="btn btn-primary" href="{{ route('editPhoto', $photo->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deletePhoto', $photo->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
					          <br>
					          <br>
					          <a class="btn btn-info" href="{{ url('front/assets/images/photo/'.$photo->photo) }}">Photo/Link Show</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
				{{ $photos->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>

</section>

@endsection