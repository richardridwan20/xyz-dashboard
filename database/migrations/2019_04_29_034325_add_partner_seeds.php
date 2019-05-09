<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnerSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('partners')->insert([
            [
                'name' => 'Smailing',
                'commision' => '0.3',
                'allow_send_data' => 'Yes',
                'sender' => 'Partner',
                'email' => 'smailing@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Yearly',
                'duration' => '12',
            ],
            [
                'name' => 'Tokopedia',
                'commision' => '0.3',
                'allow_send_data' => 'Yes',
                'sender' => 'Partner',
                'email' => 'tokopedia@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Monthly',
                'duration' => '2',
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
