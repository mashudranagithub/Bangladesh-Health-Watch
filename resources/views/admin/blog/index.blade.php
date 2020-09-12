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
    <li class="active">All Blogs</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createBlog') }}">Add New Blog</a></button>
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
              <h3 class="box-title text-aqua">Blogs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Blog Title</th>
						<th>Written By</th>
						<th>Publishing Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($blogs as $blog)
					<tr>
						<td width="350px">{{ $blog->blog_title }}</td>
						<td>{{ $blog->blog_admin }}</td>
						<td>{{ $blog->created_at->format('D') }}, {{ $blog->created_at->format('d M') }} {{ $blog->created_at->format('Y') }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showBlog', $blog->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editBlog', $blog->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteBlog', $blog->id],'style'=>'display:inline']) !!}
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