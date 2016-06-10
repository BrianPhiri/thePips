<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class RedirectsController extends Controller
{
    public function redirectUser(Request $request)
    {
    	// Get the logged in user role.
    	$role = Auth::user()->role;
		$name = Auth::user()->name;

    	// Determine if you are an administrator or a customer.
    	if($role == 'Customer')
		{
			$request->session()->flash('message','Welcome back! '.$name);
			return redirect()->intended('/');
		}
    	else
    	{
    		return redirect()->intended('admin');
    	}
    }
}
