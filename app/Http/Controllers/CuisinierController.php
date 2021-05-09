<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cuisinier;
use Auth;

class CuisinierController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function profile_cuisinier(){
    	$cuisinier=Cuisinier::find(Auth::user()->id);
        return view('profile_cuisinier',['cuisinier'=>$cuisinier]);
    }
}
