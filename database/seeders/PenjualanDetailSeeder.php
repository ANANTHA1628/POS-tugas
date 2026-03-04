<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        for ($i = 1; $i <= 10; $i++) { // Loop 10 transaksi
            for ($j = 1; $j <= 3; $j++) { // Loop 3 barang per transaksi
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 15), // Acak ID barang 1-15
                    'harga' => 15000,
                    'jumlah' => 1,
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}