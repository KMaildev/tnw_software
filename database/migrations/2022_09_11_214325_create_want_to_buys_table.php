<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWantToBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('want_to_buys', function (Blueprint $table) {
            $table->increments('id');
            $table->text('customer_name')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('price_from')->nullable();
            $table->text('price_to')->nullable();
            $table->text('area_width')->nullable();
            $table->text('area_height')->nullable();
            $table->text('area')->nullable();
            $table->text('area_type')->nullable();
            $table->integer('township_id')->nullable();
            $table->integer('property_type_id')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('want_to_buys');
    }
}
