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
                'product_id' => "1",
                'name' => 'Standard',
                'duration' => 'Yearly',
                'sum_assured' => '26900000',
                'accident_benefit' => '20000000',
                'natural_death_benefit' => '3000000',
                'tpd_benefit' => '3000000',
                'surgery_benefit' => '300000',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 75000,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'product_id' => "1",
                'name' => 'Deluxe',
                'duration' => 'Yearly',
                'sum_assured' => '42400000',
                'accident_benefit' => '30000000',
                'natural_death_benefit' => '6000000',
                'tpd_benefit' => '6000000',
                'surgery_benefit' => '400000',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 135000,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'product_id' => "1",
                'name' => 'Standard',
                'duration' => 'Monthly',
                'sum_assured' => '26900000',
                'accident_benefit' => '20000000',
                'natural_death_benefit' => '3000000',
                'tpd_benefit' => '3000000',
                'surgery_benefit' => '300000',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 7800,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'product_id' => "1",
                'name' => 'Deluxe',
                'duration' => 'Monthly',
                'sum_assured' => '42400000',
                'accident_benefit' => '30000000',
                'natural_death_benefit' => '6000000',
                'tpd_benefit' => '6000000',
                'surgery_benefit' => '400000',
                'description' => 'Asuransi yang sangat terjangkau',
                'premium' => 14000,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
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
