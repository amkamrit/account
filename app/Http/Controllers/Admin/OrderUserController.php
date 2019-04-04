<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderUserRepository;
use App\Admin\Order;

class OrderUserController extends Controller
{
    /**
	 * @var $task
	 */
	private $orderUser;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(OrderUserRepository $orderUser) 
	{
		$this->orderUser = $orderUser;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function getAllOrderUser($id = null)
	{
		$orderUser = $this->orderUser->getAll();

		return view('Admin.OrderUser.index', compact('orderUser', 'orderUser'));
	}
	public function createOrderOrder(){
		return view('Admin.OrderUser.create');
	}
	/**
	 * Store a task
	 *
	 * @var array $attributes
	 *
	 * @return mixed
	 */
	public function StoreOrderUser(Request $request)
	{
		$attributes = $request->only(['name','address','phone']);
		$this->orderUser->create($attributes);

		$orderUser = $this->orderUser->getAll();

		return view('Admin.OrderUser.index', compact('orderUser', 'orderUser'));
	}

	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 *
	 * @return mixed
	 */
	public function OrderUserShow($id)
	{
		$orders =Order::where('order_user_id','=',$id)->get();

		return view('Admin.OrderUser.show', compact('orders', 'orders'));
	}

	/**
	 * Delete a task
	 *
	 * @var integer $id
	 *
	 * @return mixed
	 */
	public function DeleteOrderUser($id)
	{
		$this->orderUser->delete($id);

		$orderUser = $this->orderUser->getAll();

		return view('Admin.OrderUser.index', compact('orderUser', 'orderUser'));
	}
}