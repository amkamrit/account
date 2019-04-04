@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h4>EDIT GROUPS</h4>
	</div>
	<hr>
	<div class="row">
		<form method="POST" action="{{route('group.update', $editGroup->id)}}">
						{{ csrf_field() }}
			<div class="form-group field-groups-parent_id required">
				<label class="control-label">Parent Group</label>
						<select class="form-control" name="parent_group">
				<option value="1">Assets</option>
				<option value="2">Liabilities and Owners Equity</option>
				<option value="3">Expenses</option>
				<option value="4">Incomes</option>
			</select>
			<div class="help-block"></div>
		</div>

			<div class="form-group required">
				<label class="control-label">Name</label>
			
			<input type="text" name="name" value="{{$editGroup->name}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Code</label>
			
			<input type="text" name="code" value="{{$editGroup->code}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</form>
	</div>
	
</div>

@endsection