<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Cuisinier;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function redirectTo(){
        return RouteServiceProvider::CUISINIER;
    } 

    protected function validator(array $data)
    {
        if($data['compte'] == 1 ){
                return Validator::make($data, [
                    'firstName' => ['required', 'string', 'max:30'],
                    'lastName' => ['required', 'string', 'max:30'],
                    'Date' => ['date'],
                    'codePostal' => ['required','integer'],
                    'adresse' => ['required','string','max:100'],
                    'num' => ['required', 'string','regex:/0[5-7][0-9]+/',"min:10","max:10"],
                    'email' => ['required', 'string', 'email', 'max:255','unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'compte' => ['required'],
                    
                ]);
       
     
        }     
       
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['compte'] == 1){
                $objet_user = User::create([
                    'num' => $data['num'],
                    'email' => $data['email'],
                    'type_compte' => 'c',
                    'password' => Hash::make($data['password']),
                ]);
                Cuisinier::create([
                        'first_name' => $data['firstName'],
                        'user_id' => $objet_user->id,
                        'last_name' => $data['lastName'],
                        'email' => $data['email'],
                        'num' => $data['num'],
                        'date_of_birth' => $data['Date'],
                        'code_postal' => $data['codePostal'],
                        'adresse' => $data['adresse']

                    ]);
                   
                return $objet_user;
       }

        
    
    }

    public function showRegistrationForm()
    {
       return view('auth.register');
    }
}
