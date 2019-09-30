<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logon(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return 'Password Salah';
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function baseLogin()
    {
        $rolenya = Auth()->user()->role;
        if ($rolenya=='admin') {
            return view('disper.index');    
        }else if ($rolenya=='wirausahawan') {
            return view('include.wirausaha');    
        }else if ($rolenya=='disper') {
            return view('include.disper');    
        }
        
    }
}
