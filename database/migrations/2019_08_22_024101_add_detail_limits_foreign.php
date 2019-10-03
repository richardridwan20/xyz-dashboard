<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailLimitsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_limits', function (Blueprint $table) {
            $table->foreign('product_of_partner_id')->references('id')->on('product_of_partners')->onDelete('cascade');
            $table->foreign('limitation_id')->references('id')->on('limitations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
