<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('date_time')->nullable();
            $table->text('follow_up_date')->nullable();
            $table->text('follow_up_type')->nullable();
            $table->text('follow_up_remark')->nullable();
            $table->text('additional_note')->nullable();
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
        Schema::dropIfExists('follow_ups');
    }
}
