@extends('layouts.AdminApp')
@section('content')
<link href="form_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='particular[]' required></td><td><input type='text' name='code[]'required></td><td><input type='text' name='size[]' required></td><td><input type='text' name='weight[]'required ></td><td><input type='text' name='qty[]' required></td><td><input type='text' name='rate[]' required></td><td><input type='text' name='amount[]' required></td><td><input type='button'  value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>
</head>
<body>
	<div class="container">
	<div class="row">
		<h3>Enter a Bill Information</h3>
	</div>
	<div class="row">
		<a href="{{route('bill.show')}}" style="margin-left: 550px;" class="btn btn-success">All Bill</a>
	</div>
	<form method="post" action="{{route('bill.store')}}">
		{{ csrf_field() }}
	<div class="row">
		<div class="col-lg-12">
			<table class="table">
				<tr>
					<td>Name</td>
					<td>Date</td>
				</tr>
				<tr>
					<td><input type="text" name="name" style="width: 300px;" required></td>
					<td><input type="Date" name="date" style="width: 300px;" required></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>Pan Number</td>
				</tr>
				<tr>
					<td><input type="text" name="address" style="width: 300px;" required></td>
					<td><input type="text" name="pannumber" style="width: 300px;" required></td>
				</tr>
				<tr>
					<td>Bill Number</td>
					<td>Advanced</td>
				</tr>
				<tr>
					<td><input type="text" name="billnumber" required></td>
					<td><input type="text" name="advanced" required></td>
				</tr>
			</table>
		</div>
	</div><hr>
<div id="wrapper">

<div id="form_div">
 
  <table id="employee_table" class="table">
  	<tbody>
  	 <tr>
			    <th>Particular</th>
			    <th>Code</th>
			    <th>Size</th>
			    <th>Weight</th>
			    <th>Qty</th>
			    <th>Rate</th>
			    <th>Amount</th>
			    <th>Action</th>
   </tr>
   <tr id="row1">
    <td><input type="text" name="particular[]" required></td>
    <td><input type="text" name="code[]" required></td>
    <td><input type="text" name="size[]" required ></td>
    <td><input type="text" name="weight[]"  required></td>
    <td><input type="text" name="qty[]"  required></td>
    <td><input type="text" name="rate[]" required ></td>
    <td><input type="text" name="amount[]" required></td>
   </tr>
   </tbody>
  </table>
  <input type="button" onclick="add_row();" value="Add Row" class="btn btn-success">
  <input type="submit" name="submit_row" value="Print and Save" class="btn btn-success">
 </form>
</div>

</div>
@endsection