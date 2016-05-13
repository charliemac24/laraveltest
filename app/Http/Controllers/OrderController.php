<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Customer;
use App\Http\Requests;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function add_order($id,Request $request)
    {
    	$data = array();
    	$customer = Customer::find($id);
    	$data['id'] = $customer->id;
    	$data['name'] = $customer->name;
    	$data['orders'] = $customer->orders;
    	$order_name = $request->input('name');
    	if(!empty($order_name)){
    		$order = new Order;
	    	$order->customer_id = $request->input('customer_id');
	    	$order->name = $request->input('name');
	    	$order->save();
	    	return redirect('/order/add_order/'.$request->input('customer_id'));
    	}
    	return view('create_order',$data);
    }


    public function delete($id,$customer_id)
    {
    	$order = Order::find($id);
    	$order->delete();
    	return redirect('/order/add_order/'.$customer_id);
    }

}
