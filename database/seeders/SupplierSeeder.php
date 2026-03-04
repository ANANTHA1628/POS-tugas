<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'S01', 'supplier_nama' => 'PT Makmur Jaya', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'S02', 'supplier_nama' => 'CV Abadi Sentosa', 'supplier_alamat' => 'Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'S03', 'supplier_nama' => 'Toko Serba Ada', 'supplier_alamat' => 'Surabaya'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}