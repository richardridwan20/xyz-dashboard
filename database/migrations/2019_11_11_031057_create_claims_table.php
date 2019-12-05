<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('transaction_id');
            //AC = Accident, ND = Natural Death, TPD = Total Permanent Disability, SG = Surgery
            $table->enum('claim_type', ['AC','ND','TPD','SG']);
            $table->dateTime('claim_date');
            $table->dateTime('hospital_in')->nullable();
            $table->dateTime('hospital_out')->nullable();
            $table->string('claim_reason');
            $table->string('claim_amount');
            $table->enum('claim_decision', ['Accept','Reject']);
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
        });

        Schema::dropIfExists('claims');
    }
}
