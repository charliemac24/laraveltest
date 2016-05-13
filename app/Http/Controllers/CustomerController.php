<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;

class CustomerController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data['customers'] = Customer::all();
        return view('customer',$data);
    }

    public function create(Request $request)
    {
    	$rules = array(
    		'name' => 'required'
    	);
    	$validator = Validator::make($request->all(), $rules);
    	if($validator->fails()){
    		$error['msg'] = $validator->messages();
    		return view('create_customer',$error);
    	}else{
    		$customer = new Customer;
	    	$customer->name = $request->input('name');	
	    	$customer->save();
	    	$error['msg'] = "";
	    	return view('create_customer',$error);
    	}
    	
    }

    public function edit($id,Request $request)
    {
    	
    	$data['customer'] = "";
    	$customer = Customer::find($id);
    	$data['id'] = $customer->id;
    	$data['name'] = $customer->name;

    	$rules = array(
    		'name' => 'required'
    	);
    	$validator = Validator::make($request->all(), $rules);
    	if($validator->fails()){
    		$data['msg'] = $validator->messages();
    		return view('edit_customer',$data);
    	}else{
	    	$customer->name = $request->input('name');	
	    	$customer->save();
			return redirect('/customer');
    	}

    	
    }

    public function delete($id)
    {
    	$customer = Customer::find($id);
    	$customer->delete();
    	return redirect('/customer');
    }
}
