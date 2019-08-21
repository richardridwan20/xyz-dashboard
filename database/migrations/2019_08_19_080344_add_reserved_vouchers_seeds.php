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
                'voucher_number' => 'SEMARAKSEQUIS01',
                'certificate_number' => '6001092019',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'partner' => 'Sequis',
                'created_at' => '2019-08-02',
                'updated_at' => '2019-08-02'
            ],
            [
                'voucher_number' => 'SEMARAKSEQUIS02',
                'certificate_number' => '6002092019',
                'status' => 'Available',
                'expiry_date' => '2019-08-02',
                'partner' => 'Sequis',
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
