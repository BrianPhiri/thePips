<?php 
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{
    /**
     * Create a new sessions controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the login page.
     *
     * @return \Response
     */
    public function login()
    {
        return view('homepage.loginauth');
    }

    /**
     * Perform the login.
     *
     * @param  Request  $request
     * @return \Redirect
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'password' => 'required']);

        if ($this->signIn($request)) {
            $request->session()->flash('message', 'Welcome Back!');

            return redirect()->intended('home');
        }

        $request->session()->flash('message', 'Sorry! Could not sign you in.');

        return redirect()->back();
    }

    /**
     * Destroy the user's current session.
     *
     * @return \Redirect
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flash('message','You have now been signed out. See ya.');

        return redirect('/');
    }

    /**
     * Attempt to sign in the user.
     *
     * @param  Request $request
     * @return boolean
     */
    protected function signIn(Request $request)
    {
        return Auth::attempt($this->getCredentials($request), $request->has('remember'));
    }

    /**
     * Get the login credentials and requirements.
     *
     * @param  Request $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
            'verified' => true
        ];
    }
}
