@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h3>Entries Detail</h3>
	</div>
	<hr>
  <div class="row">
    <div class="col-sm-12">
    	<table class="table table-bordered" width="50%" align="center">
			<tbody>
				<tr>
					<td>Tag</td>
					<td>{{$entrys->entrie_date}}</td>
				</tr>
				<tr>
					<td>Narration</td>
					<td>{{$entrys->narration}}</td>
				</tr>
				<tr>
					<td>Check Number</td>
					<td>{{$entrys->chequeNumber}}</td>
				</tr>
				</tbody>
			</table>
    </div>
  </div>
</div>


@endsection