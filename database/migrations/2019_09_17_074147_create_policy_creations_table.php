<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyCreationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql.log')->create('policy_creation_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('transaction_id');
            $table->string('policy_number');
            $table->string('policy_status');
            $table->timestamps();

            // $table->foreign('transaction_id')->references('id')->on('sequis-b2b-dashboard.transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql.log')->dropIfExists('policy_creation_logs');
    }
}
