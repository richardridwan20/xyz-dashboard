<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInvoiceLogsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql.log')->table('invoice_logs')->insert([
            [
                'partner_id' => '1',
                'invoice_number' => '0010919',
                'month' => '09',
                'year' => '2019',
                'status' => '',
            ],
            [
                'partner_id' => '2',
                'invoice_number' => '0020919',
                'month' => '09',
                'year' => '2019',
                'status' => '',
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
