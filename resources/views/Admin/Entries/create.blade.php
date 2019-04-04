@extends('layouts.AdminApp')
@section('content')
<title>Create Entry</title>
<div class="container">
	<div class="row">
		<h3>CREATE JOURNAL ENTRY</h3>
	</div> 
	<hr>
	<form  action="{{route('entry.store')}}" method="post" style="margin-left: 40px;">
		{{ csrf_field() }}
		<input type="hidden" name="_csrf">
		<div class="form-group">
				<label class="control-label">Date(YYY-MM-DD)</label>
				<input type="date"  name="entrie_date" class="form-control">
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group">
			<label class="control-label">Size</label>
			<input name="size" class="form-control"/>
		<div class="help-block"></div>
		</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
			<label class="control-label">Weight</label>
			<input name="weight" class="form-control"/>
		<div class="help-block"></div>
		</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
			<label class="control-label">Qty</label>
			<input name="qty" class="form-control"/>
		<div class="help-block"></div>
		</div>
			</div>
			<div class="col-lg-2">
				<div class="form-group">
			<label class="control-label">Rate</label>
			<input name="rate" class="form-control"/>
		<div class="help-block"></div>
		</div>
			</div>
		</div>
		<table class="table table-condensed table-bordered">
			<tbody>
				<tr>
					<th>Dr/Cr</th>
					<th>Ledger</th>
					<th>Dr.Amount</th>
					<th>Cr.Amount</th>
					<th>Cheque No</th>
					<th>Action</th>
					<th>Current Balance</th>
				</tr>
				<tr>
					<td><select name="dr_cr">
						<option value="1">Dr</option>
						<option value="2">Cr</option>
					</select></td>
					<td>
						<select name="ladger" id="ladger">
							<option value="0" disable="true" selected="true">=== Select Ladger ===</option>
							@foreach($ladger as $ladgers)
							<option value="{{$ladgers->id}}">{{$ladgers->name}}</option>
							@endforeach
						</select>
					</td>
					<td>
						<input type="text" name="drAmount">
					</td>
					<td>
						<input type="text" name="crAmount">
					</td>
					<td>
						<input type="text" name="chequeNumber">
					</td>
					<td>
						
					</td>
					<td>
						<select name="balanceds" id="balanceds">
							
							<option value="0" disable="true" selected="true">view Balanced</option>
							
						</select>
					</td>
				</tr>
			</tbody>
			
		</table>
		<div class="form-group">
			<label class="control-label">Narration</label>
			<textarea name="narration" class="form-control"></textarea>
		<div class="help-block"></div>
		</div>
		<div class="form-group">
			<label class="control-label">Tag</label>
			<input type="text" name="tag" class="form-control">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">Save</button>
		</div>
		
	</form>

</div>
	<script type="text/javascript">
      $('#ladger').on('change', function(e){
        console.log(e);
        var ladger_id = e.target.value;
        $.get('/json-balance?ladger_id=' + ladger_id,function(data) {
          console.log(data);
          $('#balanceds').empty();
          $('#balanceds').append('<option value="0" disable="true" selected="true">=== Select Current Amount ===</option>');

          $.each(data, function(index, balancedsObj){
            $('#balanceds').append('<option value="'+ balancedsObj.id +'">'+ balancedsObj.balanced +'</option>');
          })
        });
      });
    </script>

    
@endsection