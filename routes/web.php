<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function() {
    return view('tentang');
});
Route::get('profile', function () {
    $nama="Sila";
    return view('profile', compact('nama'));
});
Route::get('data', function () {
    $nama="Sila";
    $umur=17;
    $alamat="Bandung";
    $citacita="Psikologi";
    $hobi="Menari daerah";
    return view('biodata', compact('nama','umur','alamat','citacita','hobi'));
});
Route::get('barang', function () {
    $idbarang=1001;
    $namabarang="Meja";
    $harga=100000;
    $stok=10;
    $idsup=2001;
    return view('barang', compact('idbarang','namabarang','harga','stok','idsup'));
});
Route::get('supplier', function () {
    $idsup=1002;
    $namasup="Bunga";
    $notelp="087655443";
    $alamat="Jakarta";
    return view('supplier', compact('idsup','namasup','notelp','alamat'));
});
Route::get('transaksi', function () {
    $idtransaksi=1003;
    $idbarang="Meja";
    $idpembeli="Bunga";
    $tanggal="14 oktober 2021";
    $keterangan="Sedang Transaksi";
    return view('transaksi', compact('idtransaksi','idbarang','idpembeli','tanggal','keterangan'));
});
Route::get('pembayaran', function () {
    $idpembayaran=1004;
    $tglbayar="15 oktober 2021";
    $totalbayar=1000000;
    $idtransaksi=1003;
    return view('pembayaran', compact('idpembayaran','tglbayar','totalbayar','idtransaksi'));
});
Route::get('pembeli', function () {
    $idpembeli=1005;
    $namapembeli="Bunga";
    $jk="Perempuan";
    $notelp="087655443";
    $alamat="Jakarta";
    return view('pembeli', compact('idpembeli','namapembeli','jk','notelp','alamat'));
});
//Route parameter
Route::get('post/{halaman?}', function ($a="Tidak ada halaman") {
    return view('post', ['posting' => $a]);
});
Route::get('book', function () {
    $books= [
        ['id' =>1,'title'=>'Belajar laravel itu mudah'],
        ['id' =>2,'title'=>'Belajar baca huruf hijaiyah'],
        ['id' =>3,'title'=>'Belajar baca aksara sunda'],
    ];
    return view('book', compact('books'));
});
//tampilkan data dari format berikut dalam sebuah view
Route::get('film', function () {
    $penthouse= [
        ['id'=>1,'judul'=>'The penthouse','sinopsis'=>'Lorem ipsum',
        'penulis'=>'Kim soon ok','bahasa'=>'Korea','aktor'=>[
            'aktor1'=>'Lee ji ah',
            'aktor2'=>'Kim so yeon',
            'aktor3'=>'Han ji hyun',
            ]
        ],
        ['id'=>2,'judul'=>'I love you silly','sinopsis'=>'Lorem ipsum',
        'penulis'=>'Manoj punjabi','bahasa'=>'Indoensia','aktor'=>[
            'aktor1'=>'Prilly',
            'aktor2'=>'Jordy',
            'aktor3'=>'shenina',
        ]
        ],
        ['id'=>3,'judul'=>'Dots','sinopsis'=>'Lorem ipsum',
        'penulis'=>'Kim eun sook','bahasa'=>'Korea','aktor'=>[
            'aktor1'=>'Song joong ki',
            'aktor2'=>'Song hye kyo',
            'aktor3'=>'Kim ji won',
        ]
        ],
        ['id'=>4,'judul'=>'A quiet place','sinopsis'=>'Lorem ipsum',
        'penulis'=>'Bryan woods','bahasa'=>'Inggris','aktor'=>[
            'aktor1'=>'Cillian murphy',
            'aktor2'=>'Emily blunt',
            'aktor3'=>'Millicient simmonds',
        ]
        ],
        ['id'=>5,'judul'=>'True beauty','sinopsis'=>'Lorem ipsum',
        'penulis'=>'The secret of angel','bahasa'=>'korea','aktor'=>[
            'aktor1'=>'Hwang in yeop',
            'aktor2'=>'Moon ga young',
            'aktor3'=>'Cha eun wo',
        ]
        ]
        ];
        return view('film', compact('penthouse'));
});
//Buatlah route "bio" dengan parameter 
//nama,umur dan alamat
Route::get('bio/{nama}/{umur}/{alamat}', function($b,$c,$d) {
    return "<h1>Biodata</h1>"
    . "Nama : $b"
    . "<br>Umur : $c"
    . "<br>Alamat : $d";
});
//Route optional parameter
Route::get('hal/{halaman}', function ($a=1) {
    return "Halaman post ke - <b>$a</b>";
});
//tugas
Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a=null,$b=null,$c=null) {
    if ($a == null && $b == null && $c == null){
        $pesan="Anda tidak memesan , Silahkan pulang!!!";
    } if ($a != null) {
        $pesan="<h1>Restoran Sila</h1>"
        . "<br>Anda memesan makanan : $a";
    } if ($a != null && $b != null) {
        $pesan="<h1>Restoran Sila</h1>"
        . "<br> Anda memesan makanan : $a"
        . "<br> Anda memesan minuman : $b";
    } if ($a != null && $b != null && $c != null) {
        $pesan="<h1>Restoran Sila</h1>"
        . "<br> Anda memesan makanan : $a"
        . "<br> Anda memesan minuman : $b"
        . "<br> Anda memesan cemilan : $c";
    }
    return "$pesan";
});
Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});
Route::get('/testmodel2', function () {
    $query = App\Models\Post::find(1);
    return $query;
});
Route::get('/testmodel3', function () {
    $query = App\Models\Post::where('title','like','%i%')->get();
    return $query;
});
Route::get('/testmodel4', function () {
    $post = App\Models\Post::find(1); 
    $post->title = "Tips Cepat NKH"; 
    $post->save(); return $post;
});
Route::get('/testmodel5', function () {
    $post = App\Models\Post::find(1); 
    $post->delete(); 
});
Route::get('/testmodel6', function () {
    $post = new App\Models\Post; 
    $post->title = "8 Amalan Pembuka Jodoh"; 
    $post->content = "shalat malam"; 
    $post->save(); return $post; 
});
Route::get('testpost', function () {
    $query=App\Models\Post::all();
    return view('test-post', compact('query'));
});
Route::get('hero', function () {
    $query=App\Models\hero::all();
    return view('hero', compact('query'));
});
Route::get('testhero', function () {
    $query = App\Models\hero::all();
    return $query;
});
//Route view
Route::get('beranda', function () {
    return view('beranda');
});
//Route Controller 
route::get('latihan-controller', 
[MyController::class,'latihan']
);
route::get('biodata-saya',
[MyController::class,'biodata']
);
Route::get('bio',[MyController::class,'bio']);
Route::get('barang',[MyController::class,'barang']);
Route::get('pesanan',[MyController::class,'pesanan']);
Route::get('pembelian',[MyController::class,'pembelian']);
Route::get('pembeli1',[MyController::class,'pembeli']);
Route::get('suplier',[MyController::class,'suplier']);
Route::get('/barang/{id}', [MyController::class, 'barangbang']);
Route::get('/pesanan/{id}', [MyController::class, 'pesansan']);
Route::get('/pembelian/{id}', [MyController::class, 'pembelianpem']);
Route::get('/pembeli/{id}', [MyController::class, 'pembelipem']);
Route::get('/suplier/{id}', [MyController::class, 'supliersup']);
?>