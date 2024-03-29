<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('commission');
            $table->boolean('allow_send_data');
            $table->boolean('allow_phone_data');
            $table->string('sender');
            $table->string('email');
            $table->string('subject');
            $table->string('body');
            $table->integer('agent_quota')->default(50);
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
        Schema::dropIfExists('partners');
    }
}
