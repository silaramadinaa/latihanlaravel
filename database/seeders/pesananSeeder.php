<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan'=>'Lala','nama_barang'=>'Asus vivobook','qty'=>2,'tgl_pesan'=>'2021-10-11'],
            ['nama_pelanggan'=>'Rifa','nama_barang'=>'Lenovo thinkpad','qty'=>1,'tgl_pesan'=>'2021-10-16'],
            ['nama_pelanggan'=>'Silvi','nama_barang'=>'Notebook travelmate','qty'=>3,'tgl_pesan'=>'2021-10-20'],
            ['nama_pelanggan'=>'Rio','nama_barang'=>'Macbook pro 2012','qty'=>4,'tgl_pesan'=>'2021-11-01'],
            ['nama_pelanggan'=>'Ripa','nama_barang'=>'Lenovo chromebook','qty'=>1,'tgl_pesan'=>'2021-11-10']
        ];
        // masukkan data ke database 
        DB::table('pesanan')->insert($pesanan);
    }
}
