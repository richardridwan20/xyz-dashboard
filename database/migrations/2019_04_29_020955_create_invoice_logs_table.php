<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql.log')->create('invoice_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('partner_id');
            $table->string('invoice_number');
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('paid_at')->nullable();
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
        Schema::connection('mysql.log')->dropIfExists('invoice_logs');
    }
}
