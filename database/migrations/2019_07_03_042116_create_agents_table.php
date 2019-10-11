<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('partner_id');
            $table->string('email');
            $table->string('password');
            $table->string('branch_name')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('citizen_id');
            $table->string('phone_number');
            $table->date('dob');
            $table->timestamps();

            // $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('agents', function (Blueprint $table) {
        //     $table->dropForeign(['partner_id']);
        //     $table->dropColumn('partner_id');
        // });

        Schema::dropIfExists('agents');
    }
}
