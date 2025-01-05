<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SetupController;
use App\Jobs\MqttSubs;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["title" => "Blog Post", "posts" => Post::all()]);
});

Route::get('/login', [LoginController::class, "index"])->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::prefix("app")->group(function () {
    MqttSubs::dispatch();
    Route::get("/setup", [SetupController::class, "index"])->middleware("auth");
    Route::get("/history", [HistoryController::class, "index"])->middleware("auth");
});
Route::post("/app/setup/horizontal", [SetupController::class, "storeHorizontal"]);
Route::post("/app/setup/vertical", [SetupController::class, "storeVertical"]);