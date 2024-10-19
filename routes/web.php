<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register", ["yak" => "akwaokwoakw"]);
});

Route::prefix("app")->group(function () {
    Route::get("/setup", function () {
        return view("app.main");
    });
    Route::get("/history", function () {
        return view("app.history");
    });
});