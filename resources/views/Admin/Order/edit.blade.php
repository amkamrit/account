@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div class="row">
		<h3>CREATE ORDER</h3>
	</div>
	<hr>
	<div class="row">
	<form action="{{route('order.update', $orders->id)}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		
		<div class="form-group">
				<label class="control-label">User Id</label>
				<select name="order_user_id" class="form-control">
				    <option value="" type="disable">Select User</option>
				    @foreach($orderUser as $orderUsers)
				    <option value="{{$orderUsers->id}}">{{$orderUsers->name}}</option>
				    @endforeach
				</select>
		</div>
		<div class="form-group">
				<label class="control-label">Delivery Date(YYY-MM-DD)</label>
				<input type="text" value="{{$orders->delivary_date}}"  name="delivary_date" class="form-control">
		</div>
		<div class="form-group required">
			<label class="control-label">Particular</label>
			<textarea type="text" name="particular" class="form-control"  >{{$orders->particular}}</textarea>
			<div class="help-block"></div>
		</div>
		<div class="form-group required">
			<label class="control-label">Quantity</label>
			<input type="number" value="{{$orders->qty}}" name="qty" class="form-control" >
			<div class="help-block"></div>
		</div>     
		<div class="form-group required">
			<label class="control-label">Weight</label>
			<input type="number" value="{{$orders->weight}}" name="weight" class="form-control">
			<div class="help-block"></div>
		</div>
		<div class="form-group required">
			<label class="control-label">Rate</label>
			<input type="number" value="{{$orders->rate}}" name="rate" class="form-control">
			<div class="help-block"></div>
		</div>
		<div class="form-group required">
			<label class="control-label">Amount</label>
			<input type="number" value="{{$orders->amount}}" name="amount" class="form-control">
			<div class="help-block"></div>
		</div>
	<div class="form-group required">
			<label class="control-label">Status</label>
			<select name="status" class="form-control">
			<option>Select Status</option>
			<option value="1">Not Conform</option>
			<option value="2">Panding</option>
			<option value="3">Conform</option>
			</select>
			<div class="help-block"></div>
		</div>
	<div class="form-group required">
			<label class="control-label">Image</label>
			<input type="file" name="image" class="form-control">
			<?php $url=url('ImageOrder/'.$orders->image); ?>
			<img src="{{$url}}" height="100px;" width="100px">
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