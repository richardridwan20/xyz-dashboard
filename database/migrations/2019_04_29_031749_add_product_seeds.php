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
                'plan_id' => 1
            ],
            [
                'name' => 'Asuransi Sequis Mikro Sejahtera',
                'plan_id' => 2
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
