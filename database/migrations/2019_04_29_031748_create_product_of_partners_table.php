<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOfPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('product_of_partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('partner_id');
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('sovera.product_plans');
            $table->foreign('partner_id')->references('id')->on('sovera.partners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_of_partners');
    }
}
