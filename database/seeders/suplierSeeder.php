<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Lala','alamat'=>'Cibaduyut','kode_pos'=>1001,'kota'=>'Bandung'],
            ['nama'=>'Rifa','alamat'=>'Garut','kode_pos'=>1002,'kota'=>'Garut'],
            ['nama'=>'Silvi','alamat'=>'Cangkuang','kode_pos'=>1003,'kota'=>'Bandung'],
            ['nama'=>'Rio','alamat'=>'Soreang','kode_pos'=>1004,'kota'=>'Bandung'],
            ['nama'=>'Ripa','alamat'=>'Kopo','kode_pos'=>1005,'kota'=>'Bandung']
        ];
        // masukkan data ke database 
        DB::table('suplier')->insert($suplier);
    }
}
