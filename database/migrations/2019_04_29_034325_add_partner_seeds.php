<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPartnerSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('partners')->insert([
            [
                'name' => 'Sequis',
                'company_name' => 'PT. Asuransi Jiwa Sequis Life',
                'company_address' => 'Jln Jenderal Sudirman 1',
                'commission' => '0.3',
                'allow_send_data' => 0,
                'sender' => 'Partner',
                'email' => 'Sequis@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1234567890123',
                'payment_type' => 'Yearly',
                'agent_quota' => 50
            ],
            [
                'name' => 'Smailing',
                'company_name' => 'PT. Smailing Tours & Travel Service',
                'company_address' => 'Jl. Majapahit No.28 Jakarta 10160',
                'commission' => '0.3',
                'allow_send_data' => 0,
                'sender' => 'Partner',
                'email' => 'smailing@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Yearly',
                'agent_quota' => 50
            ],
            [
                'name' => 'Sepulsa',
                'company_name' => 'PT. Gamma Semesta Teknologi',
                'company_address' => 'Perumahan Taman Harapan Indah Blok. CC No. 6 & 15, Jl. Pangeran Tubagus Angke RT. 014 RW. 007, Kel. Jelambar Baru, Kec. Grogol Petamburan, Jakarta Barat.',
                'commission' => '0.3',
                'allow_send_data' => 0,
                'sender' => 'Partner',
                'email' => 'sepulsa@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Monthly',
                'agent_quota' => 50
            ],
            [
                'name' => 'Warung Pintar',
                'company_name' => 'PT. Warung Pintar Sekali',
                'company_address' => 'Gedung Equity Tower Lantai 8 Unit B SCBD Lot. 9, Jl. Jendral Sudirman Kav 52-53, Jakarta Selatan – 12190',
                'commission' => '0.3',
                'allow_send_data' => 0,
                'sender' => 'Partner',
                'email' => 'warungpintar@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Yearly',
                'agent_quota' => 50
            ],
            [
                'name' => 'Macroad',
                'company_name' => 'PT. Pulau Pulau Media',
                'company_address' => 'Ruko Citayam Center No. 31, RT/RW 005/005, Pondok Jaya, Cipayung, Depok',
                'commission' => '0.3',
                'allow_send_data' => 0,
                'sender' => 'Partner',
                'email' => 'macroad@sequislife.com',
                'subject' => 'Test',
                'body' => 'Test',
                'no_polis_induk' => '1902103366589',
                'payment_type' => 'Yearly',
                'agent_quota' => 50
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
