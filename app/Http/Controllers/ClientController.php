<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create() {
		return view('client-form');
	}
	
	public function send(Request $request):RedirectResponse{
		$validated= $request->validate([
			'name'=> 'required|string|max:100',
			'email'=> 'required|email',
			'telephone'=> 'required|string|max:20',
			'address'=> 'required|string',
			'company_logo'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);
		
		if ($request->hasFile('company_logo')) {
			$validated['company_logo'] = $request->file('company_logo')->store('logos','public');
		}
		
		try {
			Client::create($validated);
		
			return redirect('/dashboard')->with('success', 'Client added successfully');
		} catch (\Exception $e) {
			
			return redirect()->back()->withInput()->withErrors(['error'=> 'Failed to add the client. Please try again.']);
		}
}
