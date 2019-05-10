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
                'date' => '28/9/2019',
                'status' => 'done',
            ],
            [
                'partner_id' => '2',
                'date' => '18/9/2019',
                'status' => 'done',
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
