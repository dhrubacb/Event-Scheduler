<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Hash;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }






public function login(){
    
        return view('login');
}


/**********************  Login System *********************/    
    
    public function doLogin(Request $request)
    {
        $rules = array
        (
                    'email'    => 'required',
                    'password' => 'required'
        );

        $allInput = $request->all();
        $validation = Validator::make($allInput, $rules);

        // dd($allInput);


        if ($validation->fails())
        {

            return redirect()->route('login')
                        ->withInput()
                        ->withErrors($validation);
        } else
        {

            $credentials = array
            (
                        'email'    => $allInput['email'],
                        'password' => $allInput['password']
            );
            // return $credentials;
            if (Auth::attempt($credentials))
            {
                
                //return redirect()->route('userhome')->with('email' , $allInput['email']);

        
               
                

               // return view('project.userhome');

                return "success";

            } else
            {
                return redirect()->route('login')
                            ->withInput()
                            ->withErrors('Error in Email Address or Password.');
            }
        }
        return 'Do Login Executes';
    }
    
    
    

    public function logout(Request $request ){

        Auth::logout();

        $request->session()->flush();

        return redirect()->route('login')
                   ->with('success',"You are successfully logged out.");
        // return 'Logout Panel';
    }


 /************************** Register System ***************************/

}
