<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register() {
        return view('auth/register');
    }

    public function registerSave(Request $request) {

        Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'mot_de_passe' => 'required'
        ])->validate();

        User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
            'role' => "0"
        ]);

        return redirect()->route('login');
    }

    public function login() {

        return view('auth/login');
    }

    public function loginAction(Request $request) {

        Validator::make($request->all(), [
            'email' => 'required|email',
            'mot_de_passe' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'mot_de_passe'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('home');
    }
}
