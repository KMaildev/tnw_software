<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('appointment_date_time')->nullable();
            $table->text('appointment_date')->nullable();
            $table->text('appointment_person')->nullable();
            $table->text('appointment_location')->nullable();
            $table->text('appointment_remark')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('marketing_team_id')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
