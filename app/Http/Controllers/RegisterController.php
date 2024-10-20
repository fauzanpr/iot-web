<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view("register");
    }

    public function store(Request $request) {
        $request_validated = $request->validate([
            "username" => "required|unique:users",
            "email" => "required|unique:users|email",
            "password" => "required"
        ]);

        User::create($request_validated);
        return redirect("/login")->with("success", "Register account success, please login!");
    }
}
