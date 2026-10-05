<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


     public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // return $request->all();
        // return 'sadasdsa';
        $request->validate([
            'email' => 'required|email|email:rfc,dns|regex:/^\S+@\S+\.\S+$/',
            'password' => 'required',
        ]);

        //$credentials = $request->only('email', 'password');
        //$credentials =Auth::attempt(["email" => $request->email,"password" =>$request->password,"is_active"=>1]);
        if (Auth::attempt(["email" => $request->email,"password" =>$request->password])) {
           
                Session::flash('success', "Welcome,You login successfully!");

            if(Auth::user()->role == 'admin')
            {
              return redirect()->route('dashboard');
            }
            elseif (Auth::user()->role == 'user') {
              return redirect()->route('user.dashboard');
            }
            elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.dashboard');
              }
              elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.dashboard');
              }
        }
        else
        {
            return redirect("login")->with('error', 'credentails are invalid');

        }

    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
    // Your custom logout logic here, if needed

    // Call the parent logout method to perform the default logout actions
    $this->guard()->logout();

    $request->session()->invalidate();

    // Redirect to your desired logout route or page
    return redirect('/login');
    }
    
}