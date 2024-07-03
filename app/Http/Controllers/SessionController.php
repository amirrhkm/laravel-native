<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view("auth.login");
    }

    public function store() {
        $attr = request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

        if(!Auth::attempt($attr)) {
            throw ValidationException::withMessages([
                'email'=>'Invalid email or password. Please try again.',
                'password'=>'Invalid email or password. Please try again.'
            ]);
        }

        request()->session()->regenerate();
        
        return redirect('/product');
    }
    public function destroy() {
        Auth::logout();
        return redirect("/");
    }
}
