<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gudangs')->insert([
            'nomor_gudang' => 1,
        ]);

        DB::table('gudangs')->insert([
            'nomor_gudang' => 2,
        ]);

        DB::table('gudangs')->insert([
            'nomor_gudang' => 3,
        ]);
    }
}
