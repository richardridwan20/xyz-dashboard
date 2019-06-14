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
                'password' => Hash::make("supadminsequis"),
            ],
            [
                'name' => 'Treasury',
                'email' => 'treasury@sequislife.com',
                'password' => Hash::make("treasurysequis"),
            ],
            [
                'name' => 'Sequis',
                'email' => 'sequisfinancial@sequislife.com',
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
                'name' => 'Tokopedia',
                'email' => 'tokopediafinancial@sequislife.com',
                'password' => Hash::make("tfsequis"),
            ],
            [
                'name' => 'Tokopedia',
                'email' => 'tokopediaoperation@sequislife.com',
                'password' => Hash::make("tosequis"),
            ],
            [
                'name' => 'Tokopedia',
                'email' => 'tokopediaviewer@sequislife.com',
                'password' => Hash::make("tvsequis"),
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
