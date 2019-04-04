@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h4>CREATE LEDGERS</h4>
	</div>
	<hr>
	<div class="row">
		<form method="POST" action="{{route('ladger.store')}}">
			{{ csrf_field() }}
			<div class="form-group field-groups-parent_id required">
				<label class="control-label"> Group</label>
						<select class="form-control" name="group">
				<option value="" disabled>Select Group</option>
				@foreach($group as $groups)
				<option value="{{$groups->id}}">{{$groups->name}}</option>
				@endforeach
			</select>
			<div class="help-block"></div>
		</div>

			<div class="form-group required">
				<label class="control-label">Name</label>
			
			<input type="text" name="name" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Code</label>
			
			<input type="text" name="code" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Op Balance Dc</label>
			
					<select class="form-control" name="opBalanceDc">
				<option value="1">DR</option>
				<option value="2">CR</option>
			</select>
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Op Balance</label>
			
			<input type="text" name="opBalance" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Note</label>
			
			<input type="text" name="note" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</form>
	</div>
	
</div>

@endsection