<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgentsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('agents')->insert([
            [
                'partner_id' => 1,
                'username' => 'Smailing0101',
                'password' => Hash::make("s0101"),
                'agent/branch_name' => 'Peter',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 2,
                'username' => 'Tokopedia0101',
                'password' => Hash::make("t0101"),
                'agent/branch_name' => 'Richard',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19'
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
