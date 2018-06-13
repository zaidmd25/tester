<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserLoginController extends Controller
{
    // 
    use AuthenticatesUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
    	$this->middleware('guest',['except' => 'logout']);
    }
    public function getUserLogin()
    {
    	return view('userLogin');
    }

    public function userAuth(Request $request)
    {
    	$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = auth()->user();
            dd($user);
        }else{
            dd('your username and password are wrong.');            
        }
    }
}
