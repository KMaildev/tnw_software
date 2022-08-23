<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleRentAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_rent_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('appointment_status')->nullable();
            $table->text('appointment_title')->nullable();
            $table->text('offer_name')->nullable();
            $table->text('appointment_date')->nullable();
            $table->text('appointment_location')->nullable();
            $table->text('phone')->nullable();
            $table->text('remark')->nullable();
            $table->text('user_id')->nullable();
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
        Schema::dropIfExists('sale_rent_appointments');
    }
}
