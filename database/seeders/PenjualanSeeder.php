<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Pelanggan A', 'penjualan_kode' => 'PJ01', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Pelanggan B', 'penjualan_kode' => 'PJ02', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Pelanggan C', 'penjualan_kode' => 'PJ03', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Pelanggan D', 'penjualan_kode' => 'PJ04', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Pelanggan E', 'penjualan_kode' => 'PJ05', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Pelanggan F', 'penjualan_kode' => 'PJ06', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Pelanggan G', 'penjualan_kode' => 'PJ07', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Pelanggan H', 'penjualan_kode' => 'PJ08', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Pelanggan I', 'penjualan_kode' => 'PJ09', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Pelanggan J', 'penjualan_kode' => 'PJ10', 'penjualan_tanggal' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
