<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiariesSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('beneficiaries')->insert([
            [
                'bene_relation' => 'Child',
                'bene_name' => 'Juki',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
                'bene_relation' => 'Child',
                'bene_name' => 'Kiju',
                'bene_dob' => '20/05/2001',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
            ],
            [
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
