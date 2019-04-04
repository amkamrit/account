@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h3>Order Detail</h3>
	</div>
	<hr>
	
<hr>
  <div class="row">
    <div class="col-sm-8"  >
    	<table class="table table-bordered" width="50%" align="center">
			<tbody>
			    	<tr>
					<td>Delivery Date</td>
					<td>{{$orders->delivary_date}}</td>
				</tr>
				<tr>
					<td>particular</td>
					<td>{{$orders->particular}}</td>
				</tr>
				<tr>
					<td>Quantaty</td>
					<td>{{$orders->qty}}</td>
				</tr>
				<tr>
					<td>weight</td>
					<td>{{$orders->rate}}</td>
				</tr>
				<tr>
					<td>Amount</td>
					<td>{{$orders->amount}}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>{{$orders->status}}</td>
				</tr>
				</tbody>
			</table>
    </div>
    <div class="col-sm-4">
			<?php $url=url('ImageOrder/'.$orders->image); 
                                ?>
			<img src="{{$url}}" style="width: 50%; height: 50%">
    </div>
  </div>
</div>
@endsection