<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CustomerController extends Controller
{
    // List of customers
    public function customers(){

        $customers = Customer::all();

        return view('customers.customers')->with('customers', $customers);
    }    

    // Add new customer form
    public function add_customer(){
        $agents = Agent::all();
        return view('customers.add_customer')->with('agents', $agents);
    }   
    
    // Save new customer
    public function save_customer(Request $request){

        $request->validate([
            'cust_code' => 'required|unique:customers',
            'cust_name' => 'required',
            'cust_city' => 'required',
            'cust_city' => 'required',
            'cust_country' => 'required',
            'grade' => 'required',
            'opening_amt' => 'required',
            'receive_amt' => 'required',
            'payment_amt' => 'required',
            'outstanding_amt' => 'required',
            'phone_no' => 'required',
            'agent_id' => 'required',
            'cust_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);

        $customer = new Customer;

        $customer->cust_code = $request->cust_code;
        $customer->cust_name = $request->cust_name;
        $customer->cust_city = $request->cust_city;
        $customer->working_area = $request->working_area;
        $customer->cust_country = $request->cust_country;
        $customer->grade = $request->grade;
        $customer->opening_amt = $request->opening_amt;
        $customer->receive_amt = $request->receive_amt;
        $customer->payment_amt = $request->payment_amt;
        $customer->outstanding_amt = $request->outstanding_amt;
        $customer->phone_no = $request->phone_no;
        
        $image_url = $request->file('cust_photo')->store('files', 'public');
        $image_url = str_replace("/storage/","public/", $image_url);
        $customer->cust_photo = $image_url;
        
        $customer->agent_id = $request->agent_id;
        $customer->save();

        return redirect('/customers')->with('status', 'Customer added successfully.');
    }

    // Edit customer form
    public function edit_customer($id){
        $customer = Customer::find($id);
        $agents = Agent::all();
        return view('customers.edit_customer')
                ->with('customer', $customer)
                ->with('agents', $agents);
    } 

    // Update customer
    public function update_customer(Request $request, $id){

        $request->validate([
            'cust_code' => 'required',
            'cust_name' => 'required',
            'cust_city' => 'required',
            'cust_city' => 'required',
            'cust_country' => 'required',
            'grade' => 'required',
            'opening_amt' => 'required',
            'receive_amt' => 'required',
            'payment_amt' => 'required',
            'outstanding_amt' => 'required',
            'phone_no' => 'required',
            'agent_id' => 'required',
        ]);

        $customer = Customer::find($id);

        $customer->cust_code = $request->cust_code;
        $customer->cust_name = $request->cust_name;
        $customer->cust_city = $request->cust_city;
        $customer->working_area = $request->working_area;
        $customer->cust_country = $request->cust_country;
        $customer->grade = $request->grade;
        $customer->opening_amt = $request->opening_amt;
        $customer->receive_amt = $request->receive_amt;
        $customer->payment_amt = $request->payment_amt;
        $customer->outstanding_amt = $request->outstanding_amt;
        $customer->phone_no = $request->phone_no;

        
        if(!(is_null($request->file('cust_photo')))){
            $image_url = $request->file('cust_photo')->store('files', 'public');
            $image_url = str_replace("/storage/","public/", $image_url);
            $customer->cust_photo = $image_url;
        }

        
        $customer->agent_id = $request->agent_id;
        $customer->save();

        return redirect('/customers')->with('status', 'Customer updates successfully.');
    }

    // View customer 
    public function view_customer($id){

        // Get customer
        $customer = Customer::find($id);
        $orders = Order::where('customer_id','=',$id)->get();

        return view('customers.view_customer')
                    ->with('customer', $customer)
                    ->with('orders', $orders);
    } 

    // Delete customer 
    public function delete_customer($id){

        // Delete customer
        $customer = Customer::find($id);
        $customer->forceDelete();

        // Get all agents for listing
        $customers = Customer::all();

        return view('customers.customers')->with('customers', $customers);
    } 


}
