<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create() {
		return view('login-form');
	}
	
	public function store(Request $request): RedirectResponse{
		$credentials = $request->validate([
			'email'=> 'required|email',
			'password'=> 'required',
		]);
		
		if (Auth::attempt($credentials)) {
			return redirect("/dashboard")->with('success', 'Login successful');
		}
		
		return back()->withErrors(['email' => 'Invalid credentials. Check the email adress and password entered.']);
	}
	
}
	
