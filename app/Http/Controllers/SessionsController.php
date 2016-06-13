<?php namespace App\Http\Controllers;
/**
 * This Controller uses the username and password to log the administrator into the system.
 */
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SessionsController extends Controller
{
    /**
     * Create a new sessions controller instance.
     */
    public function __construct()
    {
    	// Expect logout means that an authenticated user can only access the logout method in this controller
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Show the login page.
     *
     * @return \Response
     */
    public function showLoginForm()
    {
        return view('admin/auth.login');
    }

    /**
     * Perform the login.
     *
     * @param  Request  $request
     * @return \Redirect
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'password' => 'required']);

        if ($this->signIn($request)) {
            $request->session()->flash('message','Welcome back '.Auth::user()->name);

            return redirect()->intended('admin');
        }

        $request->session()->flash('message','Sorry. Could not sign you in. Invalid credentials');

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

        return redirect('admin/login');
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
            'name'    => $request->input('name'),
            'password' => $request->input('password')
        ];
    }
}
