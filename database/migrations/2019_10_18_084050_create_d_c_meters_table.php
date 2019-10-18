<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDCMetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_c_meters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('vrm_id');
            $table->string('meter_id');
            $table->boolean('set_state');
            $table->dateTime('time_set');
            $table->boolean('verified_state');
            $table->dateTime('time_verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_c_meters');
    }
}
