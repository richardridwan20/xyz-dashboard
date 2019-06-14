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
                'product_id' => '1',
                'insured_relation' => 'Mother',
                'insured_name' => 'Markonah',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Female',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'status' => 'Completed',
                'invoice_number' => '0010619',
            ],
            [
                'id' => '2',
                'customer_id' => '2',
                'partner_id' => '2',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'status' => 'Pending',
                'invoice_number' => '0020619',
            ],
            [
                'id' => '3',
                'customer_id' => '2',
                'partner_id' => '1',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'status' => 'Pending',
                'invoice_number' => '0010619',
            ],
            [
                'id' => '4',
                'customer_id' => '1',
                'partner_id' => '2',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'status' => 'Pending',
                'invoice_number' => '0020619',
            ],
            [
                'id' => '5',
                'customer_id' => '1',
                'partner_id' => '2',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'status' => 'Pending',
                'invoice_number' => '0020619',
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
