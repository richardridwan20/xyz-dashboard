<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservedVouchersSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql')->table('reserved_vouchers')->insert([
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS01',
                'certificate_number' => '6001092019',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS02',
                'certificate_number' => '6002092019',
                'protection_duration' => '12',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
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
        //
    }
}
