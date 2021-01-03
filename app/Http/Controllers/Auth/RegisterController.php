<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

      //Validate
      $this->validate($request, [
          'name'=> 'required',
          'username'=> 'required',
          'email'=> 'required|email',
          'password'=> 'required|confirmed',
      ]);

      //Store the user into the database using the user model
      User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);

      //Sign the user in
      /*Auth::attempt([
          'email' => $request->email,
          'password' => $request->password,
          ]);
          */

      //redirect
      return redirect()->route('dashboard');
    }
}
