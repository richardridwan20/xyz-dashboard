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
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('agent_id')->nullable();
            $table->unsignedInteger('voucher_id')->nullable();
            $table->string('insured_relation');
            $table->string('insured_name');
            $table->string('insured_dob');
            $table->string('insured_gender')->nullable();
            $table->string('protection_duration');
            $table->dateTime('protection_start')->nullable();
            $table->dateTime('protection_end')->nullable();
            $table->string('policy_number')->nullable();
            $table->enum('status', ['Payment Done', 'Waiting For Payment', 'Canceled']);
            $table->string('invoice_number');
            $table->integer('total_paid');
            $table->string('note')->nullable();
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
