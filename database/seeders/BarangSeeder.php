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
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MKN-001',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 10000, 
                'harga_jual' => 15000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MKN-002',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 8000,
                'harga_jual' => 12000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MNM-001',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 3000,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MNM-002',
                'barang_nama' => 'Es Jeruk',
                'harga_beli' => 4000, 
                'harga_jual' => 6000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SKC-001',
                'barang_nama' => 'Ponds',
                'harga_beli' => 15000, 
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SKC-002',
                'barang_nama' => 'Garnier',
                'harga_beli' => 20000, 
                'harga_jual' => 25000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KSR-001',
                'barang_nama' => 'Obat Batuk',
                'harga_beli' => 8000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'KSR-002',
                'barang_nama' => 'Vitamin C',
                'harga_beli' => 12000, 
                'harga_jual' => 15000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BJU-001',
                'barang_nama' => 'Kaos Oblong',
                'harga_beli' => 40000,
                'harga_jual' => 50000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BJU-002',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 120000,
                'harga_jual' => 150000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
