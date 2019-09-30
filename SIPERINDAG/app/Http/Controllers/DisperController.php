<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisperController extends Controller
{
    public function index()
    {
    	return view('disper.index');
    }
    public function create(Request $request)
    {

    	$user = new \App\User;
    	$user->id = mt_rand(10000,19999);
    	$user->role = 'disper';
    	$whs = \App\Disper::create([
    		'id' => mt_rand(10000,19999),
    		'user_id' => $user->id,
    		'nip' => $request->nip,
    		'nama' => $request->nama_lengkap,
    		'alamat' => $request->alamat,
    	]);
    	$user->name = $request->nama_lengkap;
    	$user->email = $request->email;
    	$user->password = bcrypt('secret');

    	$user->save();
	
    	return redirect()->back()->with('sukses','berhasil menambah data disper');
    }
}
