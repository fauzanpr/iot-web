<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use PhpMqtt\Client\Facades\MQTT;

class Coba extends Controller
{
    function index() {
        $tests = "Halo dunia";
        $mqtt = MQTT::connection();
        $mqtt->subscribe("x_web_fauzan_pradana_oye", function($topic, $message) {
            DB::table('config')->insert([
                "horizontal" => $message,
                "vertical" => 0,
            ]);
        });

        return view("coba", [
            "tests" => "OKE"
        ]);
    }
}
