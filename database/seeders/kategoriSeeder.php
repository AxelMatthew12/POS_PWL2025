<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            ['kategori_id'=>1,'kategori_kode'=>001,'kategori_nama'=>'Laptop'],
            ['kategori_id'=>2,'kategori_kode'=>002,'kategori_nama'=>'Hp'],
            ['kategori_id'=>3,'kategori_kode'=>003,'kategori_nama'=>'Kulkas'],
            ['kategori_id'=>4,'kategori_kode'=>004,'kategori_nama'=>'Tv'],
            ['kategori_id'=>5,'kategori_kode'=>005,'kategori_nama'=>'MesinCuci'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
