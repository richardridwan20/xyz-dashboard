<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductOfPartnerSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql')->table('product_of_partners')->insert([
            [
                'plan_id' => '1',
                'partner_id' => '1',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '2',
                'partner_id' => '1',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '1',
                'partner_id' => '2',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '2',
                'partner_id' => '2',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '1',
                'partner_id' => '3',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '2',
                'partner_id' => '3',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '1',
                'partner_id' => '4',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '2',
                'partner_id' => '4',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '3',
                'partner_id' => '4',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '4',
                'partner_id' => '4',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '1',
                'partner_id' => '5',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '2',
                'partner_id' => '5',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '3',
                'partner_id' => '5',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'plan_id' => '4',
                'partner_id' => '5',
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
