<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailLogsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql.log')->table('email_logs')->insert([
            [
                'transaction_id' => '1',
                'PH_email_status' => 'Sended',
                'bene_email_status' => 'Sended',
                'PH_email_time' => '28/4/2019',
                'bene_email_time' => '28/4/2019',
            ],
            [
                'transaction_id' => '2',
                'PH_email_status' => 'Sended',
                'bene_email_status' => 'Sended',
                'PH_email_time' => '26/5/2019',
                'bene_email_time' => '26/5/2019',
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
