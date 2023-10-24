<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StatistikPemainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Daftar pemain
        $pemainIds = DB::table('pemain')->pluck('ID_Pemain');

        foreach ($pemainIds as $pemainId) {
            DB::table('statistik_pemain')->insert([
                'ID_Pemain' => $pemainId,
                'Jumlah_Pertandingan' => $faker->numberBetween(1, 50),
                'Jumlah_Gol' => $faker->numberBetween(0, 30),
                'Jumlah_Assist' => $faker->numberBetween(0, 20),
                'Kartu_Kuning' => $faker->numberBetween(0, 10),
                'Kartu_Merah' => $faker->numberBetween(0, 2),
                'Penyelamatan' => $faker->numberBetween(0, 50),
                'Clean_Sheet' => $faker->numberBetween(0, 10),
                'Tahun' => $faker->year,
            ]);
        }
    }
}
