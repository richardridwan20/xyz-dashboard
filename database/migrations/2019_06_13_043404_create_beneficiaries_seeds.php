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
                'bene_dob' => '1998-05-07',
                'bene_gender' => 'Male',
                'bene_email' => 'juki@gmail.com',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'bene_relation' => 'Father',
                'bene_name' => 'Ahmad',
                'bene_dob' => '1967-20-05',
                'bene_gender' => 'Male',
                'bene_email' => 'ahmad@gmail.com',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
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
        Schema::dropIfExists('beneficiary_seeds');
    }
}
