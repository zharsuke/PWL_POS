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
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/1',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/2',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/3',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/4',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/5',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/6',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/7',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/8',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/9',
                'penjualan_tanggal' => '2021-01-01',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'yanuar',
                'penjualan_kode' => 'INV/20210101/10',
                'penjualan_tanggal' => '2021-01-01',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
