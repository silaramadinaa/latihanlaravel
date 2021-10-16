<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [ 
            ['realName'=>'Doctor stephen vincent strange', 'heroName'=>'Doctor strange', 'power'=>'Ilmu sihir', 'kindofpower'=>'Ilmu sihir', 'gender'=>'cowo', 'height'=>'170', 'weight'=>'100', 'bornDate'=>'1999-10-11'], 
            ['realName'=>'Thor', 'heroName'=>'Thorr', 'power'=>'Odinforce', 'kindofpower'=>'Odinforce', 'gender'=>'cowo', 'height'=>'171', 'weight'=>'111', 'bornDate'=>'1998-12-11'], 
            ['realName'=>'Carol danvers', 'heroName'=>'Capten marvel', 'power'=>'Kecapatan cahaya', 'kindofpower'=>'Kecapatan cahaya', 'gender'=>'cowo', 'height'=>'172', 'weight'=>'112', 'bornDate'=>'2021-12-12'], 
            ['realName'=>'Sam wilson', 'heroName'=>'Captain amerika', 'power'=>'Tameng', 'kindofpower'=>'Super', 'gender'=>'cowo', 'height'=>'173', 'weight'=>'113', 'bornDate'=>'1997-11-11'], 
            ['realName'=>'Bruce banner', 'heroName'=>'Hulk', 'power'=>'Kuat', 'kindofpower'=>'Kuat', 'gender'=>'cowo', 'height'=>'174', 'weight'=>'114', 'bornDate'=>'1928-04-11'], 
            ['realName'=>'Tony stark', 'heroName'=>'War machine', 'power'=>'Laser', 'kindofpower'=>'Laser', 'gender'=>'cowo', 'height'=>'175', 'weight'=>'115', 'bornDate'=>'1821-03-09'], 
            ['realName'=>'Don heck', 'heroName'=>'Iron man', 'power'=>'Armor', 'kindofpower'=>'Armor', 'gender'=>'cowo', 'height'=>'176', 'weight'=>'116', 'bornDate'=>'1919-04-08'], 
            ['realName'=>'Bruce wayne', 'heroName'=>'Batman', 'power'=>'Mempunyai akal canggih', 'kindofpower'=>'Kecerdasaan', 'gender'=>'cowo', 'height'=>'177', 'weight'=>'117', 'bornDate'=>'1954-09-15'], 
            ['realName'=>'Clak kent', 'heroName'=>'Superman', 'power'=>'Bisa terbang', 'kindofpower'=>'Bisa terbang', 'gender'=>'cowo', 'height'=>'178', 'weight'=>'118', 'bornDate'=>'1991-07-02'], 
            ['realName'=>'Piter parker', 'heroName'=>'Spiderman', 'power'=>'Kecepatan super', 'kindofpower'=>'Kecepatan super', 'gender'=>'cowo', 'height'=>'179', 'weight'=>'119', 'bornDate'=>'1918-10-11']
    ];
// masukkan data ke database 
DB::table('hero')->insert($hero);

    }
}
