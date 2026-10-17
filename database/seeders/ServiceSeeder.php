<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->delete();

        DB::table('services')->insert([
            [
                'name' => 'Service Berkala - Oli 3 Liter',
                'description' => 'Perawatan berkala kendaraan dengan penggunaan oli sebanyak 3 liter.',
                'price' => 'Rp825.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Service Berkala - Oli 4 Liter',
                'description' => 'Perawatan berkala kendaraan dengan penggunaan oli sebanyak 4 liter.',
                'price' => 'Rp900.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ganti Oli 3 Liter',
                'description' => 'Penggantian oli mesin mobil sebanyak 3 liter.',
                'price' => 'Rp350.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ganti Oli 4 Liter',
                'description' => 'Penggantian oli mesin mobil sebanyak 4 liter.',
                'price' => 'Rp450.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tune Up Manual',
                'description' => 'Perawatan dan pemeriksaan mesin dengan metode manual.',
                'price' => 'Rp350.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tune Up Menggunakan Mesin',
                'description' => 'Perawatan dan pemeriksaan mesin menggunakan peralatan mesin.',
                'price' => 'Rp400.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tune Up Mesin + Pembersihan Pullpump',
                'description' => 'Tune up menggunakan mesin disertai pembersihan pullpump.',
                'price' => 'Rp500.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pemeriksaan Rem',
                'description' => 'Pemeriksaan kondisi sistem pengereman kendaraan.',
                'price' => 'Rp150.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
