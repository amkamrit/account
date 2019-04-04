@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<table class="table">
			<tbody>
				<tr>
					<th>Name</th>
					<th>Bill Number</th>
					<th>Action</th>
				</tr>
				@foreach($allBill as $allBills)
				<tr>
					
					<th>{{$allBills->name}}</th>
					<th>{{$allBills->billnumber}}</th>
					<th><a href="{{route('bill.printdats',$allBills->billnumber )}}" class="btn btn-success">Print</a></th>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection