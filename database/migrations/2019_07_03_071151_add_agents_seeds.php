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
                'username' => 'Sequis0001',
                'password' => Hash::make("S0001"),
                'agent_branch_name' => 'Peter',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 1,
                'username' => 'Sequis0002',
                'password' => Hash::make("S0002"),
                'agent_branch_name' => 'Richard',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19'
            ],
            [
                'partner_id' => 2,
                'username' => 'Smailing0001',
                'password' => Hash::make("s0001"),
                'agent_branch_name' => 'Manuel',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 2,
                'username' => 'Smailing0002',
                'password' => Hash::make("s0002"),
                'agent_branch_name' => 'Fredy',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19'
            ],
            [
                'partner_id' => 3,
                'username' => 'Sepulsa0001',
                'password' => Hash::make("se0101"),
                'agent_branch_name' => 'pulde',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 3,
                'username' => 'Sepulsa0002',
                'password' => Hash::make("se0002"),
                'agent_branch_name' => 'Richard',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19'
            ],
            [
                'partner_id' => 4,
                'username' => 'Warpin0001',
                'password' => Hash::make("w0001"),
                'agent_branch_name' => 'Peter',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 4,
                'username' => 'Warpin0002',
                'password' => Hash::make("w0002"),
                'agent_branch_name' => 'Richard',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19'
            ],
            [
                'partner_id' => 5,
                'username' => 'Macroad0001',
                'password' => Hash::make("m0001"),
                'agent_branch_name' => 'Peter',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28'
            ],
            [
                'partner_id' => 5,
                'username' => 'Macroad0002',
                'password' => Hash::make("m0002"),
                'agent_branch_name' => 'Richard',
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
