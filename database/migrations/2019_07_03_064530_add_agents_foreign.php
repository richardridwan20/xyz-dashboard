<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgentsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('agents', function (Blueprint $table) {
        //     $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('agents', function (Blueprint $table) {
            // $table->dropForeign(['partner_id']);
        //});
    }
}
