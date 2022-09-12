<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewedPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewed_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marketing_team_id')->nullable();
            $table->integer('want_to_buy_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('viewed_date')->nullable();
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
        Schema::dropIfExists('viewed_properties');
    }
}
