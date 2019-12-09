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
            $table->unsignedInteger('customer_id');
            //AC = Accident, ND = Natural Death, TPD = Total Permanent Disability, SG = Surgery
            $table->enum('cause_of_claim', ['AC','ND','TPD','SG']);
            $table->dateTime('claim_date');
            $table->dateTime('event_date');
            $table->string('diagnose');
            $table->string('claim_amount');
            $table->enum('claim_decision', ['Approve','Reject', 'Ex Gratia', 'Cancel']);
            $table->dateTime('decision_date');
            $table->dateTime('hospital_in')->nullable();
            $table->dateTime('hospital_out')->nullable();
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
            $table->dropForeign(['customer_id']);
        });

        Schema::dropIfExists('claims');
    }
}
