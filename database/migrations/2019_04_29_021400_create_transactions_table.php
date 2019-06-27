<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('partner_id');
            $table->unsignedInteger('product_id');
            $table->string('insured_relation');
            $table->string('insured_name');
            $table->string('insured_dob');
            $table->string('insured_gender');
            $table->string('protection_duration');
            $table->string('certificate_number')->nullable();
            $table->string('status');
            $table->string('invoice_number');
            $table->integer('total_paid');
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
        Schema::dropIfExists('transactions');
    }
}
