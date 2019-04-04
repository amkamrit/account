@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h4>EDIT LEDGERS</h4>
	</div>
	<hr>
	<div class="row">
		<form method="POST" action="{{route('ladger.update', $editLadger->id)}}">
			{{ csrf_field() }}
			<div class="form-group field-groups-parent_id required">
				<label class="control-label"> Group</label>
						<select class="form-control" value="{{$editLadger->group}}" name="group">
				<option value="1">Assets</option>
				<option value="2">Liabilities and Owners Equity</option>
				<option value="3">Expenses</option>
				<option value="4">Incomes</option>
			</select>
			<div class="help-block"></div>
		</div>

			<div class="form-group required">
				<label class="control-label">Name</label>
			
			<input type="text" name="name" value="{{$editLadger->name}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Code</label>
			
			<input type="text" name="code" value="{{$editLadger->code}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Op Balance Dc</label>
			
					<select class="form-control" value="{{$editLadger->opBalanceDc}}" name="opBalanceDc">
				<option value="1">DR</option>
				<option value="2">CR</option>
			</select>
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Op Balance</label>
			
			<input type="text" name="opBalance" value="{{$editLadger->opBalance}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group required">
				<label class="control-label">Note</label>
			
			<input type="text" name="note"  value="{{$editLadger->note}}" class="form-control" maxlength="255">
			<div class="help-block"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</form>
	</div>
	
</div>

@endsection