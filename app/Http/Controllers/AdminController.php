<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;
use App\User;


class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function profile_admin(){
    	$admin=Admin::find(Auth::user()->id);
        return view('profile_admin',['admin'=>$admin]);
    }

    public function updateProfile(Request $request){
       
       $request->validate([
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
        $admin = Admin::find(Auth::user()->id);
        $user = Auth::user();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->num = $request->num;
        $admin->email = $request->email; 
        $admin->date_of_birth = $request->date_of_birth;
        $admin->code_postal = $request->code_postal;
        $admin->adresse = $request->adresse;
        $user->num = $request->num;
        $user->email = $request->email; 
        $admin->save();
        $user->save();
       
        return Response()->json(['etat' => true,'admin'=> $admin]);
    }

   
}
