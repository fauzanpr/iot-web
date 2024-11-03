<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    function index() {
        return Config::all()->last();
    }
}
