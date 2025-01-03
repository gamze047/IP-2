<?php

use App\Http\Controllers\OduncController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Linkler;
use App\Http\Controllers\Anasayfa;
use App\Http\Controllers\UyelerController;
use App\Http\Controllers\KitaplarController;
use App\Http\Controllers\EtkinlikController;


Route::get('/', [Anasayfa::class, 'durum'] )->name('home');

Route::get('/kitaplar', [KitaplarController::class, 'index'] )->name('kitaplar');
Route::get('/kitapekle', [KitaplarController::class, 'kitapekle'] )->name('kitapekle');
Route::post('/kitapform',[KitaplarController::class,'kitapform'] )->name('kitapform');
Route::get('/filtrele',[KitaplarController::class,'filtrele'] )->name('filtrele');
Route::get('/kitaplar/{id}', [KitaplarController::class, 'kitapdelete'])->name('kitapdelete');
Route::get('/kitapduzenle/{id}', [KitaplarController::class, 'kitapduzenle'])->name('kitapduzenle');
Route::put('/kitapedit/{id}', [KitaplarController::class, 'kitapedit'])->name('kitapedit');
Route::get('/kitapdetay{id}', [KitaplarController::class, 'kitapdetay'])->name('kitapdetay');


Route::get('/uyeler', [UyelerController::class, 'index'] )->name('uyeler');
Route::get('/uyeekle', [UyelerController::class, 'create'] )->name('uyeekle');
Route::post('/submit',[UyelerController::class,'submit'] )->name('submit');
Route::get('/uyedetay{id}', [UyelerController::class, 'uyedetay'])->name('uyedetay');
Route::get('/uyeler/{id}', [UyelerController::class, 'destroy'])->name('delete');
Route::get('/duzenle/{id}', [UyelerController::class, 'edit'])->name('duzenle');
Route::put('/uyeduzen/{id}', [UyelerController::class, 'update'])->name('uyeupdate');


Route::get('/etkinlikler', [EtkinlikController::class, 'index'] )->name('etkinlikler');
Route::get('/etkinlikekle', [EtkinlikController::class, 'etkinlikekle'] )->name('etkinlikekle');
Route::post('/etkinlikform',[EtkinlikController::class,'etkinlikform'] )->name('etkinlikform');
Route::get('/filtrele',[EtkinlikController::class,'filtrele'] )->name('etkinlikfiltrele');
Route::get('/etkinlik/{id}', [EtkinlikController::class, 'etkinlikdelete'])->name('etkinlikdelete');
Route::get('/etkinlikedit/{id}', [EtkinlikController::class, 'etkinlikedit'])->name('etkinlikedit');
Route::put('/etkinlikupdate/{id}', [EtkinlikController::class, 'etkinlikupdate'])->name('etkinlikupdate');



Route::get('/odunc',[OduncController::class,'index'])->name('odunc');
Route::get('/kitapver',[OduncController::class,'kitapver'])->name('kitapver');
Route::get('/uyelistele',[OduncController::class,'uyelistele'])->name('uyelistele');
Route::get('/kitaplistele',[OduncController::class,'kitaplistele'])->name('kitaplistele');

Route::get('/uyesecildi/{id}',[OduncController::class,'uyesecildi'])->name('uyesecildi');
Route::get('/kitapsec/{id}',[OduncController::class,'kitapsec'])->name('kitapsec');
Route::post('/oduncverildi',[OduncController::class,'oduncverildi'])->name('oduncverildi');
Route::get('/delete/{id}',[OduncController::class,'delete'])->name('delete');
Route::get('/updatescreen/{id})',[OduncController::class,'oduncduzenle'])->name('oduncduzenle');
Route::put('/update/{id}',[OduncController::class,'update'])->name('update');
Route::get('/verildi/{id}',[OduncController::class,'verildi'])->name('verildi');


