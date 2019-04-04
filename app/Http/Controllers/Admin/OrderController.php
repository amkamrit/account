<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Admin\Order;
use Image;
use App\Admin\OrderUser;

class OrderController extends Controller
{
    /**
	 * @var $task
	 */
	private $order;

	/**
	 * TaskController constructor.
	 *
	 * @param App\Repositories\TaskRepository $task
	 */
	public function __construct(OrderRepository $order) 
	{
		$this->order = $order;
	}

	/**
	 * Get all tasks.
	 *
	 * @return Illuminate\View
	 */
	public function getAllOrder($id = null)
	{
		$order = $this->order->getAll();
		$orderUser=OrderUser::all();

		return view('Admin.Order.index')
		->with('orders',$order)
		->with('orderUser',$orderUser);
	}
	public function createOrder($id = null)
	{
	    $orderUser=OrderUser::all();

		return view('Admin.Order.create')->with('orderUser',$orderUser);
	}

	/**
	 * Store a task
	 *
	 * @var array $attributes
	 *
	 * @return mixed
	 */
	public function orderStore(Request $request)
	{
		$order= new Order;

		$order->particular=$request->particular;
		$order->qty=$request->qty;
		$order->weight=$request->weight;
		$order->rate=$request->rate;
		
		$order->status=$request->status;
		$order->delivary_date=$request->delivary_date;
		$order->order_user_id=$request->order_user_id;

		$amount1=$request->qty*$request->rate;
		$amount2=$request->weight*$request->rate;
		$amount=ABS($amount1+$amount2);

		$order->amount=$amount;

		if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('ImageOrder/' .$file_name);
            Image::make($file)->resize(800, 800)->save($location);
            $order->image=$file_name;
        }
        $order->save();
        $order = $this->order->getAll();
        $orderUser=OrderUser::all();

		return view('Admin.Order.index')
		->with('orders',$order)
		->with('orderUser',$orderUser);
	}
	public function UpdateOrder(Request $request, $id)
	{
		$order=Order::find($id);

		$order->particular=$request->input('particular');
		$order->qty=$request->input('qty');
		$order->weight=$request->input('weight');
		$order->rate=$request->input('rate');
		$order->amount=$request->input('amount');
		$order->status=$request->input('status');
		$order->delivary_date=$request->input('delivary_date');
		$order->order_user_id=$request->input('order_user_id');

		
		if ($request->hasFile('image')) {

            $file=$request->file('image');
            $file_name=time().'.'. $file->getClientOriginalExtension();
            $location=('ImageOrder/' .$file_name);
            Image::make($file)->resize(800, 800)->save($location);
            $order->image=$file_name;
        }
        $order->save();
        $order = $this->order->getAll();
        $orderUser=OrderUser::all();

		return view('Admin.Order.index')
		->with('orders',$order)
		->with('orderUser',$orderUser);
	}


	/**
	 * Update a task
	 *
	 * @var integer $id
	 * @var array 	$attributes
	 *
	 * @return mixed
	 */
	public function orderShow($id)
	{
		$order = (isset($id)) ? $this->order->getById($id) : null;

		return view('Admin.Order.show')->with('orders',$order);
	}
		public function editOrder($id)
	{
	     $orderUser=OrderUser::all();
		$order = (isset($id)) ? $this->order->getById($id) : null;

		return view('Admin.Order.edit')
		->with('orders',$order)
		->with('orderUser', $orderUser);
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
	public function printOrder(){
		$id=1;
		$order = (isset($id)) ? $this->order->getById($id) : null;

		return view('Admin.Order.printer')->with('orders',$order);
	}

}
