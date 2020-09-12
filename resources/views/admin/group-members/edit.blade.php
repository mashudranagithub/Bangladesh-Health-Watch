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
    <li class="active">Group Member Edit</li>
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
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('group-members') }}">Back to see all members</a></button>
			<button type="button" class="btn btn-warning btn-lg"><a style="color: #fff;" href="{{ route('showGroup-member', $single_member->id) }}">Show</a></button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('updateGroup-member', $single_member->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Member Edit Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="member-image">Member Image</label>
                  @if($single_member->member_image)
					<div class="single-member-image">
						<img style="max-height: 100px;" src="{{ url ('front/assets/images/who-we-are/'.$single_member->member_group.'/'.$single_member->member_image)}}" alt="Group Member Image">
					</div>
                  @endif

                  <input name="member_image" type="file" id="member-image">

                  <p class="help-block text-red">Size: 688px width and 655px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="member-name">Member Name</label>
                  <input name="member_name" type="text" class="form-control" id="member-name" value="{{ $single_member->member_name }}" required>
                </div>
                <div class="form-group">
                  <label for="member-designation">Member Designation</label>
                  <input name="member_designation" type="text" class="form-control" id="member-designation" value="{{ $single_member->member_designation }}" required>
                </div>
                <div class="form-group">
                  <label for="member-email">Member Email</label>
                  <input name="member_email" type="email" class="form-control" id="member-email" value="{{ $single_member->member_email }}" required>
                </div>
                <div class="form-group">
                  <label for="member-position">Member Position</label>
                  <input name="member_position" type="number" class="form-control" id="member-position" value="{{ $single_member->member_position }}" required>
                </div>
                <div class="form-group">
                  <label for="group-name">Group Name</label>
                  <select name="member_group" class="form-control" id="group-name" required>
                    <option value="{{ $single_member->member_group }}" selected>{{ $single_member->member_group }}</option>
                    <option value="working-group">Working Group</option>
                    <option value="advisory-group">Advisory Group</option>
                    <option value="thematic-group">Thematic Group</option>
                    <option value="secretariat-group">Secretariat Group</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="member-detail">Member Detail</label>
                  <textarea name="member_detail" class="form-control" rows="5" id="member-detail">{{ $single_member->member_detail }}
                  </textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Member Information</button>
              </div>
            </form>
		</div>
	</div>
</section>



@endsection