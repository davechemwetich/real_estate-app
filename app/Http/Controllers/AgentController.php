<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //Dashboard Function 
    public function AgentDashboard (){
        return view("agent.agent_dashboard");
    }
}
