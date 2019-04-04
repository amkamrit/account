@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h4>LEDGER STATEMENT FOR[ {{$ladgerdetail->name}}]</h4>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6" >
		<table class="table table-bordered" width="50%" align="center" style="background:#e6f9ff">
			<tbody>
				<tr>
					<td>Ledger</td>
					<td>{{$ladgerdetail->name}}</td>
				</tr>
				<tr>
					<td>Note</td>
					<td>{{$ladgerdetail->note}}</td>
				</tr>
				<tr>
					<td>Opening Balance</td>
					<td>
						@if($ladgerdetail->opBalanceDc==1)
						Dr.{{$ladgerdetail->opBalance}}
						@else
						Cr.{{$ladgerdetail->opBalance}}
						@endif
					</td>
				</tr>
				<tr>
					<td>Closing Balance</td>
					<td>
						@if($balancedLadger->cr_dr==1)
						Dr.{{$balancedLadger->balanced}}
						@else
						Cr.{{$balancedLadger->balanced}}
						@endif
						</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered" width="100%">
			<tbody>
				<tr>
					<th>Date</th>
					<th>Cheque Number</th>
					<th>Ledger Id</th>
					<th>Debit Amount(Rs)</th>
					<th>Credit Amount(Rs)</th>
					<th>Balance(Rs)</th>
					<th>Narration</th>
				</tr>
				@foreach($entries as $entrie)
				<tr>
					<td>{{$entrie->entrie_date}}</td>
					<td>{{$entrie->chequeNumber}}</td>
					<td>{{$entrie->id}}</td>
					<td>{{$entrie->drAmount}}</td>
					<td>{{$entrie->crAmount}}</td>
					<td>
						@if($entrie->balanced_cr_dr==1)
						Dr.{{$entrie->balanceds}}
						@else
						Cr.{{$entrie->balanceds}}
						@endif
					</td>
					<td>{{$entrie->narration}}</td>
				</tr>
				@endforeach
				<tr class="success">
					<td colspan="6">Opening Balance</td>
					<td>
						@if($ladgerdetail->opBalanceDc==1)
						Dr.{{$ladgerdetail->opBalance}}
						@else
						Cr.{{$ladgerdetail->opBalance}}
						@endif
					</td>
					
				</tr>
				<tr class="info">
					<td colspan="6">Closing Balance</td>
					<td>@if($balancedLadger->cr_dr==1)
						Dr.{{$balancedLadger->balanced}}
						@else
						Cr.{{$balancedLadger->balanced}}
						@endif</td>
				</tr>
			</tbody>
			
		</table>

	</div><hr>
</div>

@endsection