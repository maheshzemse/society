<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:watchman')->except('logout');

        $this->middleware('guest:superadmin')->except('logout');
        $this->middleware('guest:secretary')->except('logout');
        $this->middleware('guest:treasurer')->except('logout');
    }






    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showWatchmanLoginForm()
    {
        return view('auth.login', ['url' => 'watchman']);
    }

    public function watchmanLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('watchman')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/watchman');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    //for superadmin
    public function showSuperadminLoginForm()
    {
        return view('auth.login', ['url' => 'superadmin']);
    }

    public function superadminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/superadmin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    //for secretary
    public function showSecretaryLoginForm()
    {
        return view('auth.login', ['url' => 'secretary']);
    }

    public function secretaryLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('secretary')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/secretary');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    //for treasurer
    public function showTreasurerLoginForm()
    {
        return view('auth.login', ['url' => 'treasurer']);
    }

    public function treasurerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('treasurer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/treasurer');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
