<?php

use Illuminate\Support\Facades\Route;

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
    return '<h1>Hello</h1>'
    . "<br> Selamat datang di webapp saya"
    . "<br> Laravel emang keren";
});
Route::get('profile', function () {
    $nama="Sila";
    return "Nama Saya <b>$nama</b>";
});
Route::get('post', function () {
    return "Halaman post 1";
});
//Route parameter
Route::get('post/{id}', function ($a) {
    return "Halaman post ke - <b>$a</b>";
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
?>