<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function authentic()
			{ 	$cred = new admin;
				$usrname = $request->input('usrname'); 
				$passwrd = $request->input('passwd'); 
			    $admin_data = $cred::where('adminpassword','=',$passwrd)->where('adminUsername','=',$usrname)->get();
				return view('agents')->with('agent_data',$admin_data);
			} 
}
