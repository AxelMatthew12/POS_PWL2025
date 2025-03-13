<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 5 Barang kategori Laptop (ID = 1)
            ['barang_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Asus ROG', 'kategori_id' => 1, 'harga_beli' => 12000000, 'harga_jual' => 15000000],
            ['barang_id' => 2, 'barang_kode' => 'B002', 'barang_nama' => 'Acer Predator', 'kategori_id' => 1, 'harga_beli' => 11000000, 'harga_jual' => 14000000],
            ['barang_id' => 3, 'barang_kode' => 'B003', 'barang_nama' => 'Lenovo Legion', 'kategori_id' => 1, 'harga_beli' => 10000000, 'harga_jual' => 13000000],
            ['barang_id' => 4, 'barang_kode' => 'B004', 'barang_nama' => 'Macbook Pro', 'kategori_id' => 1, 'harga_beli' => 17000000, 'harga_jual' => 20000000],
            ['barang_id' => 5, 'barang_kode' => 'B005', 'barang_nama' => 'HP Omen', 'kategori_id' => 1, 'harga_beli' => 11000000, 'harga_jual' => 13500000],

            // 5 Barang kategori HP (ID = 2)
            ['barang_id' => 6, 'barang_kode' => 'B006', 'barang_nama' => 'iPhone 13', 'kategori_id' => 2, 'harga_beli' => 10000000, 'harga_jual' => 12000000],
            ['barang_id' => 7, 'barang_kode' => 'B007', 'barang_nama' => 'Samsung Galaxy S22', 'kategori_id' => 2, 'harga_beli' => 9000000, 'harga_jual' => 11000000],
            ['barang_id' => 8, 'barang_kode' => 'B008', 'barang_nama' => 'Xiaomi Mi 11', 'kategori_id' => 2, 'harga_beli' => 6000000, 'harga_jual' => 7000000],
            ['barang_id' => 9, 'barang_kode' => 'B009', 'barang_nama' => 'OnePlus 9', 'kategori_id' => 2, 'harga_beli' => 8500000, 'harga_jual' => 9500000],
            ['barang_id' => 10, 'barang_kode' => 'B010', 'barang_nama' => 'Realme GT', 'kategori_id' => 2, 'harga_beli' => 7000000, 'harga_jual' => 8000000],

            // 5 Barang kategori Kulkas (ID = 3)
            ['barang_id' => 11, 'barang_kode' => 'B011', 'barang_nama' => 'LG Kulkas 2 Pintu', 'kategori_id' => 3, 'harga_beli' => 4000000, 'harga_jual' => 5000000],
            ['barang_id' => 12, 'barang_kode' => 'B012', 'barang_nama' => 'Sharp Kulkas', 'kategori_id' => 3, 'harga_beli' => 3500000, 'harga_jual' => 4500000],
            ['barang_id' => 13, 'barang_kode' => 'B013', 'barang_nama' => 'Samsung Kulkas', 'kategori_id' => 3, 'harga_beli' => 4500000, 'harga_jual' => 5500000],
            ['barang_id' => 14, 'barang_kode' => 'B014', 'barang_nama' => 'Polytron Kulkas', 'kategori_id' => 3, 'harga_beli' => 3700000, 'harga_jual' => 4700000],
            ['barang_id' => 15, 'barang_kode' => 'B015', 'barang_nama' => 'Toshiba Kulkas', 'kategori_id' => 3, 'harga_beli' => 4200000, 'harga_jual' => 5200000],
        ];

        DB::table('m_barang')->insert($data);
    }
}