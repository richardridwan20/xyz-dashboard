<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductPlanSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('product_plans')->insert([
            [
                'name' => 'Basic',
                'sum_assured' => '23000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau'
            ],
            [
                'name' => 'Deluxe',
                'sum_assured' => '36000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau'
            ]
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
