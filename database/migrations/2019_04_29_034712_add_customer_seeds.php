<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Peter James',
                'dob' => '19021998',
                'citizen_id' => '1236547896541236',
                'gender' => 'Male',
                'email' => 'peter@sequislife.com',
            ],
            [
                'name' => 'Richard Ridwan',
                'dob' => '15041996',
                'citizen_id' => '2256998731745569',
                'gender' => 'Male',
                'email' => 'richard@sequislife.com',
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
