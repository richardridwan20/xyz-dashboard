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
                'branch_name' => 'Sequis Kemanggisan',
                'agent_name' => 'Pater',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 1,
                'username' => 'Sequis0002',
                'password' => Hash::make("S0002"),
                'branch_name' => 'Sequis Kemanggisan',
                'agent_name' => 'Rachird',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 2,
                'username' => 'Smailing0001',
                'password' => Hash::make("s0001"),
                'branch_name' => 'Smailing Kelapa Gading',
                'agent_name' => 'Don',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 2,
                'username' => 'Smailing0002',
                'password' => Hash::make("s0002"),
                'branch_name' => 'Smailing Kemanggisan',
                'agent_name' => 'Pater',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 3,
                'username' => 'Sepulsa0001',
                'password' => Hash::make("se0101"),
                'branch_name' => '',
                'agent_name' => 'Pater',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 3,
                'username' => 'Sepulsa0002',
                'password' => Hash::make("se0002"),
                'branch_name' => '',
                'agent_name' => 'didon',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 4,
                'username' => 'Warpin0001',
                'password' => Hash::make("w0001"),
                'branch_name' => '',
                'agent_name' => 'didon',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 4,
                'username' => 'Warpin0002',
                'password' => Hash::make("w0002"),
                'branch_name' => '',
                'agent_name' => 'didon',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 5,
                'username' => 'Macroad0001',
                'password' => Hash::make("m0001"),
                'branch_name' => '',
                'agent_name' => 'didon',
                'citizen_id' => '2019283746583012',
                'phone_number' => '0819283746543',
                'dob' => '2019-06-28',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => 5,
                'username' => 'Macroad0002',
                'password' => Hash::make("m0002"),
                'branch_name' => '',
                'agent_name' => 'didon',
                'citizen_id' => '2019283746583013',
                'phone_number' => '082746383073',
                'dob' => '2019-06-19',
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
