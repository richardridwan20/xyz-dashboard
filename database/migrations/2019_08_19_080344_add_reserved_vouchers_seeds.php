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
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS02',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS03',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS04',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS05',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS06',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS07',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS08',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS09',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS10',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS11',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS12',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
                'expiry_date' => '2019-08-02',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS13',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'protection_duration' => '12',
                'total_paid' => '150000',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'partner_id' => '1',
                'plan_id' => '1',
                'voucher_code' => 'SEMARAKSEQUIS14',
                'protection_duration' => '12',
                'status' => 'Available',
                'total_paid' => '150000',
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
