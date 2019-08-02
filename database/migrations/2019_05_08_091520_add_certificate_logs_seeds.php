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
                'certificate_number' => '60011051298',
                'certificate_status' => 'Certificate Sended',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'transaction_id' => '2',
                'certificate_number' => '60011051298',
                'certificate_status' => 'Certificate Sended',
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
