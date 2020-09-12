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
    <li class="active">All Publications</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createPublication') }}">Add New Publication</a></button>
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
              <h3 class="box-title text-aqua">Publications</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Publication Title</th>
						<th>Publication By</th>
						<th>Newspaper with Link</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($publications as $publication)
					<tr>
						<td width="400px">{{ $publication->publication_title }}</td>
						<td width="200px">{{ $publication->publication_writter }}</td>
						<td width="200px"><a target="_blank" href="{{ $publication->publication_link }}">{{ $publication->newspaper_name }}</a></td>
						<td>
					         <a class="btn btn-primary" href="{{ route('editPublication', $publication->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deletePublication', $publication->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
			@endforeach
				</tbody>
			</table>
			
			{{ $publications->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>
</section>

@endsection