<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;

class RegistrationController extends Controller
{
    /**
     * Create a new registration instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the register page.
     *
     * @return \Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Perform the registration.
     *
     * @param  Request   $request
     * @param  AppMailer $mailer
     * @return \Redirect
     */
    public function postRegister(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create($request->all());

        $mailer->sendEmailConfirmationTo($user);

        $request->session()->flash('message','Please confirm your email address.');

        return redirect()->back();
    }

    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
   public function confirmEmail(Request $request, $token)
    {
        // return Auth::user()->name;
        
        $user = User::All()->first();
        $token = $user['token'];
        /*
        The if statement is to prevent the reuse of the confirmation link.
        */
        if ($token != null)
        {
            Auth::login($user);
            
            User::whereToken($token)->firstOrFail()->confirmEmail();

            $request->session()->flash('message','You are now confirmed. Please login.');
            
            return redirect()->intended('/');
        }
        else
        {
            return "Page does not exist";
        }
        
    }
}
