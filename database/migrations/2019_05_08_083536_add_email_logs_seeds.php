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
                'PH_email_status' => 'Email Sended',
                'PH_email_time' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'transaction_id' => '2',
                'PH_email_status' => 'Email Sended',
                'PH_email_time' => '2019-08-02',
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
        //
    }
}
