<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert(array(
            [
                'nama_prodi' => 'Teknik Informatika',
                'jurusan' => 'TeknikInformatika',
            ],
            [
                'nama_prodi' => 'Sistem Informasi Kota Cerdas',
                'jurusan' => 'TeknikInformatika',
            ],
            [
                'nama_prodi' => 'Teknik Mesin',
                'jurusan' => 'Teknik',
            ],
            [
                'nama_prodi' => 'Perancangan Manufaktur',
                'jurusan' => 'Teknik',
            ],
            [
                'nama_prodi' => 'Keperawatan',
                'jurusan' => 'Kesehatan',
            ],
        ));
    }
}
