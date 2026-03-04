<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => ceil($i / 5), // Membagi 15 barang ke 3 supplier (5 barang/supplier)
                'barang_id' => $i,
                'user_id' => 1, // ID Admin
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}