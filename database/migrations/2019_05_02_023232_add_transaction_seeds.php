<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransactionSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('transactions')->insert([
            [
                'id' => '1',
                'customer_id' => '1',
                'partner_id' => '1',
                'plan_id' => '1',
                'insured_relation' => 'Mother',
                'insured_name' => 'Markonah',
                'insured_dob' => '1975-12-21',
                'insured_gender' => 'Female',
                'protection_duration' => '24',
                'protection_start' => '2019-08-02',
                'protection_end' => '2021-08-02',
                'policy_number' => '60011051298',
                'status' => 'Policy Issued',
                'invoice_number' => '001082019',
                'total_paid' => 150000,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'id' => '2',
                'customer_id' => '2',
                'partner_id' => '1',
                'plan_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '1985-12-21',
                'insured_gender' => 'Male',
                'protection_duration' => '24',
                'protection_start' => '2019-07-06',
                'protection_end' => '2021-07-06',
                'policy_number' => '60011051298',
                'status' => 'Policy Issued',
                'invoice_number' => '001082019',
                'total_paid' => 270000,
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
