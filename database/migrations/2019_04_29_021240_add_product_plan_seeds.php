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
                'product_id' => 1,
                'name' => 'Standard',
                'duration' => 'Yearly',
                'sum_assured' => '23000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 75000
            ],
            [
                'product_id' => 1,
                'name' => 'Deluxe',
                'duration' => 'Yearly',
                'sum_assured' => '36000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 135000
            ],
            [
                'product_id' => 1,
                'name' => 'Standard',
                'duration' => 'Monthly',
                'sum_assured' => '23000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 7800
            ],
            [
                'product_id' => 1,
                'name' => 'Deluxe',
                'duration' => 'Monthly',
                'sum_assured' => '36000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 14000
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
