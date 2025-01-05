<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpMqtt\Client\Facades\MQTT;

class MqttSubs implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function handle(): void
    {
        $mqtt = MQTT::connection();
        $mqtt->subscribe("horizontal_1736_topic", function ($topic, $msg) {
            $vertical = DB::table("configs")->orderBy("id", "desc")->value("vertical");
            DB::table('configs')->insert([
                "horizontal" => $msg,
                "vertical" => $vertical,
                "created_by" => "MQTT",
                "created_at" => Carbon::now()
            ]);
        }, 0);

        $mqtt->subscribe("vertical_1736_topic", function ($topic, $msg) {
            $horizontal = DB::table("configs")->orderBy("id", "desc")->value("horizontal");
            DB::table('configs')->insert([
                "horizontal" => $horizontal,
                "vertical" => $msg,
                "created_by" => "MQTT",
                "created_at" => Carbon::now()
            ]);
        }, 0);

        $mqtt->loop(true, 1000); // Loop dengan timeout 1000 ms
    }
}
