<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservedVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('reserved_vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voucher_code');
            $table->string('policy_number');
            $table->string('status');
            $table->string('expiry_date');
            $table->string('partner');
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
        Schema::dropIfExists('reserved_vouchers');
    }
}
