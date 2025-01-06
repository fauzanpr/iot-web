<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpMqtt\Client\Facades\MQTT;

class SetupController extends Controller
{
    public function index()
    {
        return view("app.main", [
            "vertical" => Config::pluck("vertical")->last(),
            "horizontal" => Config::pluck("horizontal")->last()
        ]);
    }

    public function storeHorizontal(Request $request)
    {
        if (!$request->isMethod("POST")) {
            return redirect()->route("setup");
        };
        
        $mqtt = MQTT::connection();
        $request_validated = $request->validate([
            "horizontal" => "nullable",
            "vertical" => "nullable",
            "created_by" => "nullable"
        ]);

        $vertical = Config::pluck("vertical")->last();
        if (!isset($vertical)) {
            $request_validated["vertical"] = 0;
        } else {
            $request_validated["vertical"] = $vertical;
        }
        $request_validated["created_by"] = Auth::user()->username;;

        Config::create($request_validated);
        $mqtt->publish("horizontal_1736_topic", $request_validated["horizontal"]);
        return redirect("/app/setup")->with("success", "Berhasil update setpoin!");
    }

    public function storeVertical(Request $request)
    {
        if (!$request->isMethod("POST")) {
            return redirect()->route("setup");
        };
        
        $mqtt = MQTT::connection();
        $request_validated = $request->validate([
            "horizontal" => "nullable",
            "vertical" => "nullable",
            "created_by" => "nullable"
        ]);

        $horizontal = Config::pluck("horizontal")->last();
        if (!isset($horizontal)) {
            $request_validated["horizontal"] = 0;
        } else {
            $request_validated["horizontal"] = $horizontal;
        }
        $request_validated["created_by"] = Auth::user()->username;;

        Config::create($request_validated);
        $mqtt->publish("vertical_1736_topic", $request_validated["vertical"]);
        return redirect("/app/setup")->with("success", "Berhasil update setpoin!");
    }
}
