@extends('layouts.AdminApp')
@section('content')

<div class="container">
	<div class="row">
		<h3>ORDER LIST</h3>
	</div>
	<hr>
<style>

     .title {
                font-size: 96px;
            }
            button{
                padding: 7px;
                font-size: 20px;
            }

            *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}


table {
  max-width: 960px;
  margin: 10px auto;
}

caption {
  font-size: 1.6em;
  font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #8a97a0;
  color: #FFF;
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: bold;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}
table{
  float: left;
}
        </style>
<div class="row" style="width: 100%">
	<div class="col-lg-8">
		<!-- View Data -->
			<table width="100%">
				<tr>
					<td>Sn</td>
					<td>Particular</td>
					<td>Qty</td>
					<td>Weight</td>
					<td>Rate</td>
					<td>Amount</td>
					<td>Action</td>
				</tr>

				@foreach($orders as $order)
				<tr>
					<td>{{$order->id}}</td>
					<td><a href="{{route('order.show',$order->id)}}">{{$order->particular}}</a></td>
					<td>{{$order->qty}}</td>
					<td>{{$order->weight}}</td>
					<td>{{$order->rate}}</td>
					<td>{{$order->amount}}</td>
					<td><a href="{{route('order.edit', $order->id)}}" class="btn btn-success">Edit</a></td>
				</tr>
				@endforeach
			</table>
	</div>
	<div class="col-lg-4" style="padding-left: 50px;">
		<!-- Insert Data -->
		<form method="POST" action="{{route('order.store')}}" enctype="multipart/form-data">
			
			<table>
				<th colspan="2" > Insert </th>
				<tr>
					<td>Particular</td>
					<td><input type="text" name="particular" /></td>
				</tr>
				<tr>
					<td>Quantaty</td>
					<td><input type="text" name="qty" /></td>
				</tr>
				<tr>
					<td>Weight</td>
					<td><input type="text" name="weight" /></td>
				</tr>
				<tr>
					<td>Rate</td>
					<td><input type="text" name="rate" /></td>
				</tr>
				<tr>
					<td> Delivary Date</td>
					<td><input type="date" name="delivary_date" /></td>
				</tr>
				<tr>
					<td>State</td>
					<td>
								<select name="status" class="form-control">
								<option disabled>Select Status</option>
								<option value="1">Not Conform</option>
								<option value="2">Panding</option>
								<option value="3">Conform</option>
								</select>
					</td>
				</tr>
				<tr>
					<td>Main User </td>
					<td>
						<select name="order_user_id"> 
							<option value="" disabled>Select User </option>
							@foreach($orderUser as $orderUsers)
							<option value="{{$orderUsers->id}}">{{$orderUsers->name}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>Image </td>
					<td><input type="file" name="image" /></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" id="insert"> Insert </button> </td>
				</tr>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			</table>
		</form>
			
	</div>
</div>

			<!-- AJAX SECTION -->

			<script type="text/javascript">
				// for Insert Ajax
				$('#insert').click(function(){
					$.ajax({
						type:'post',
						url: 'order.store',
						data:{
							'_token':$('input[name=_token').val(),
							'particular':$('input[name=particular').val(),
							'qty':$('input[name=qty').val(),
							'weight':$('input[name=weight').val(),
							'rate':$('input[name=rate').val(),
							'amount':$('input[name=amount').val(),
							'status':$('input[name=status').val(),
							'delivary_date':$('input[name=delivary_date').val(),
							'order_user_id':$('input[name=order_user_id').val()
						},
						success:function(data){
							window.location.reload();
						},
					});
				});
			</script>
@endsection