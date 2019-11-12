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
                'dob' => '1998-02-19',
                'citizen_id' => '1236547896541236',
                'gender' => 'Male',
                'email' => 'peter@sequislife.com',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02',
                'phone_number' => '081231312121'
            ],
            [
                'name' => 'Susi Susanti',
                'dob' => '1996-04-05',
                'citizen_id' => '2256998731745569',
                'gender' => 'Female',
                'email' => 'susi@sequislife.com',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02',
                'phone_number' => '081231312121'
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
