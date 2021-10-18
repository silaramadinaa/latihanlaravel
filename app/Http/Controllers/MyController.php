<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
class MyController extends Controller
{
    public function latihan()
    {
        $result="Latihan Controller";
        return view('latihan', compact('result'));
    }
    public function biodata()
    {
        $nama="Sila Ramadina";
        $umur=17;
        $alamat="Bandung";
        $citacita="Psikolog";
        $hobi="Nonton drakor";
        return view('biodata1', compact('nama','umur','alamat','citacita','hobi'));
    }
    public function bio()
    {
        //mengambil semua data dari model biodata
        $bio=Biodata::all();
        return view ('bio', compact('bio'));
    }
}
