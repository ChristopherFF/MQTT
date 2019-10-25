<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Salman\Mqtt\Facades\Mqtt;


class ProcessMeterCommand implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $topic;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($topic, $message)
    {
        $this->topic = $topic;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $output = Mqtt::ConnectAndPublish($this->topic, $this->message);
        Log::debug("\nQueued topic: " . $this->topic);
        Log::debug("Queued message: " . $this->message . "\n");

    }
}
