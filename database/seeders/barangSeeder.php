<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Laptop Asus','varian'=>'Asus vivobook','harga_beli'=>6000000,'harga_jual'=>6842000],
            ['nama'=>'Laptop Lenovo','varian'=>'Lenovo Thinkpad','harga_beli'=>2000000,'harga_jual'=>2688000],
            ['nama'=>'Laptop Acer','varian'=>'Notebook travelmate','harga_beli'=>5000000,'harga_jual'=>5585000],
            ['nama'=>'Macbook Pro','varian'=>'Macbook pro 2012','harga_beli'=>7100000,'harga_jual'=>7300000],
            ['nama'=>'Laptop Lenovo','varian'=>'Lenovo chromebook','harga_beli'=>3900000,'harga_jual'=>3999000]
        ];
        // masukkan data ke database 
        DB::table('barang')->insert($barang);
    }
}
