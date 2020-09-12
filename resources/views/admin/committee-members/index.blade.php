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
    <li class="active">All Committee Members</li>
  </ol>
</section>

<!-- Main content -->
<section class="content group-members">
	<div class="row" style="margin-bottom:30px;">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('createCommittee-member') }}">Create A New Committee Member</a></button>
		</div>
	</div>

	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	<div class="row">
	@foreach($regions as $region)
		<div class="col-md-12 col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title text-aqua">{{ $region->region_name }} Region</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
			@foreach($c_members as $c_member)
				@if($region->id == $c_member->region_id)
					<tr>
						<td>
							<img src="{{ url ('front/assets/images/committee-members/'.$c_member->committee_member_image)}}" style="width:100px;" alt="committee Member Image">
						</td>
						<td>{{ $c_member->committee_member_name }}</td>
						<td>
					         <a class="btn btn-primary" href="{{ route('showCommittee-member', $c_member->id) }}">Show</a>
					         <a class="btn btn-primary" href="{{ route('editCommittee-member', $c_member->id) }}">Edit</a>
					          {!! Form::open(['method' => 'DELETE','route' => ['deleteCommittee-member', $c_member->id],'style'=>'display:inline']) !!}
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
@endforeach

	</div>
</section>

@endsection