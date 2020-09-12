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
    <li class="active">All Sliders</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createSlider') }}">Add New Slide</a></button>
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
              <h3 class="box-title text-aqua">Sliders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Slider Text</th>
						<th>Position</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($slides as $slide)
					<tr>
						<td width="220px">
							<img style="width: 200px;" src="{{ url('front/assets/images/sliders/'.$slide->slide_image) }}" alt="Slide Image">
						</td>
						<td width="400px;">
							<h4>{{ $slide->slide_big_title }}</h4> <br>
							<h6>{{ $slide->slide_small_title }}</h6>
						</td>
						<td width="150px;">{{ $slide->slide_position }}</td>
						<td width="200px;">
							<a class="btn btn-primary" href="{{ route('editSlider', $slide->id) }}">Edit</a>
							{!! Form::open(['method' => 'DELETE','route' => ['deleteSlider', $slide->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
				{{ $slides->links() }}
            </div>
          </div>
          <!-- /.box -->
        </div>

	</div>

</section>

@endsection