<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCertificateLogsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql.log')->table('certificate_logs')->insert([
            [
                'transaction_id' => '1',
                'certificate_number' => 'Sample',
                'certificate_status' => 'Certificate Sended',
            ],
            [
                'transaction_id' => '2',
                'certificate_number' => 'Sample',
                'certificate_status' => 'Certificate Sended',
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
