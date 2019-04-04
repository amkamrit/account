<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use IlluminateHttpRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\EntryRepository;
use App\Admin\Group;
use App\Admin\Ladger;
use App\Admin\Entries;
use App\Admin\balanced_ladger;
use IlluminateSupportFacadesInput;
use Illuminate\Support\Facades\Input;

class EntryController extends Controller
{
    /**
	 * @var $task
	 */
	private $entry;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(EntryRepository $entry) 
	{
		$this->entry = $entry;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function getAllEntry($id = null)
	{
		$entrys = Entries::paginate(8);

		return view('Admin.Entries.index')
		->with('entry', $entrys);
	}

	/**
	 * Store a task
	 *
	 * @var array $attributes
	 *
	 * @return mixed
	 */
	public function createEntry()
	{
		$groups=Group::all();
		$ladger=Ladger::all();
		return view('Admin.Entries.create')
		->with('group',$groups)
		->with('ladger', $ladger);
	}

	public function entryStore(Request $request)
	{
		$entrys=new Entries;
		$balancedUpdate = balanced_ladger::find($request->balanceds);
		$entrys->entrie_date=$request->entrie_date;
		$entrys->dr_cr=$request->dr_cr;
		$entrys->ladger=$request->ladger;
		$entrys->drAmount=$request->drAmount;
		$entrys->crAmount=$request->crAmount;
		$entrys->chequeNumber=$request->chequeNumber;
		$entrys->narration=$request->narration;
		$entrys->tag=$request->tag;
		$entrys->balanceds=$request->balanceds;

		if (empty($request->rate)) {
			
		
		$balancedEntry =balanced_ladger::find($request->balanceds);
		$actualBalanced=0;
		if ($balancedEntry->cr_dr==1) {
			$actualBalanced=$balancedEntry->balanced+$request->drAmount-$request->crAmount;
		}
		else{
			$actualBalanced=$balancedEntry->balanced-$request->drAmount+$request->crAmount;
		}

		$opBalance=Ladger::where('id', '=', $balancedEntry->ladger_id)->first();

		$allEntries=Entries::where('ladger','=',$balancedEntry->ladger_id)->get();

		$drCrStatus=balanced_ladger::where('ladger_id', $request->ladger)->first();

		$totalDrAmountEntry=0;
		$totalCrAmountEntry=0;
		$actualDrEntryAmount=0;

		if ($drCrStatus->cr_dr==1) {

		foreach ($allEntries as $allEntrie) {
			$totalDrAmountEntry+=$allEntrie->drAmount;
			$totalCrAmountEntry+=$allEntrie->crAmount;
		}
		if ($opBalance->opBalanceDc==1) {
			$actualDrEntryAmount= $totalDrAmountEntry+$opBalance->opBalance+$request->drAmount-$request->crAmount;
		}
		else{
			$actualDrEntryAmount= $totalDrAmountEntry-$opBalance->opBalance+$request->drAmount-$request->crAmount;
		}
		
		if ($actualDrEntryAmount<$totalCrAmountEntry) {

			$drCrStateIndecater=2;
		}
		else{
			$drCrStateIndecater=1;
		}
	}
	else{
		foreach ($allEntries as $allEntrie) {
			$totalDrAmountEntry+=$allEntrie->drAmount;
			$totalCrAmountEntry+=$allEntrie->crAmount;
		}
		if ($opBalance->opBalanceDc==1) {
			$actualCrEntryAmount= $totalCrAmountEntry-$opBalance->opBalance-$request->drAmount+$request->crAmount;
		}
		else{
			$actualCrEntryAmount= $totalCrAmountEntry+$opBalance->opBalance-$request->drAmount+$request->crAmount;
		}
		if ($actualCrEntryAmount<$totalDrAmountEntry) {
			$drCrStateIndecater=1;
		}
		else{
			$drCrStateIndecater=2;
		}
	}


		$entrys->balanceds=ABS($actualBalanced);
		$balancedUpdate->balanced=ABS($actualBalanced);
		$entrys->balanced_cr_dr=$drCrStateIndecater;
		$balancedUpdate->cr_dr=$drCrStateIndecater;
	}
	//Rate Calculation 
	else{
		$weight=$request->weight;
		$rate=$request->rate;
		$qty=$request->qty;
		$amount1=$weight*$rate;
		$amount2=$qty*$rate;
		$inputAmount=ABS($amount1-$amount2);

		$balancedEntry =balanced_ladger::find($request->balanceds);
		$actualBalanced=0;
		if ($balancedEntry->cr_dr==1) {
			$actualBalanced=$balancedEntry->balanced-$inputAmount;
		}
		else{
			$actualBalanced=$balancedEntry->balanced+$inputAmount;
		}

		$opBalance=Ladger::where('id', '=', $balancedEntry->ladger_id)->first();

		$allEntries=Entries::where('ladger','=',$balancedEntry->ladger_id)->get();

		$drCrStatus=balanced_ladger::where('ladger_id', $request->ladger)->first();

		$totalDrAmountEntry=0;
		$totalCrAmountEntry=0;
		$actualDrEntryAmount=0;

		if ($drCrStatus->cr_dr==1) {

		foreach ($allEntries as $allEntrie) {
			$totalDrAmountEntry+=$allEntrie->drAmount;
			$totalCrAmountEntry+=$allEntrie->crAmount;
		}
		if ($opBalance->opBalanceDc==1) {
			$actualDrEntryAmount= $totalDrAmountEntry+$opBalance->opBalance+$request->drAmount-$request->crAmount;
		}
		else{
			$actualDrEntryAmount= $totalDrAmountEntry-$opBalance->opBalance+$request->drAmount-$request->crAmount;
		}
		
		if ($actualDrEntryAmount<$totalCrAmountEntry) {

			$drCrStateIndecater=2;
		}
		else{
			$drCrStateIndecater=1;
		}
	}
	else{
		foreach ($allEntries as $allEntrie) {
			$totalDrAmountEntry+=$allEntrie->drAmount;
			$totalCrAmountEntry+=$allEntrie->crAmount;
		}
		if ($opBalance->opBalanceDc==1) {
			$actualCrEntryAmount= $totalCrAmountEntry-$opBalance->opBalance-$request->drAmount+$request->crAmount;
		}
		else{
			$actualCrEntryAmount= $totalCrAmountEntry+$opBalance->opBalance-$request->drAmount+$request->crAmount;
		}
		if ($actualCrEntryAmount<$totalDrAmountEntry) {
			$drCrStateIndecater=1;
		}
		else{
			$drCrStateIndecater=2;
		}
	}


		$entrys->balanceds=ABS($actualBalanced);
		$balancedUpdate->balanced=ABS($actualBalanced);
		$entrys->balanced_cr_dr=$drCrStateIndecater;
		$balancedUpdate->cr_dr=$drCrStateIndecater;


	}
		$entrys->save();
		$balancedUpdate->save();
		$entrys = Entries::paginate(8);




		return view('Admin.Entries.index')
		->with('entry', $entrys);
	}

	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 *
	 * @return mixed
	 */
	public function entryShow($id)
	{
		$entrys = (isset($id)) ? $this->entry->getById($id) : null;
		return view('Admin.Entries.show')->with('entrys', $entrys);
		
	}

	/**
	 * Delete a task
	 *
	 * @var integer $id
	 *
	 * @return mixed
	 */
	public function postDeleteTask($id)
	{
		$this->task->delete($id);

		return redirect()->route('task.index');
	}
	public function balanceds(){
		$ladger_id = Input::get('ladger_id');
		$balanced=balanced_ladger::where('ladger_id', '=' , $ladger_id)->get();
		return response()->json($balanced);

	}
}