<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KategoriBeritaController;
use App\Http\Controllers\Admin\PenulisController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ServiceappController;
use App\Http\Controllers\Admin\KontenController;
use App\Http\Controllers\BacaIn;

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

Route::get('/index', [BacaIn::class,'index'])->name('baca.index');
Route::get('/single', [BacaIn::class,'show']);






Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfilController::class,'index'])
    ->name('admin.profil');
});

Route::get('/profil.{id}.edit', [ProfilController::class,'edit']);

Route::put('/profil.{id}', [ProfilController::class,'update']);




Route::middleware('auth')->group(function () {
Route::get('/kategoriberita', [KategoriBeritaController::class,'index'])->name('admin.kategoriberita');
});

Route::middleware('auth')->group(function () {
Route::get('/kategoriberita.cari', [KategoriBeritaController::class,'search']);
});

Route::middleware('auth')->group(function () {
Route::get('/kategoriberita.tambah', [KategoriBeritaController::class,'create']);
});

Route::middleware('auth')->group(function () {
Route::post('/kategoriberita', [KategoriBeritaController::class,'store']);
});

Route::get('/kategoriberita.{id}.edit', [KategoriBeritaController::class,'edit']);

Route::put('/kategoriberita.{id}', [KategoriBeritaController::class,'update']);

Route::delete('/kategoriberita.{id}', [KategoriBeritaController::class,'destroy']);




Route::middleware('auth')->group(function () {
Route::get('/penulis', [PenulisController::class,'index'])
    ->name('admin.penulis');
});

Route::middleware('auth')->group(function () {    
Route::get('/penulis.cari', [PenulisController::class,'search']);
});

Route::middleware('auth')->group(function () {    
Route::get('/penulis.tambah', [PenulisController::class,'create']);
});

Route::middleware('auth')->group(function () {    
Route::post('/penulis', [PenulisController::class,'store']);
});

Route::get('/penulis.{id}.edit', [PenulisController::class,'edit']);

Route::put('/penulis.{id}', [PenulisController::class,'update']);

Route::delete('/penulis.{id}', [PenulisController::class,'destroy']);




Route::middleware('auth')->group(function () {    
Route::get('/tag', [TagController::class,'index'])
    ->name('admin.tag');
});

Route::middleware('auth')->group(function () {        
Route::get('/tag.cari', [TagController::class,'search']);
});

Route::middleware('auth')->group(function () {    
Route::get('/tag.tambah', [TagController::class,'create']);
});

Route::middleware('auth')->group(function () {    
Route::post('/tag', [TagController::class,'store']);
});

Route::get('/tag.{id}.edit', [TagController::class,'edit']);

Route::put('/tag.{id}', [TagController::class,'update']);

Route::delete('/tag.{id}', [TagController::class,'destroy']);




Route::middleware('auth')->group(function () {    
Route::get('/servicesatu', [ServiceappController::class,'index'])
    ->name('admin.servicesatu');
});

Route::get('/servicesatu.{id}.edit', [ServiceappController::class,'edit']);

Route::put('/servicesatu.{id}', [ServiceappController::class,'update']);

Route::get('/servicesatu.{id}', [ServiceappController::class,'show']);



Route::middleware('auth')->group(function () {    
Route::get('/konten', [KontenController::class,'index'])
    ->name('admin.konten');
});

Route::middleware('auth')->group(function () {    
Route::get('/konten.cari', [KontenController::class,'search']);
});

Route::middleware('auth')->group(function () {    
Route::get('/konten.tambah', [KontenController::class,'create']);
});

Route::middleware('auth')->group(function () {    
Route::post('/konten', [KontenController::class,'store']);
});

Route::get('/konten.{id}.edit', [KontenController::class,'edit']);

Route::put('/konten.{id}', [KontenController::class,'update']);

Route::delete('/konten.{id}', [KontenController::class,'destroy']);

Route::get('/konten.{id}', [KontenController::class,'show']);





Route::middleware('auth')->group(function () {
Route::get('/users', [UsersController::class,'index'])
->name('admin.users');
});

Route::middleware('auth')->group(function () {
Route::get('/users.cari', [UsersController::class,'search']);
});

Route::middleware('auth')->group(function () {
Route::get('/users.tambah', [UsersController::class,'create']);
});

Route::get('/users.{id}.edit', [UsersController::class,'edit']);

Route::delete('/users.{id}', [UsersController::class,'destroy']);

Route::put('/users.{id}', [UsersController::class,'update']);

Route::get('/users.{id}.detail', [UsersController::class,'show']);

Route::middleware('auth')->group(function () {
Route::post('/users', [UsersController::class,'store']);
});



Route::middleware('auth')->group(function () {  
Route::get('/berita', [BeritaController::class,'index'])-> name('admin.berita');
});

Route::middleware('auth')->group(function () {  
Route::get('/berita.cari', [BeritaController::class,'search']);
});

Route::middleware('auth')->group(function () {  
Route::get('/berita.tambah', [BeritaController::class,'create']);
});

Route::middleware('auth')->group(function () {  
Route::post('/berita', [BeritaController::class,'store']);
});

Route::get('/berita.{id}.edit', [BeritaController::class,'edit']);

Route::put('/berita.{id}', [BeritaController::class,'update']);

Route::delete('/berita.{id}', [BeritaController::class,'destroy']);

Route::get('/berita.{id}.detail', [BeritaController::class,'show']);





Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);

Route::get('/logout', [LoginController::class,'logout']);





Route::get('/', function () {
    return view('welcome');
});





//Auth::routes();
Route::middleware('auth')->group(function () {
Route::get('/home',  [ProfilController::class,'index'])
->name('admin.profil');
});