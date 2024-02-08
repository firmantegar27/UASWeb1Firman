<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterAdminController extends Controller
{
    public function index(){
        return view('admin.register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => ['required','email','unique:admins'],
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Admin::create($validatedData);

        return redirect('/admin')->with('success', 'Register was successful!');
    }
}
