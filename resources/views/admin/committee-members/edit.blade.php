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
    <li class="active">Committee Member Edit</li>
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
			<button type="button" class="btn btn-success btn-lg"><a style="color: #fff;" href="{{ route('committee-members') }}">All Committee Members</a></button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<form role="form" action="{{ route('updateCommittee-member', $c_member->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
              <div class="box-body">
              	<h2>Committee Member Edit Form</h2>
              	<hr>
                <div class="form-group">
                  <label for="region-id">Select Region</label>
                  <select name="region_id" class="form-control" id="region-id" required>
                    <option>Select Region</option>
                    @foreach($regions as $region)
                    <option value="{{ $region->id }}" @if($c_member->region_id === $region->id)selected @endif>{{ $region->region_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="member-image">Committee Member Image</label>
                  @if($c_member->committee_member_image)
                  <img src="{{ url ('front/assets/images/committee-members/'.$c_member->committee_member_image)}}" alt="{{ $c_member->committee_member_name }} Image" style="max-width: 150px;">
                  @endif
                  <input name="committee_member_image" type="file" id="member-image">

                  <p class="help-block text-red">Size: 400px width and 350px height and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
                </div>
                <div class="form-group">
                  <label for="member-name">Member Name</label>
                  <input value="{{ $c_member->committee_member_name }}" name="committee_member_name" type="text" class="form-control" id="member-name" required>
                </div>
                <div class="form-group">
                  <label for="member-phone">Member Phone</label>
                  <input value="{{ $c_member->committee_member_phone }}" name="committee_member_phone" type="text" class="form-control" id="member-phone">
                </div>
                <div class="form-group">
                  <label for="member-email">Member Email</label>
                  <input value="{{ $c_member->committee_member_email }}" name="committee_member_email" type="email" class="form-control" id="member-email">
                </div>
                <div class="form-group">
                  <label for="member-position">Member Position/Serial</label>
                  <input value="{{ $c_member->committee_member_position }}" name="committee_member_position" type="number" class="form-control" id="member-position" placeholder="1" required>
                </div>
                <div class="form-group">
                  <label for="member-detail">Member Detail</label>
                  <textarea name="committee_member_detail" class="form-control" rows="5" id="member-detail">{{ $c_member->committee_member_detail }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Member Update</button>
              </div>
            </form>
		</div>
	</div>
</section>



@endsection