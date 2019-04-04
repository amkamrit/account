@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div class="row">
		<h3>LIST OF ORDER</h3>
	</div><hr>
	
		
	</div>
	<div class="row" style="padding:50px; width: 100%">
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th>Sn</th>
					<th>Particular</th>
					<th>Qty</th>
					<th>Weight</th>
					<th>Rate</th>
					<th>Amount</th>
					<th>Status</th>
					<th>Delivery Date</th>
					<th>Image</th>
					<!-- <th>Action</th> -->
				</tr>
				@foreach($orders as $order)
				<tr>
					<td>{{$order->id}}</td>
					<td>{{$order->particular}}</td>
					<td>{{$order->qty}}</td>
					<td>{{$order->weight}}</td>
					<td>{{$order->rate}}</td>
					<td>{{$order->amount}}</td>
					<td>{{$order->status}}</td>
					<td>{{$order->delivary_date}}</td>
					<td>
						<?php $url=url('ImageOrder/'.$order->image); 
                                ?>
                                <img src="{{$url}}" style="height: 100px; width: 100px;">
					</td>
					<!-- <td> -->
						<!-- @if($order->print_status==0)
						<button class="btn btn-primary">Make Printable</button>
						@endif -->
					<!-- </td> -->
				</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection