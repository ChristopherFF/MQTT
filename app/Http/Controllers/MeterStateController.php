<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Salman\Mqtt\Facades\Mqtt;

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

        $topic = "W/" . $vrm_id . "/dcmeter/" . $meter_id . "/State";
        $message = '{"value": ' . $desired_state .'}';

        $output = Mqtt::ConnectAndPublish($topic, $message);

        $vrm_id = '0cae7d0df73d';
        return view('setState', compact('vrm_id'));
    }



}
