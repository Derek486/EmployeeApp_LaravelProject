<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index_login() {

        return view('auth.login');

    }

    public function authenticate(Request $request) {

        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {

            return redirect()->route('employees.index');

        }

        return redirect()->route('login')->with('error','Invalid credentials');
    }

    public function logout() {

        auth()->logout();

        return redirect()->route('login');
    }

    public function index_register() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user = User::create([
            'name' => $request->input('email'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        auth()->login($user);

        return redirect()->route('employees.index');
    }
}
