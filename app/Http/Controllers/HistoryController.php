<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        return view("app.history", [
            "configs" => Config::all()->sortByDesc("created_at")
        ]);
    }
}
