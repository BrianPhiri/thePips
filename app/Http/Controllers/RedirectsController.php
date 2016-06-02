<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class RedirectsController extends Controller
{
    public function redirectUser()
    {
    	// Get the logged in user role.
    	$role = Auth::user()->role;

    	// Determine if you are an administrator or a customer.
    	if($role == 'Customer')
    		return redirect('/');
    	else
    	{
    		return redirect('admin');
    	}
    }
}
