<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql.log')->create('error_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('transaction_id');
            $table->string('code');
            $table->string('file');
            $table->string('line');
            $table->string('message');
            $table->string('trace');
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
        Schema::connection('mysql.log')->dropIfExists('error_logs');
    }
}
