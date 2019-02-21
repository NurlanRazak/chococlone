<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/user/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

  public function register(Request $request)
    {
        try{
        $this->validator($request->all())->validate();
            }
            catch(Exception $e) {
                dd("something gone wrong");
            }
     //   event(new Registered($user = $this->create($request->all())));

      //  
            $email = $request->input('email');
            $password = $request->input('password');
            $isAuth = $request->has('remember') ? true : false; 
            $objUser = $this->create(['email' => $email, 'password' => $password]);
            if(!($objUser instanceof User)){
        //throw new \Exception("Can't create object");
        return back()->with('error', "Can't create object");
    }
            if($isAuth){
                $this->guard()->login($objUser);
            }
        return redirect(route('account'))->with('success', "you registered successfully"); 
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
