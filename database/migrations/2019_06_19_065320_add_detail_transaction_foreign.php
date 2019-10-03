<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailTransactionForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_transactions', function (Blueprint $table) {
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_transactions', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['beneficiary_id']);
        });
    }
}
