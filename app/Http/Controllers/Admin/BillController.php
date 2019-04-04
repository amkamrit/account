<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Admin\Bill;
use App\Admin\billmaster;

class BillController extends Controller
{
    public function index(){
    	return view('Admin.BillPrint.index');
    }
    public function store(Request $request){

    	$billmasterinfo=new billmaster;

    		 $billmasterinfo->name=$request->name;
			 $billmasterinfo->date=$request->date;
			 $billmasterinfo->address=$request->address;
			 $billmasterinfo->pannumber=$request->pannumber;
			 $billmasterinfo->billnumber=$request->billnumber;
			 $billmasterinfo->advanced= $request->advanced;
			 $billmasterinfo->save();
    	
    	if(isset($_POST['submit_row']))
			{	 
			 $particular=$_POST['particular'];
			 $code=$_POST['code'];
			 $size=$_POST['size'];
			 $weight=$_POST['weight'];
			 $qty=$_POST['qty'];
			 $rate=$_POST['rate'];
			 $amount=$_POST['amount'];
			 $billNumber=$_POST['billnumber'];
			 for($i=0;$i<count($particular);$i++)
			 {
			  // if($particular[$i]!="" && $code[$i]!="" && $size[$i]!="" && $weight[$i]!="" && $qty[$i]!="" && $rate[$i]!="" && $amount[$i]!="")
			  // {
			  //  INSERT INTO bills values('$particular[$i]','$code[$i]','$size[$i]','$weight[$i]','$qty[$i]','$rate[$i]','$amount[$i]');	 
			  // }
			 	$data=array(
			 		'particular' =>$particular[$i],
			 		'code' =>$code[$i],
			 		'size' =>$size[$i],
			 		'weight' =>$weight[$i],
			 		'qty' =>$qty[$i],
			 		'rate' =>$rate[$i],
			 		'amount' =>$amount[$i],
			 		'billnumber'=>$billNumber,
			 	);
			 	$insertData[] = $data;
			 }
			 Bill::insert($insertData);
			 $allBill=billmaster::all();
			 return view('Admin.BillPrint.printindex')->with('allBill', $allBill);
			}
	}
	public function show(){

		$allBill=billmaster::all();
		 return view('Admin.BillPrint.printindex')->with('allBill', $allBill);
	}
	public function printdats($id){

		$userInfo=billmaster::where('billnumber', '=' ,$id)->first();
		$printdata=Bill::where('billnumber', '=' ,$id)->get();
		return view ('Admin.BillPrint.print')
		->with('userInfo',$userInfo )
		->with('printdata', $printdata);
	}
}
