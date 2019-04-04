@extends('layouts.AdminApp')
@section('content')
<div class="container">
	<div>
		<h3>LIST OF ACCOUNTS</h3>
		<hr>
	</div>
	<div class="row">
		<div class="col-sm-1">
		<a href="{{route('group.create')}}" type="button" class="btn btn-primary">Add Group</a>
		</div>
		<div class="col-sm-2">
			<a href="{{route('ladger.create')}}" type="button" class="btn btn-primary">Add Ledger</a>
		</div>
		<div class="col-sm-9" align="right">
			<a href="{{route('balanced')}}" type="button" class="btn btn-success">Add Balanced</a>
		</div>
	</div>
	<div class="row">
		<table width="100%" class="table">
			<tbody>
				<tr>
					<th>Account Name</th>
					<th>Type</th>
					<th>O/P Balance</th>
					<th>C/L Balance</th>
					<th>Actions</th>
				</tr>
				<tr class="info" style="font-weight: bold; font-size: 15px;">
						<td>Assets</td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td></td>
				</tr>
				<?php $books=1; ?>
				@foreach($group as $groups)
				@if($groups->parent_group==1)
				<tr class="ledgerDisplay">
					<td><a href="{{route('group.show',$groups->id )}}"> {{$groups->name}}</a></td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td><a href="{{route('group.edit',$groups->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('group.delete', $groups->id)}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach

				<!-- @foreach($ladger as $ladgers)
				@if($ladgers->group==1)
				<tr class="ledgerDisplay">
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
				@endif
				@endforeach -->
					<tr class="info" style="font-weight: bold; font-size: 15px;">
						<td>Liabilities and Owners Equity</td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td></td>
				</tr>
				@foreach($group as $groups)
				@if($groups->parent_group==2)
				<tr class="ledgerDisplay">
						<td><a href="{{route('group.show',$groups->id )}}">{{$groups->name}}</a></td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td><a href="{{route('group.edit',$groups->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('group.delete', $groups->id)}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach
				<!-- @foreach($ladger as $ladgers)
				@if($ladgers->group==2)
				<tr class="ledgerDisplay">
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
						<td><a href="{{route('ladger.edit',$ladgers->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('ladger.delete',$ladgers->id )}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach -->
					<tr class="info" style="font-weight: bold; font-size: 15px;">
						<td>Expenses</td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td></td>
				</tr>
				@foreach($group as $groups)
				@if($groups->parent_group==3)
				<tr class="ledgerDisplay">
					<td><a href="{{route('group.show',$groups->id )}}">{{$groups->name}}</a></td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td><a href="{{route('group.edit',$groups->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('group.delete', $groups->id)}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach
				<!-- @foreach($ladger as $ladgers)
				@if($ladgers->group==3)
				<tr class="ledgerDisplay">
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
						<td><a href="{{route('ladger.edit',$ladgers->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('ladger.delete',$ladgers->id )}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach -->
				<tr class="info" style="font-weight: bold; font-size: 15px;">
						<td>Incomes</td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td></td>
				</tr>
				@foreach($group as $groups)
				@if($groups->parent_group==4)
				<tr class="ledgerDisplay">
						<td><a href="{{route('group.show',$groups->id )}}">{{$groups->name}}</a></td>
						<td>Group</td>
						<td>-</td>
						<td>-</td>
						<td><a href="{{route('group.edit',$groups->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('group.delete', $groups->id)}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach
			<!-- 	@foreach($ladger as $ladgers)
				@if($ladgers->group==4)
				<tr class="ledgerDisplay">
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
						<td><a href="{{route('ladger.edit',$ladgers->id )}}" class="btn btn-success" style="margin-right: 10px;">EDIT</a><a href="{{route('ladger.delete',$ladgers->id )}}" class="btn btn-danger btn-sm disabled">DELETE</a></td>
				</tr>
				@endif
				@endforeach -->
			</tbody>
		</table>
	</div>
</div>
@endsection