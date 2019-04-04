@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h4>LEDGER STATEMENT FOR AMRIT KAFLE</h4>
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
					<td>Amrit Kafle</td>
				</tr>
				<tr>
					<td>Note</td>
					<td>This is test account.</td>
				</tr>
				<tr>
					<td>Opening Balance</td>
					<td>Dr.100</td>
				</tr>
				<tr>
					<td>Closing Balance</td>
					<td>Dr.100</td>
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
					<th>Number</th>
					<th>Ledger</th>
					<th>Debit Amount(Rs)</th>
					<th>Credit Amount(Rs)</th>
					<th>Balance(Rs)</th>
					<th>Result</th>
				</tr>
				<tr>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
					<td>2050-1-1</td>
				</tr>
				<tr class="success">
					<td colspan="6">Opening Balance</td>
					<td>DR.100</td>
					
				</tr>
				<tr class="info">
					<td colspan="6">Closing Balance</td>
					<td>DR.100</td>
				</tr>
			</tbody>
			
		</table>
	</div><hr>
</div>

@endsection