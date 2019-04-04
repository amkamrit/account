@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div class="row">
		<h3>ALL ENTRIES</h3>
	</div>
	<hr>
	<div class="row" align="center">
		<a href="{{url('Entry/create')}}" type="button" class="btn btn-success">Create New Journal Entry</a>
	</div>
	<hr>
	<div class="row">
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th>Number</th>
					<th>Entry Type</th>
					<th>Date(YYY-MM-DD)</th>
					<th>Debit Amount</th>
					<th>Credit Amount</th>
					<th>Action</th>
				</tr>
				@foreach($entry as $entrys)
				<tr>
					<td>{{$entrys->id}}</td>
					<td>
						<?php if ($entrys->dr_cr==1 ) {
							echo "Dr";
						} 
						else{
							echo "Cr";
						}
							?>
					</td>
					<td>{{$entrys->entrie_date}}</td>
					<td>{{$entrys->drAmount}}</td>
					<td>{{$entrys->crAmount}}</td>
					<td><a href="{{route('entry.entryShow',$entrys->id)}}" class="btn btn-success">View</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $entry->links() }}
	</div>
</div>
@endsection