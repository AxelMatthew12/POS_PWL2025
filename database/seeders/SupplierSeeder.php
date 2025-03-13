<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            ['supplier_id'=>1, 'supplier_kode'=>001, 'supplier_nama'=>'budi','supplier_alamat'=>'Jl.Hartono 21 Malang,Jawa Timur'],
            ['supplier_id'=>2, 'supplier_kode'=>002, 'supplier_nama'=>'herman','supplier_alamat'=>'Jl.Hartono 22 Malang,Jawa Timur'],
            ['supplier_id'=>3, 'supplier_kode'=>003, 'supplier_nama'=>'anto','supplier_alamat'=>'Jl.Hartono 23 Malang,Jawa Timur'],


        ];
        DB::table('m_supplier')->insert($data);
    }
}
