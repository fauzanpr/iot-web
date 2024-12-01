<?php

namespace App\Http\Controllers;

use App\Console\Commands\MqttListener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("login");
    }

    public function authenticate(Request $request) {
        $credential = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended("/app/setup");
        };

        return back()->with("loginError", "Login Failed, please try again!");
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/login");
    }
}
