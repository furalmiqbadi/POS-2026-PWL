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
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Indomie Soto', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'B03', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 9500],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'B04', 'barang_nama' => 'Sarimi', 'harga_beli' => 2200, 'harga_jual' => 2800],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'B05', 'barang_nama' => 'Pop Mie', 'harga_beli' => 4500, 'harga_jual' => 5000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'B06', 'barang_nama' => 'Buavita', 'harga_beli' => 7000, 'harga_jual' => 8500],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'B07', 'barang_nama' => 'Sariwangi', 'harga_beli' => 5000, 'harga_jual' => 6500],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'B08', 'barang_nama' => 'Pocari Sweat', 'harga_beli' => 6000, 'harga_jual' => 7500],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'B09', 'barang_nama' => 'Floridina', 'harga_beli' => 3000, 'harga_jual' => 3500],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'B10', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3500, 'harga_jual' => 4000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'B11', 'barang_nama' => 'Xiaomi 13T', 'harga_beli' => 6000000, 'harga_jual' => 6500000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'B12', 'barang_nama' => 'Xiaomi Pad 6', 'harga_beli' => 4500000, 'harga_jual' => 5000000],
            ['barang_id' => 13, 'kategori_id' => 4, 'barang_kode' => 'B13', 'barang_nama' => 'Redmi Watch', 'harga_beli' => 800000, 'harga_jual' => 1000000],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'B14', 'barang_nama' => 'Xiaomi Powerbank', 'harga_beli' => 250000, 'harga_jual' => 350000],
            ['barang_id' => 15, 'kategori_id' => 4, 'barang_kode' => 'B15', 'barang_nama' => 'Xiaomi Earphone', 'harga_beli' => 100000, 'harga_jual' => 150000],
        ];
        DB::table('m_barang')->insert($data);

    }
}
