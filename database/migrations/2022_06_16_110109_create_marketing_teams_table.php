<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->text('marketing_date')->nullable();
            $table->text('no')->nullable();
            $table->text('ward_no')->nullable();
            $table->text('road')->nullable();
            $table->text('wide')->nullable();
            $table->text('permission')->nullable();
            $table->text('type')->nullable();
            $table->text('price')->nullable();
            $table->text('owner_or_agent_type')->nullable();
            $table->text('name')->nullable();
            $table->text('phone_no')->nullable();
            $table->text('email')->nullable();
            $table->text('code')->nullable();
            $table->text('remark')->nullable();
            $table->text('interest_rate')->nullable();
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
        Schema::dropIfExists('marketing_teams');
    }
}
