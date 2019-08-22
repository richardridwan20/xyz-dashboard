<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLimitationSeeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection('mysql')->table('limitations')->insert([
            [
                'limit_code' => '11',
                'area_name' => 'Aceh',
            ],
            [
                'limit_code' => '12',
                'area_name' => 'Sumatera Utara',
            ],
            [
                'limit_code' => '13',
                'area_name' => 'Sumatera Barat',
            ],
            [
                'limit_code' => '14',
                'area_name' => 'Riau',
            ],
            [
                'limit_code' => '15',
                'area_name' => 'Jambi',
            ],
            [
                'limit_code' => '16',
                'area_name' => 'Sumatera Selatan',
            ],
            [
                'limit_code' => '17',
                'area_name' => 'Bengkulu',
            ],
            [
                'limit_code' => '18',
                'area_name' => 'Lampung',
            ],
            [
                'limit_code' => '19',
                'area_name' => 'Kepulauan Bangka Belitung',
            ],
            [
                'limit_code' => '21',
                'area_name' => 'Kepulauan Riau',
            ],
            [
                'limit_code' => '31',
                'area_name' => 'DKI Jakarta',
            ],
            [
                'limit_code' => '32',
                'area_name' => 'Jawa Barat',
            ],
            [
                'limit_code' => '33',
                'area_name' => 'Jawa Tengah',
            ],
            [
                'limit_code' => '34',
                'area_name' => 'Daerah Istimewa Yogyakarta',
            ],
            [
                'limit_code' => '35',
                'area_name' => 'Jawa Timur',
            ],
            [
                'limit_code' => '36',
                'area_name' => 'Banten',
            ],
            [
                'limit_code' => '51',
                'area_name' => 'Bali',
            ],
            [
                'limit_code' => '52',
                'area_name' => 'Nusa Tenggara Barat',
            ],
            [
                'limit_code' => '53',
                'area_name' => 'Nusa Tenggara Timur',
            ],
            [
                'limit_code' => '61',
                'area_name' => 'Kalimantan Barat',
            ],
            [
                'limit_code' => '62',
                'area_name' => 'Kalimantan Tengah',
            ],
            [
                'limit_code' => '63',
                'area_name' => 'Kalimantan Selatan',
            ],
            [
                'limit_code' => '64',
                'area_name' => 'Kalimantan Timur',
            ],
            [
                'limit_code' => '65',
                'area_name' => 'Kalimantan Utara',
            ],
            [
                'limit_code' => '71',
                'area_name' => 'Sulawesi Utara',
            ],
            [
                'limit_code' => '72',
                'area_name' => 'Sulawesi Tengah',
            ],
            [
                'limit_code' => '73',
                'area_name' => 'Sulawesi Selatan',
            ],
            [
                'limit_code' => '74',
                'area_name' => 'Sulawesi Tenggara',
            ],
            [
                'limit_code' => '75',
                'area_name' => 'Gorontalo',
            ],
            [
                'limit_code' => '76',
                'area_name' => 'Sulawesi Barat',
            ],
            [
                'limit_code' => '81',
                'area_name' => 'Maluku',
            ],
            [
                'limit_code' => '82',
                'area_name' => 'Maluku Utara',
            ],
            [
                'limit_code' => '91',
                'area_name' => 'Papua',
            ],
            [
                'limit_code' => '92',
                'area_name' => 'Papua Barat',
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
