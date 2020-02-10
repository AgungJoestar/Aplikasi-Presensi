<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('admin/login');
    }

    public function postLogin(Request $request)
    {
    	if(!\Auth::attempt(['username'=>$request->username, 'password' => $request->password])){
    			return redirect()->back();

    	}
        
        return redirect()->route('home');
    }

    public function getRegister()
    {
    	return view('admin/register');
    }

     public function postRegister(Request $request)
    {
    	// $this->validate($request,[
    	// 	'name' => 'required|min:4',
    	// 	'username' => 'required|unique:users',
    	// 	'email' => 'required|email|unique:users',
    	// 	'password' =>'required|min:6|confirmed' 
    	// ]);

    	User::create([
    		'name'=>$request->name,
    		'username' =>$request->username,
    		'email'=>$request->email,
            'user_type'=>$request->user_type,
    		'password'=>bcrypt ($request->password)

    	]);

    	return redirect()->back();
    }

    public function logout()
    	{
    		\Auth::logout();

    		return redirect()->route('login');
    	}

        // if(!\Gate::allows('isSuper_admin')){
        //     abort(403,"Sorry, You can't access here");
        // }
    
}
