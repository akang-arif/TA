<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login($value='')
    {
    	return view('auths/login');
    }

    public function home()
    {
        return view('auths/home');
    }

    public function tkj()
    {
        return view('auths/tkj');
    }

    public function mm()
    {
        return view('auths/mm');
    }

    public function profile()
    {
        return view('auths/profile');
    }
    
    public function profile2()
    {
        return view('auths/profile2');
    }

    public function postlogin(Request $request)
    {
    //    $i = [];
        if(Auth::attempt($request ->only('email','password')))	
   	 	{
            // if($request->session()->get('email'))
            // {
            //     $i = $request->session()->get('email');
            // }
            
    		return redirect('dashboard');
        }
        // return $i;
    	return redirect('home');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('login');
    }
}
