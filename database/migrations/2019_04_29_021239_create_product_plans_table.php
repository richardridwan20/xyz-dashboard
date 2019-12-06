<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('name');
            $table->string('duration');
            $table->string('sum_assured');
            $table->string('accident_benefit');
            $table->string('natural_death_benefit');
            $table->string('tpd_benefit');
            $table->string('surgery_benefit');
            $table->string('description');
            $table->string('premium');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('sovera.products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_plans', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('product_plans');
    }
}
