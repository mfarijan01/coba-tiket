<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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

Route::get('/test-mail', function () {
    Mail::to('parijankunyang@gmail.com')->send(new TestMail());
    return 'ok';
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('/admin');
Route::get('/pengguna',[App\Http\Controllers\PenggunaController::class,'index'])->name('/pengguna');

Route::get('/akun/pelanggan',[App\Http\Controllers\UserController::class,'akunPelanggan'])->name('akun/pelanggan/index');
Route::get('/akun/pelanggan/create',  [App\Http\Controllers\UserController::class,'akunPelangganAdd'])->name('akun/pelanggan/create');  
Route::post('/akun/pelanggan/post',  [App\Http\Controllers\UserController::class,'akunPelangganPost'])->name('akun.pelanggan.post');
Route::get('/akun/pelanggan/index/delete/{id}',  [App\Http\Controllers\UserController::class,'akunPelangganDelete']);

Route::get('/pesan/masuk/',[App\Http\Controllers\pesananmasukController::class,'masuk'])->name('pesan.masuk.index');
Route::post('/pesan/masuk-post',[App\Http\Controllers\pesananmasukController::class,'pesanPost'])->name('pesan.masuk.post');
Route::get('/pesan/masuk/edit/{id}',  [App\Http\Controllers\pesananmasukController::class,'tiketEdit'])->name('pesan.masuk.edit');

Route::get('/pesan/tiket/create',  [App\Http\Controllers\PesmesananController::class,'pesanAdd'])->name('pesan/tiket/create');  
Route::get('/pesan/tiket/',[App\Http\Controllers\PesmesananController::class,'pesan'])->name('pesan.tiket.index');
Route::post('/pesan/tiket-post',[App\Http\Controllers\PesmesananController::class,'pesanPost'])->name('pesan.tiket.post');
Route::get('/pesan/tiket/index/delete/{id}', [App\Http\Controllers\PesmesananController::class,'pesanDel']);
Route::get('/pesan/tiket/detail/{id}',  [App\Http\Controllers\PesmesananController::class,'pesanDetail'])->name('pesan.tiket.detail');
Route::get('/pesan/tiket/edit/{id}',  [App\Http\Controllers\PesmesananController::class,'tiketEdit'])->name('pesan.tiket.edit');
Route::get('/pesan/tiket/cetak/{id}',  [App\Http\Controllers\PesmesananController::class,'cetak'])->name('pesan/tiket/cetak');
Route::get('pesan/masuk/cetak-pdf',  [App\Http\Controllers\PesmesananController::class, 'cetak_pdf']);

Route::get('/pesan/informasi/',[App\Http\Controllers\informasiController::class,'informasi'])->name('pesan.informasi.index');
Route::get('/pesan/informasi/detail/{id}',  [App\Http\Controllers\informasiController::class,'informasiDetail'])->name('pesan.informasi.detail');


Route::get('/profil/tentang-kami',[App\Http\Controllers\profilController::class,'tentang'])->name('/profil/tentang-kami');
Route::get('/profil/kontak',[App\Http\Controllers\profilController::class,'kontak'])->name('/profil/kontak');
Route::get('/profil/video',[App\Http\Controllers\profilController::class,'video'])->name('/profil/video');

Route::get('/kontak/create',  [App\Http\Controllers\kontakController::class,'kontakAdd'])->name('kontak/create');  
Route::get('/kontak',[App\Http\Controllers\kontakController::class,'kontak'])->name('kontak.index');
Route::get('/kontak/create',[App\Http\Controllers\kontakController::class,'wel'])->name('/kontak/create');
Route::post('/kontak-post',[App\Http\Controllers\kontakController::class,'kontakPost'])->name('kontak.post');
Route::get('/kontak/index/delete/{id}', [App\Http\Controllers\kontakController::class,'kontakDel']);
