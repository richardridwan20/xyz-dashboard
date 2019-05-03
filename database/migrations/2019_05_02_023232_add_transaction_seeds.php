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
                'bene_relation' => 'Child',
                'bene_name' => 'Juki',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'payment_status' => 'Completed'
            ],
            [
                'id' => '2',
                'customer_id' => '1',
                'partner_id' => '1',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'payment_status' => 'Pending'
            ],
            [
                'id' => '3',
                'customer_id' => '1',
                'partner_id' => '1',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'payment_status' => 'Pending'
            ],
            [
                'id' => '4',
                'customer_id' => '1',
                'partner_id' => '1',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'payment_status' => 'Pending'
            ],
            [
                'id' => '5',
                'customer_id' => '1',
                'partner_id' => '1',
                'product_id' => '2',
                'insured_relation' => 'Father',
                'insured_name' => 'Budi',
                'insured_dob' => '19/06/1998',
                'insured_gender' => 'Male',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'protection_duration' => '2',
                'certificate_number' => '12356799846644',
                'payment_status' => 'Pending'
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
