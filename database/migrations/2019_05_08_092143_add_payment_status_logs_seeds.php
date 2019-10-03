<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentStatusLogsSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql.log')->table('payment_status_logs')->insert([
            [
                'transaction_id' => '1',
                'status' => "Payment Done",
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'transaction_id' => '2',
                "status" => "Payment Done",
                'total_paid' => '270000',
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
