<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            [
                'name' => 'Sequis',
                'email' => 'supadmin@sequislife.com',
                'password' => Hash::make("Wujibif4n"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'treasury@sequislife.com',
                'password' => Hash::make("treasurysequis"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'financial@sequislife.com',
                'password' => Hash::make("financialsequis"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'operation@sequislife.com',
                'password' => Hash::make("operationsequis"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'viewer@sequislife.com',
                'password' => Hash::make("viewersequis"),
            ],
            [
                'name' => 'Smailing',
                'email' => 'smailingfinancial@sequislife.com',
                'password' => Hash::make("sfsequis"),
            ],
            [
                'name' => 'Smailing',
                'email' => 'smailingoperation@sequislife.com',
                'password' => Hash::make("sosequis"),
            ],
            [
                'name' => 'Smailing',
                'email' => 'smailingviewer@sequislife.com',
                'password' => Hash::make("svsequis"),
            ],
            [
                'name' => 'Sepulsa',
                'email' => 'sepulsafinancial@sequislife.com',
                'password' => Hash::make("spfsequis"),
            ],
            [
                'name' => 'Sepulsa',
                'email' => 'sepulsaoperation@sequislife.com',
                'password' => Hash::make("sposequis"),
            ],
            [
                'name' => 'Sepulsa',
                'email' => 'sepulsaviewer@sequislife.com',
                'password' => Hash::make("spvsequis"),
            ],
            [
                'name' => 'Warung Pintar',
                'email' => 'warungpintarfinancial@sequislife.com',
                'password' => Hash::make("wpfsequis"),
            ],
            [
                'name' => 'Warung Pintar',
                'email' => 'warungpintaroperation@sequislife.com',
                'password' => Hash::make("wposequis"),
            ],
            [
                'name' => 'Warung Pintar',
                'email' => 'warungpintarviewer@sequislife.com',
                'password' => Hash::make("wpvsequis"),
            ],
            [
                'name' => 'Macroad',
                'email' => 'macroadfinancial@sequislife.com',
                'password' => Hash::make("mfsequis"),
            ],
            [
                'name' => 'Macroad',
                'email' => 'macroadoperation@sequislife.com',
                'password' => Hash::make("mosequis"),
            ],
            [
                'name' => 'Macroad',
                'email' => 'macroadviewer@sequislife.com',
                'password' => Hash::make("mvsequis"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'claim@sequislife.com',
                'password' => Hash::make("claimsequis"),
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
        Schema::dropIfExists('users_seeds');
    }
}
