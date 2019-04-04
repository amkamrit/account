@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div class="row">
		<h3>CREATE ORDER</h3>
	</div>
	<hr>
	<div class="row">
	<form action="{{route('orderUser.store')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group required">
			<label class="control-label">Name</label>
			<input type="text" name="name" class="form-control"  >
			<div class="help-block"></div>
		</div>
		<div class="form-group required">
			<label class="control-label">Address</label>
			<input type="text" name="address" class="form-control" >
			<div class="help-block"></div>
		</div>     
		<div class="form-group required">
			<label class="control-label">Phone Number</label>
			<input type="text" name="phone" class="form-control">
			<div class="help-block"></div>
		</div>
		<div class="form-group required">
			<button class="btn btn-success">Save</button>
			<div class="help-block"></div>
		</div>
	</form>
</div>
</div>
@endsection