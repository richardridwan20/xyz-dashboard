<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('products')->insert([
            [
                'name' => 'Asuransi Sequis Mikro Sejahtera',
                'duration' => 'Yearly',
                'plan_name' => 'Standard',
                'sum_assured' => '23000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 75000
            ],
            [
                'name' => 'Asuransi Sequis Mikro Sejahtera',
                'duration' => 'Yearly',
                'plan_name' => 'Deluxe',
                'sum_assured' => '36000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 135000,
            ],
            [
                'name' => 'Asuransi Sequis Mikro Sejahtera',
                'duration' => 'Monthly',
                'plan_name' => 'Standard',
                'sum_assured' => '23000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 7800
            ],
            [
                'name' => 'Asuransi Sequis Mikro Sejahtera',
                'duration' => 'Monthly',
                'plan_name' => 'Deluxe',
                'sum_assured' => '36000000',
                'benefits' => 'Asuransi Mikro yang Terjangkau',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 14000,
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
