<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SetupController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["title" => "Blog Post", "posts" => Post::all()]);
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', [RegisterController::class, "index"]);
Route::post("/register", [RegisterController::class, "store"]);

Route::prefix("app")->group(function () {
    Route::get("/setup", [SetupController::class, "index"]);
    Route::get("/history", [HistoryController::class, "index"]);
});