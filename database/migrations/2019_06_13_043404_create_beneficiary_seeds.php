<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiarySeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('beneficiary')->insert([
            [
                'transaction_id' => '1',
                'bene_relation' => 'Child',
                'bene_name' => 'Juki',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'transaction_id' => '2',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'transaction_id' => '3',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'transaction_id' => '4',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'transaction_id' => '5',
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
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
        Schema::dropIfExists('beneficiary_seeds');
    }
}
