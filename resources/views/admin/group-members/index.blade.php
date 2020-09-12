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
    <li class="active">All Group Members</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createGroup-member') }}">Create A New Meber</a></button>
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
              <h3 class="box-title text-aqua">Working Group Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($members as $member)
				@if($member->member_group == 'working-group')
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" style="width:100px;" alt="Member Image">
						</td>
						<td>{{ $member->member_name }}</td>
						<td>{{ $member->member_designation }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showGroup-member', $member->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editGroup-member', $member->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteGroup-member', $member->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
				@endif
			@endforeach
				</tbody>
			</table>
            </div>
            <!-- /.box-body -->
<!--             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">Advisory Group Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($members as $member)
				@if($member->member_group == 'advisory-group')
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" style="width:100px;" alt="Member Image">
						</td>
						<td>{{ $member->member_name }}</td>
						<td>{{ $member->member_designation }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showGroup-member', $member->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editGroup-member', $member->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteGroup-member', $member->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
				@endif
			@endforeach
				</tbody>
			</table>
            </div>
            <!-- /.box-body -->
<!--             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>


		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">Thematic Group Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($members as $member)
				@if($member->member_group == 'thematic-group')
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" style="width:100px;" alt="Member Image">
						</td>
						<td>{{ $member->member_name }}</td>
						<td>{{ $member->member_designation }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showGroup-member', $member->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editGroup-member', $member->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteGroup-member', $member->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
				@endif
			@endforeach
				</tbody>
			</table>
            </div>
            <!-- /.box-body -->
<!--             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>


		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">Secretariat Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($members as $member)
				@if($member->member_group == 'secretariat-group')
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/who-we-are/'.$member->member_group.'/'.$member->member_image)}}" style="width:100px;" alt="Member Image">
						</td>
						<td>{{ $member->member_name }}</td>
						<td>{{ $member->member_designation }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showGroup-member', $member->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editGroup-member', $member->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteGroup-member', $member->id],'style'=>'display:inline']) !!}
					              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					          {!! Form::close() !!}
						</td>
					</tr>
				@endif
			@endforeach
				</tbody>
			</table>
            </div>
            <!-- /.box-body -->
<!--             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
          </div>
          <!-- /.box -->
        </div>


	</div>
</section>

@endsection