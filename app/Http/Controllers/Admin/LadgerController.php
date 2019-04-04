<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\LadgerRepository;
use App\Admin\balanced;
use App\Admin\Group;


class LadgerController extends Controller
{
    /**
	 * @var $task
	 */
	private $ladger;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(LadgerRepository $ladger) 
	{
		$this->ladger = $ladger;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function createLadger($id = null)
	{
		$ladger = $this->ladger->getAll();
		$group=Group::all();
		$editGroup = (isset($id)) ? $this->ladger->getById($id) : null;

		return view('Admin.Ladger.create')->with('group', $group);
	}
	public function getAccountGroup($id = null)
	{
		$group = $this->group->getAll();
		$editGroup = (isset($id)) ? $this->group->getById($id) : null;

		return view('Admin.Account.index',  compact('editGroup', 'editGroups'));
	}

	public function editLadger($id = null)
	{
		$group = $this->ladger->getAll();
		$editLadger = (isset($id)) ? $this->ladger->getById($id) : null;

		return view('Admin.Ladger.edit')
		->with('editLadger', $editLadger);
	}

	/**
	 * Store a task
	 *
	 * @var array $attributes
	 *
	 * @return mixed
	 */
	public function storeLadger(Request $request)
	{
		$attributes = $request->only(['group','name','code','opBalanceDc','opBalance','note']);
		$this->ladger->create($attributes);
		$group=Group::all();
		$ladger = $this->ladger->getAll();

		return view ('Admin.Account.index')
		->with('ladger', $ladger)
		->with('group', $group);
	}

	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 *
	 * @return mixed
	 */
	public function UpdateLadger($id, Request $request)
	{
		$attributes = $request->only(['group','name','code','opBalanceDc','opBalance','note']);
		$this->ladger->update($id, $attributes);
		$group=Group::all();
		$ladger = $this->ladger->getAll();
		return view ('Admin.Account.index')
		->with('ladger', $ladger)
		->with('group', $group);
	}

	/**
	 * Delete a task
	 *
	 * @var integer $id
	 *
	 * @return mixed
	 */
	public function DeleteLadger($id)
	{
		$this->ladger->delete($id);

		$group=Group::all();
		$ladger = $this->ladger->getAll();
		return view ('Admin.Account.index')
		->with('ladger', $ladger)
		->with('group', $group);
	}
}
