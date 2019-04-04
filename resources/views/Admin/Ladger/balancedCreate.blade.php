@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h3>CREATE BALANCED</h3>
	</div>
	<form action="{{route('balancedInsert')}}" method="POST">
		{{ csrf_field() }}
	<div class="form-group">
		<label class="control-label">Balanced</label>
		<select name="ladger_id" class="form-control">
			@foreach($ladgerAll as $ladgerAlls)
			<option value="{{$ladgerAlls->id}}">
			{{$ladgerAlls->name}}
			</option>
			@endforeach
		</select>

	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success" >Create</button>
	</div>
</div>
</form>
@endsection