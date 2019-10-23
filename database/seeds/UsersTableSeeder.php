<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'MQTT User',
            'email' => 'mqtt@fluenty.co.za',
            'password' => '$2y$10$DDm00NyUMjaTbiSDVPIdj.BUJrZ3K8caF/R/OFphWmk2yw/QBsKjC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
