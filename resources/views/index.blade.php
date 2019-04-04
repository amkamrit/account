@extends('layouts.AdminApp')

@section('content')

<div class="container">
	<div>
		<h6> FINANCIAL YEAR : 2075-04-01 to 2076-03-31</h6>
	</div>
	<div class="row">
		<h3>ACCOUNT OVERVIEW</h3>
		<hr>
	</div>
	<div class="col-sm-6">
		<div class="title">
			<h4>INFORMATION</h4>
		</div>
		
		<table width="100%" class="table">
			<tr>
				<th>ACCOUNT INFORMATION </th>
				<td>AAhandicraft</td>
			</tr>
			<tr>
				<th>FINANCIAL YEAR  </th>
				<td>2075-04-01 TO 2076-03-31</td>
			</tr>
			<tr>
				<th> ADDRESS </th>
				<td>Thamel, Kathmandu Nepal</td>
			</tr>
			<tr>
				<th>CONTACT NO </th>
				<td>9849437904</td>
			</tr>
			<tr>
				<th> </th>
				<td></td>
			</tr>
		</table>
	</div>
	<div class="col-sm-6">
		<div class="title">
			<h4>ACCOUNT</h4>
		</div>

		<table width="100%" class="table">
			<tr>
				<th> ASSETS </th>
				<td>Dr. 200</td>
			</tr>
			<tr>
				<th> LIABILITIES </th>
				<td>Cr. 56876</td>
			</tr>
			<tr>
				<th> INCOMES </th>
				<td>0</td>
			</tr>
			<tr>
				<th>EXPENSES </th>
				<td>0</td>
			</tr>
			<tr>
				<th> </th>
				<td></td>
			</tr>
		</table>

	</div>
</div>
@endsection