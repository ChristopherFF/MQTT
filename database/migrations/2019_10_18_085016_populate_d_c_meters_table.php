<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateDCMetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('d_c_meters')->insert([
            [
                'id' => 1,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '1',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '2',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '3',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '4',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '5',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '6',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '7',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '8',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '9',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '10',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '11',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '12',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '13',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '14',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '15',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'site_name' => 'Test',
                'vrm_id' => '0cae7d0df73d',
                'meter_id' => '16',
                'set_state' => false,
                'time_set' => Carbon::now(),
                'verified_state' => false,
                'time_verified' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('d_c_meters')->truncate();
    }
}
