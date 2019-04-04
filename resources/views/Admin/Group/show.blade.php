@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div>
		<h3>LIST OF ACCOUNTS</h3>
		<hr>
	</div>
	<div class="row">
		<table width="100%" class="table">
			<tbody>
				<tr>
					<th>Sn</th>
					<th>Account Name</th>
					<th>Type</th>
					<th>O/P Balance</th>
					<th>C/L Balance</th>
					<th>Actions</th>
				</tr>

				@foreach($ladger as $ladgers)
				<tr class="ledgerDisplay">
					<td>{{$ladgers->id}}</td>
					<td><a href="{{route('ladgerDetail',$ladgers->id )}}">{{$ladgers->name}}</a></td>
						<td>Ladger</td>
						<td>Rs.{{$ladgers->opBalance}}</td>
						<td>
							@if($ladgers->opBalanceDc==1)
							DR
							@else
							CR
							@endif
						</td>
						<td><a href="{{route('ladger.edit',$ladgers->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('ladger.delete',$ladgers->id )}}" class="btn btn-danger btn-sm disabled">DELETE</a>
							</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		 {{ $ladger->links() }}
	</div>
</div>
@endsection