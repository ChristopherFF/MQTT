<?php

namespace App\Http\Controllers;

use App\DCMeter;
use App\Jobs\ProcessMeterCommand;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Salman\Mqtt\Facades\Mqtt;
use Symfony\Component\Process\Process;

class MeterStateController extends Controller
{


    /**
     * Set dc meter state
     *
     * @param $vrm_id
     * @param $meter_id
     * @param $desired_state
     * @return Factory|View
     */
    public function setState($vrm_id, $meter_id, $desired_state)
    {

        $meter = DCMeter::find($meter_id); // for now the meter id matches the table id

        // update meter table
        $meter->set_state = $desired_state;
        $meter->time_set = Carbon::now();
        $meter->save();

        $topic = "W/" . $vrm_id . "/dcmeter/" . $meter_id . "/State";
        $message = '{"value": ' . $desired_state .'}';

//        $output = Mqtt::ConnectAndPublish($topic, $message);
        ProcessMeterCommand::dispatch($topic, $message)->onConnection('redis');

        $vrm_id = '0cae7d0df73d';
        $meters = DCMeter::all();
        return view('setState', compact(['vrm_id', 'meters']));
    }

    public function getState()
    {

        Log::info("getState()");
        $topic = "N/0cae7d0df73d/dcmeter/+/State";

        Mqtt::ConnectAndSubscribe($topic, function($topic, $msg){

            $topic_split = explode('/', $topic);
            $meter_id = $topic_split[3];
            $meter_state = (json_decode($msg));
            // Log::info("the stuff we want: meter_id => $meter_id, meter_state => " . (isset($meter) && isset($meter_state->value)) ? $meter_state->value : "Unknown");
            Log::info("$topic: $msg");

            if(isset($msg) && strlen($msg) > 0)
            {
                // probably could just call update
                $meter = DCMeter::find($meter_id); // for now the meter id matches the table id
                $meter->verified_state = (isset($meter) && isset($meter_state->value)) ? $meter_state->value : 0; // Probably need three states: on, off, unknown
                $meter->time_verified = Carbon::now();
                $meter->save();
            }


        });

    }






}
