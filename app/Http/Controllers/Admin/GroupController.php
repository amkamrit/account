<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\AdminRepository;
use App\Admin\Ladger;

class GroupController extends Controller
{
    /**
	 * @var $task
	 */
	private $group;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(AdminRepository $group) 
	{
		$this->group = $group;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function getAllGroup($id = null)
	{
		$group = $this->group->getAll();
		$editGroup = (isset($id)) ? $this->group->getById($id) : null;

		return view('Admin.Group.create');
	}
	public function getAccountGroup($id = null)
	{
		$group = $this->group->getAll();
		$Ladger=Ladger::all();
		$editGroup = (isset($id)) ? $this->group->getById($id) : null;

		return view('Admin.Account.index',  compact('editGroup', 'editGroups'));
	}

	public function getOnceGroup($id = null)
	{
		$group = $this->group->getAll();
		$editGroup = (isset($id)) ? $this->group->getById($id) : null;

		return view('Admin.Group.edit')
		->with('editGroup' ,$editGroup);
	}

	/**
	 * Store a task
	 *
	 * @var array $attributes
	 *
	 * @return mixed
	 */
	public function StoreGroup(Request $request)
	{
		$attributes = $request->only(['parent_group','name','code']);
		$this->group->create($attributes);
		$ladger=Ladger::all();
		$group = $this->group->getAll();

		return view ('Admin.Account.index')
		->with('group', $group)
		->with('ladger', $ladger);
	}

	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 *
	 * @return mixed
	 */
	public function UpdateGroup($id, Request $request)
	{
		$attributes = $request->only(['parent_group','name','code']);
		$this->group->update($id, $attributes);
		$ladger=Ladger::all();
		$group = $this->group->getAll();
		return view ('Admin.Account.index')
		->with('group', $group)
		->with('ladger', $ladger);
	}

	public function showGroup($id)
	{
		$ladgers=Ladger::where('group',$id)->paginate(8);;
		return view('Admin.Group.show')->with('ladger', $ladgers);
	}

	/**
	 * Delete a task
	 *
	 * @var integer $id
	 *
	 * @return mixed
	 */
	public function DeleteGroup($id)
	{
		$this->group->delete($id);

		$ladger=Ladger::all();
		$group = $this->group->getAll();
		return view ('Admin.Account.index')
		->with('group', $group)
		->with('ladger', $ladger);
	}
}