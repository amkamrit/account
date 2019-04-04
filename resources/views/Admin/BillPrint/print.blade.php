@extends('layouts.AdminApp')
@section('content')
<div class="container">
<div class="row print">
	<div class="col-lg-2">
		
	</div>
	<div class="col-lg-8">
		<h3>CRAFT FOR CULTURE TRADERS</h3>
		<h4 align="center">H.No. 11, J.P. Road, Thamel, Kathmandu , Nepal</h4>
		<h5 align="center">E-mail:craftforculture@gmail.com, www.ommantracrafts.com</h5>
	</div>
	<div class="col-lg-2">
		Phone:+977-14253604,<br>+977-9801071676
	</div>
	<div class="row">
		<div class="col-lg-9">
			<p style="padding-left: 30px;">Bill No:- {{$userInfo->billnumber}}</p>
		</div>
		<div class="col-lg-3">
			<p>Date:- {{$userInfo->date}}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<p style="padding-left: 30px;">PAN NO:- {{$userInfo->pannumber}}</p>
		</div>
		<div class="col-lg-8">
			<h3>CASH/CREDIT</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<p style="padding-left: 30px;">M/S:-  {{$userInfo->name}}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<p style="padding-left: 30px;">Address:- {{$userInfo->address}}</p>
		</div>
	</div>
	<div class="row" style="width: 100%; padding-left: 50px;">
		<table class="table">
			<tbody>
				<tr>
					<th>S.N</th>
					<th>Particular</th>
					<th>Code</th>
					<th>Size</th>
					<th>Weight</th>
					<th>Qty</th>
					<th>Rate</th>
					<th>Amount</th>
				</tr>
				<?php
				$grandTotal=0;
				 ?>
				 <?php $i = 0 ?>
				@foreach($printdata as $printdatas)
				<tr>
					<?php $i++ ?>
					<th>{{ $i}}</th>
					<th>{{$printdatas->particular}}</th>
					<th>{{$printdatas->code}}</th>
					<th>{{$printdatas->size}}</th>
					<th>{{$printdatas->weight}}</th>
					<th>{{$printdatas->qty}}</th>
					<th>{{$printdatas->rate}}</th>
					<th>{{$printdatas->amount}}</th>
					<?php
					$grandTotal+= $printdatas->amount;
					
					 ?>
				</tr>
				@endforeach
				
				<tr>
					<th colspan="6"></th>
					<th>Grand Total</th>
					<th>Rs.
						<?php
					echo $grandTotal;
					 ?>
				 	
				 </th>
				</tr>
				<tr>
					<th colspan="6"></th>
					<th>Advanced</th>
					<th>Rs.{{$userInfo->advanced}}</th>
				</tr>
				<tr>
					<th colspan="6"></th>
					<th>Balanced</th>
					<th>Rs.<?php
						$balanced=$grandTotal-$userInfo->advanced;
						echo $balanced;
					 ?></th>
				</tr>
			</tbody>
		</table>
	</div>


<div class="row">
	<div class="col-lg-12">
		<p style="padding-left: 30px;">E & OE</p>
		<p style="padding-left: 30px;">Goods received is good condition. Thanks</p>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<hr style="border-top: 1px dotted #000000 !important; " />
		<p style="padding-left: 30px;">Received By</p>
	</div>
	<div class="col-lg-4">
		<p style="padding-left: 30px; padding-top: 50px;">"We believe in Quality Product"</p>
	</div>
	<div class="col-lg-4">
		<hr style="border-top: 1px dotted #000000 !important; " />
		<p style="padding-left: 30px;">For: CRAFT FOR CULTURE TRADERS</p>
	</div>
</div>
</div> 
</div>
</div>
@endsection