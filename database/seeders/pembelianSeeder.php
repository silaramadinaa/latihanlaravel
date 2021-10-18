<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Asus vivobook','nama_suplier'=>'Lala','qty'=>2,'tgl'=>'2021-10-11'],
            ['nama_barang'=>'Lenovo thinkpad','nama_suplier'=>'Rifa','qty'=>1,'tgl'=>'2021-10-16'],
            ['nama_barang'=>'Notebook travelmate','nama_suplier'=>'Silvi','qty'=>3,'tgl'=>'2021-10-20'],
            ['nama_barang'=>'Macbook pro 2012','nama_suplier'=>'Rio','qty'=>4,'tgl'=>'2021-11-01'],
            ['nama_barang'=>'Lenovo chromebook','nama_suplier'=>'Ripa','qty'=>1,'tgl'=>'2021-11-10']
        ];
        // masukkan data ke database 
        DB::table('pembelian')->insert($pembelian);
    }
}
