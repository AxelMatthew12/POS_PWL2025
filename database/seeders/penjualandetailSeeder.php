<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 5000000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 3000000, 'jumlah' => 1],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 2000000, 'jumlah' => 1],

            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 4500000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 3500000, 'jumlah' => 1],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 2500000, 'jumlah' => 1],

            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 5500000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 3200000, 'jumlah' => 1],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 2800000, 'jumlah' => 1],

            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 11, 'harga' => 4000000, 'jumlah' => 1],
            ['penjualan_id' => 4, 'barang_id' => 12, 'harga' => 3500000, 'jumlah' => 1],

            ['penjualan_id' => 5, 'barang_id' => 13, 'harga' => 7000000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 14, 'harga' => 4500000, 'jumlah' => 1],
            ['penjualan_id' => 5, 'barang_id' => 15, 'harga' => 5000000, 'jumlah' => 1],

            ['penjualan_id' => 6, 'barang_id' => 1, 'harga' => 5000000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 2, 'harga' => 3000000, 'jumlah' => 1],
            ['penjualan_id' => 6, 'barang_id' => 3, 'harga' => 2000000, 'jumlah' => 1],

            ['penjualan_id' => 7, 'barang_id' => 4, 'harga' => 4500000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 5, 'harga' => 3500000, 'jumlah' => 1],
            ['penjualan_id' => 7, 'barang_id' => 6, 'harga' => 2500000, 'jumlah' => 1],

            ['penjualan_id' => 8, 'barang_id' => 7, 'harga' => 5500000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 8, 'harga' => 3200000, 'jumlah' => 1],
            ['penjualan_id' => 8, 'barang_id' => 9, 'harga' => 2800000, 'jumlah' => 1],

            ['penjualan_id' => 9, 'barang_id' => 10, 'harga' => 6000000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 11, 'harga' => 4000000, 'jumlah' => 1],
            ['penjualan_id' => 9, 'barang_id' => 12, 'harga' => 3500000, 'jumlah' => 1],

            ['penjualan_id' => 10, 'barang_id' => 13, 'harga' => 7000000, 'jumlah' => 1],
            ['penjualan_id' => 10, 'barang_id' => 14, 'harga' => 4500000, 'jumlah' => 1],
            ['penjualan_id' => 10, 'barang_id' => 15, 'harga' => 5000000, 'jumlah' => 1],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
