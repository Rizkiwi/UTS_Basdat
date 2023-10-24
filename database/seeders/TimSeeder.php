<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimSeeder extends Seeder
{
    public function run()
    {
        DB::table('tim')->insert([
            [
                'Nama_Tim' => 'Persija Jakarta',
                'Kota_Asal' => 'Jakarta',
                'Tahun_Berdiri' => 1928,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Arema FC',
                'Kota_Asal' => 'Malang',
                'Tahun_Berdiri' => 1987,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Persebaya Surabaya',
                'Kota_Asal' => 'Surabaya',
                'Tahun_Berdiri' => 1927,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Persib Bandung',
                'Kota_Asal' => 'Bandung',
                'Tahun_Berdiri' => 1933,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'PSM Makassar',
                'Kota_Asal' => 'Makassar',
                'Tahun_Berdiri' => 1970,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Persis Solo',
                'Kota_Asal' => 'Solo',
                'Tahun_Berdiri' => 1970,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'PSIS Semarang',
                'Kota_Asal' => 'Semarang',
                'Tahun_Berdiri' => 1976,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Borneo FC',
                'Kota_Asal' => 'Samarinda',
                'Tahun_Berdiri' => 2014,
                'Asal_Negara' => 'Indonesia',
            ],
            [
                'Nama_Tim' => 'Persipura Jayapura',
                'Kota_Asal' => 'Jayapura',
                'Tahun_Berdiri' => 1963,
                'Asal_Negara' => 'Indonesia',
            ],
            // Tambahkan tim lainnya sesuai kebutuhan
        ]);
    }
}
