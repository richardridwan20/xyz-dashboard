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
                'invoice_number' => '001082019',
                'month' => '09',
                'year' => '2019',
                'status' => 'Invoice Created',
                'paid_at' => null,
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '2',
                'invoice_number' => '002082019',
                'month' => '09',
                'year' => '2019',
                'status' => 'Invoice Created',
                'paid_at' => null,
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