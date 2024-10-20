<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index() {
        return view("app.main", [
            "vertical" => Config::pluck("vertical")->last(),
            "horizontal" => Config::pluck("horizontal")->last()
        ]);
    }
}
