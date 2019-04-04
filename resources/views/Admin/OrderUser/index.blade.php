@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div class="row">
		<h3>USERS ORDER</h3>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-2">
			<a href="{{url('OrderUser/create')}}"  class="btn btn-success">Create New User</a>
		</div>
		<div class="col-sm-2">
			<a href="{{url('order')}}"  class="btn btn-success">Create Order</a>
		</div>
		
	</div>
	<div class="row">
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th>Sn</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Action</th>
				</tr>
				@foreach($orderUser as $orderUsers)
				<tr>
					<td>{{$orderUsers->id}}</td>
					<td><a href="{{route('orderUser.show',$orderUsers->id)}}">{{$orderUsers->name}}</a></td>
					<td>{{$orderUsers->address}}</td>
					<td>{{$orderUsers->phone}}</td>
					<td>
						<a href="{{route('orderUser.delete',$orderUsers->id)}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection