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


class OrderController extends Controller
{
    // List of orders
    public function orders(){

        $orders = Order::all();

        return view('orders.orders')->with('orders', $orders);
    }   
    
    // Add new order form
    public function add_order(){

        $customers = Customer::all();

        return view('orders.add_order')->with('customers', $customers);
    }  
    
    // Save new order
    public function save_order(Request $request){

        $request->validate([
            'ord_num' => 'required|unique:orders',
            'ord_amount' => 'required',
            'advance_amount' => 'required',
            'ord_description' => 'required',
            'customer_id' => 'required'
        ]);

        $order = new Order;

        $order->ord_num = $request->ord_num;
        $order->ord_amount = $request->ord_amount;
        $order->advance_amount = $request->advance_amount;
        $order->ord_description = $request->ord_description;
        $order->customer_id = $request->customer_id;

        $order->save();
        
        return redirect('/orders')->with('status', 'Order added successfully.');
    }

    // Edit order form
    public function edit_order($id){
        $order = Order::find($id);
        $customers = Customer::all();
        return view('orders.edit_order')
                ->with('order', $order)
                ->with('customers', $customers);
    } 

   // Update order
   public function update_order(Request $request, $id){

        $request->validate([
            'ord_num' => 'required',
            'ord_amount' => 'required',
            'advance_amount' => 'required',
            'ord_description' => 'required',
            'customer_id' => 'required'
        ]);

        $order = Order::find($id);

        $order->ord_num = $request->ord_num;
        $order->ord_amount = $request->ord_amount;
        $order->advance_amount = $request->advance_amount;
        $order->ord_description = $request->ord_description;
        $order->customer_id = $request->customer_id;

        $order->save();
        
        return redirect('/orders')->with('status', 'Order updated successfully.');
    }

    // View Order 
    public function view_order($id){

        // Get order
        $order = Order::find($id);

        return view('orders.view_order')
                    ->with('order', $order);
    } 

    // Delete order 
    public function delete_order($id){

        // Delete order
        $order = Order::find($id);
        $order->forceDelete();

        // Get all agents for listing
        $orders = Order::all();

        return view('orders.orders')->with('orders', $orders);
    } 


}
