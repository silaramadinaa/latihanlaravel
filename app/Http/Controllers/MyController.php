<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\barang;
use App\Models\pesanan;
use App\Models\pembelian;
use App\Models\pembeli;
use App\Models\suplier;
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
    public function barang()
    {
        $barang=barang::all();
        return view('barang1', compact('barang'));
    }
    public function pesanan()
    {
        $pesanan=pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
    public function pembelian()
    {
        $pembelian=pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
    public function pembeli()
    {
        $pembeli=pembeli::all();
        return view('pembeli1', compact('pembeli'));
    }
    public function suplier()
    {
        $suplier=suplier::all();
        return view('suplier', compact('suplier'));
    }
    public function barangbang($id)
    {
        $barang=barang::findOrFail($id);
        return view('barangbarang', compact ('barang'));
    }
    public function pesansan($id)
    {
        $pesanan=pesanan::findOrFail($id);
        return view('pesanpesan', compact ('pesanan'));
    }
    public function pembelianpem($id)
    {
        $pembelian=pembelian::findOrFail($id);
        return view('pembelianpembelian', compact ('pembelian'));
    }
    public function pembelipem($id)
    {
        $pembeli=pembeli::findOrFail($id);
        return view('pembelipembeli', compact ('pembeli'));
    }
    public function supliersup($id)
    {
        $suplier=suplier::findOrFail($id);
        return view('supliersuplier', compact ('suplier'));
    }
}
