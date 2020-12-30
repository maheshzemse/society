<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Watchman;

use App\Models\Superadmin;
use App\Models\Secretary;
use App\Models\Treasurer;
use App\Models\Society;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:watchman');

        $this->middleware('guest:superadmin');
        $this->middleware('guest:secretary');
        $this->middleware('guest:treasurer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

 public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showWatchmanRegisterForm()
    {
        return view('auth.register', ['url' => 'watchman']);
    }

    public function showSuperadminRegisterForm()
    {
        return view('auth.register', ['url' => 'superadmin']);
    }

    public function showSecretaryRegisterForm()
    {
        return view('auth.register', ['url' => 'secretary']);
    }

    public function showTreasurerRegisterForm()
    {
        return view('auth.register', ['url' => 'treasurer']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   




    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'society_id' => ['required', 'string', 'max:255','exists:society_master'],



            'name' => ['required', 'string', 'max:255'],
            'flat_no' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
            'contact_no' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        // if (Society::where('society_id',  $data->society_id)->get()) {
       
            return User::create([
        
 
            'name' => $data['name'],
             'society_id'=> $data['society_id'],
            'flat_no' => $data['flat_no'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'contact_no' => $data['contact_no'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        
            ]);
        
        


            
        
    
    }

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'society_id' => $request->society_id,
            'flat_no' => $request->flat_no,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/admin');
    }

    protected function createWatchman(Request $request)
    {
        $this->validator($request->all())->validate();
        Watchman::create([
            'name' => $request->name,
            'society_id' => $request->society_id,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/watchman');
    }

    protected function createSuperadmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Superadmin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/superadmin');
    }

    protected function createSecretary(Request $request)
    {
        $this->validator($request->all())->validate();
        Secretary::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/secretary');
    }

    protected function createTreasurer(Request $request)
    {
        $this->validator($request->all())->validate();
        Treasurer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/treasurer');
    }







    public function match_society(Request $request)
    {
     // return $request->all();

     $data= Society::where('society_id',$request->society_id)->get()->first();

            
        if($data)
        {
         // return "valid data";
         return redirect('/register');

        }

        else
        {
         return "invalid data";
        }

        

     }







}







