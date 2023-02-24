<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;



class AgentController extends Controller
{
    // List of agents
    public function agents(){

        $agents = Agent::all();

        return view('agents.agents')->with('agents', $agents);
    }    
    
    // Add new agent form
    public function add_agent(){
        return view('agents.add_agent');
    }    

    // Save new agent
    public function save_agent(Request $request){

        $request->validate([
            'agent_code' => 'required|unique:agents',
            'agent_name' => 'required',
            'working_area' => 'required',
            'commission' => 'required',
            'phone_no' => 'required',
            'country' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            'agent_license' => 'required|mimes:pdf|max:2048',
        ]);

        $agent = new Agent;

        $agent->agent_code = $request->agent_code;
        $agent->agent_name = $request->agent_name;
        $agent->working_area = $request->working_area;
        $agent->commission = $request->commission;
        $agent->phone_no = $request->phone_no;
        $agent->country = $request->country;

        $image_url = $request->file('photo')->store('files', 'public');
        $image_url = str_replace("/storage/","public/", $image_url);
        $agent->agent_photo = $image_url;
        
        $image_url = $request->file('agent_license')->store('files', 'public');
        $image_url = str_replace("/storage/","public/", $image_url);
        $agent->agent_license = $image_url;

        $agent->save();
        
        return redirect('/agents')->with('status', 'New aggent added successfully.');
    }

    
    // Edit agent form
    public function edit_agent($id){
        $agent = Agent::find($id);
        return view('agents.edit_agent')->with('agent', $agent);
    } 

    
    // Update agent
    public function update_agent(Request $request, $id){

        $request->validate([
            'agent_code' => 'required',
            'agent_name' => 'required',
            'working_area' => 'required',
            'commission' => 'required',
            'phone_no' => 'required',
            'country' => 'required',
        ]);

        $agent = Agent::find($id);
        // $agent->agent_code = $request->agent_code;
        $agent->agent_name = $request->agent_name;
        $agent->working_area = $request->working_area;
        $agent->commission = $request->commission;
        $agent->phone_no = $request->phone_no;
        $agent->country = $request->country;

        if(!(is_null($request->file('photo')))){
            $image_url = $request->file('photo')->store('files', 'public');
            $image_url = str_replace("/storage/","public/", $image_url);
            $agent->agent_photo = $image_url;
        }

        if(!(is_null($request->file('photo')))){
            $image_url = $request->file('agent_license')->store('files', 'public');
            $image_url = str_replace("/storage/","public/", $image_url);
            $agent->agent_license = $image_url;
        }

        $agent->update();


        return redirect('/agents')->with('status', 'Agent updates successfully.');
    }


    // View agent 
    public function view_agent($id){

        // Get agent
        $agent = Agent::find($id);
        $customers = Customer::where('agent_id','=',$id)->get();

        return view('agents.view_agent')
                    ->with('agent', $agent)
                    ->with('customers', $customers);
    } 

    // Delete agent 
    public function delete_agent($id){

        // Delete agent
        $agent = Agent::find($id);
        $agent->forceDelete();

        // Get all agents for listing
        $agents = Agent::all();

        return view('agents.agents')->with('agents', $agents);
    } 

} 
