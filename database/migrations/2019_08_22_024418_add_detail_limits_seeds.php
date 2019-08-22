<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailLimitsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('detail_limits')->insert([
            [
                'product_of_partner_id' => 1,
                'limitation_id' => 1,
            ],
            [
                'product_of_partner_id' => 2,
                'limitation_id' => 2,
            ],
            [
                'product_of_partner_id' => 3,
                'limitation_id' => 3,
            ],
            [
                'product_of_partner_id' => 4,
                'limitation_id' => 4,
            ],
            [
                'product_of_partner_id' => 5,
                'limitation_id' => 5,
            ],
            [
                'product_of_partner_id' => 6,
                'limitation_id' => 6,
            ],
        ]);
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
