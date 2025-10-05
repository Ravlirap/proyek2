<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert(array(
            [
                'nim' => '2403063',
                'nama' => 'EvosAzhar',
                'prodi' => 'D3TI',
                'angkatan' => '2099',
            ],
            [
                'nim' => '2403066',
                'nama' => 'Ravli',
                'prodi' => 'D3TI',
                'angkatan' => '2025'
            ]
        ));
    }
}