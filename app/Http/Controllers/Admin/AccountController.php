<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Group;
use App\Admin\Ladger;
use App\Admin\Entries;
use App\Admin\balanced_ladger;

class AccountController extends Controller
{
    public function index()
	    {
	    	$groupAll=Group::all();
	    	$ladgerAll=Ladger::all();
	    	$entries= Entries::all();
	    	$Balance=balanced_ladger::all();

	    	return view('Admin.Account.index')
	    	->with('group' ,$groupAll)
	    	->with('ladger', $ladgerAll)
	    	->with('balance', $Balance);
	    }
	public function detailLadger($id){
		$ladgerdetail=Ladger::find($id);
		$balancedLadger=balanced_ladger::where('ladger_id','=', $id)->first();
		$entries =entries::where('ladger', '=', $id)->get();
		$Balance=balanced_ladger::all();
		return view('Admin.Account.ladgerDetail')
		->with('ladgerdetail', $ladgerdetail)
		->with('entries', $entries)
		->with('balance', $Balance)
		->with('balancedLadger', $balancedLadger);
	}
	public function balanced(){

	    	$ladgerAll=Ladger::all();
		return view('Admin.Ladger.balancedCreate')->with('ladgerAll', $ladgerAll);
	}
	public function createBalanced(Request $request){

		$idCheck=$request->ladger_id;
		$checkLadger=balanced_ladger::where('ladger_id','=', $idCheck)->first();

		if (empty($checkLadger)) {
			
			$entryBalanced=Ladger::find($request->ladger_id);
			$balanced_ladger= new balanced_ladger;

			$balanced_ladger->cr_dr=$entryBalanced->opBalanceDc;
			$balanced_ladger->ladger_id=$entryBalanced->id;
			$balanced_ladger->balanced=$entryBalanced->opBalance;

			$balanced_ladger->save();

			$groupAll=Group::all();
	    	$ladgerAll=Ladger::all();
	    	$entries= Entries::all();
	    	$Balance=balanced_ladger::all();

	    	return view('Admin.Account.index')
	    	->with('group' ,$groupAll)
	    	->with('ladger', $ladgerAll)
	    	->with('balance', $Balance);
		}
		else{
			$groupAll=Group::all();
	    	$ladgerAll=Ladger::all();
	    	$entries= Entries::all();
	    	$Balance=balanced_ladger::all();

	    	return view('Admin.Account.index')
	    	->with('group' ,$groupAll)
	    	->with('ladger', $ladgerAll)
	    	->with('balance', $Balance);
	    }

	}
}
