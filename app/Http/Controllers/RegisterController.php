<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
  public function view()
  {
      return view('auth.register', [
          'title' => 'Register',
      ]);
  }

  public function storeAcc(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'username' => 'required|min:6|unique:users',
      'email' => 'required|email:dns|unique:users',
      'password' => 'required|min:6|max:255'
    ]);

    User::create($validatedData);

    return redirect('/auth/login')->with('registerSuccess', 'Registration Successfully!');
  }
}
