<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['name'=>'Sila Ramadina','gender'=>'Wanita','bornDate'=>'2004-10-13','weight'=>'165','height'=>'45'],
            ['name'=>'Rizky DP','gender'=>'Pria','bornDate'=>'2003-01-01','weight'=>'50','height'=>'170']
        ];
        DB::table('biodatas')->insert($bio);
    }
}
