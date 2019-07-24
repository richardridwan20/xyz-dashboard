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
                'invoice_number' => '001092019',
                'month' => '09',
                'year' => '2019',
                'status' => 'Invoice Created',
                'paid_at' => null
            ],
            [
                'partner_id' => '2',
                'invoice_number' => '002092019',
                'month' => '09',
                'year' => '2019',
                'status' => 'Invoice Paid',
                'paid_at' => '2019-07-24'
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
