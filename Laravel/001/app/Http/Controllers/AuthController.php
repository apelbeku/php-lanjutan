<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AuthController extends Controller
{
    function __construct()
    {
        $this->middleware('guest')->only(['login', 'register', 'loginProcess', 'registrationProcess']);
        $this->middleware('auth')->only(['logout']);
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function register()
    {
    	return view('auth.register');
    }

    public function registrationProcess(Request $request)
    {
    	$encryptPassword = bcrypt($request->password);

    	$request->merge([
    		'password' => $encryptPassword,
    	]);

    	User::create($request->all());

    	return redirect('/login');
    }

    public function loginProcess(Request $request)
    {
    	$credentials = $request->only('email', 'password');

    	$isloginSucess = Auth::attempt($credentials);

    	if ($isloginSucess) {
    		return redirect()->intended('/');
    	}else{
    		return redirect()->back();
    	}
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/login');
    }
}
