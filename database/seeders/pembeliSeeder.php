<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Lala','jns_kelamin'=>'Wanita','alamat'=>'Cibaduyut','kode_pos'=>1001,'kota'=>'Bandung','tgl_lahir'=>'2004-10-13'],
            ['nama'=>'Rifa','jns_kelamin'=>'Wanita','alamat'=>'Garut','kode_pos'=>1002,'kota'=>'Garut','tgl_lahir'=>'2003-01-14'],
            ['nama'=>'Silvi','jns_kelamin'=>'Wanita','alamat'=>'Cangkuang','kode_pos'=>1003,'kota'=>'Bandung','tgl_lahir'=>'2004-02-15'],
            ['nama'=>'Rio','jns_kelamin'=>'Pria','alamat'=>'Soreang','kode_pos'=>1004,'kota'=>'Bandung','tgl_lahir'=>'2004-03-16'],
            ['nama'=>'Ripa','jns_kelamin'=>'Pria','alamat'=>'Kopo','kode_pos'=>1005,'kota'=>'Bandung','tgl_lahir'=>'2004-04-17']
        ];
        // masukkan data ke database 
        DB::table('pembeli')->insert($pembeli);
    }
}
