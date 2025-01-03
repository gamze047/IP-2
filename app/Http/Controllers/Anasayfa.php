<?php

namespace App\Http\Controllers;
use App\Models\Etkinlikler;
use App\Models\OduncKitaplar;
use App\Models\Uyeler;
use App\Models\Kitaplar;
use Illuminate\Http\Request;

class Anasayfa extends Controller
{
    public function durum(){

$kitap_sayisi=Kitaplar::distinct()->count('id') ;
$uye_sayisi=Uyeler::class::distinct()->count('id');
$uyeler=Uyeler::orderBy('id')->with('yetki')->get();

$etkinlik=Etkinlikler::distinct()->count('id');
$etkinlikadi=Etkinlikler::orderBy('id')->get();
$etkinliksuan=Etkinlikler::where('etkinlik_durum' ,'Yapılıyor')->get();

$odunc=OduncKitaplar::where('durum','0')->count('durum');

return view('anasayfa',compact('kitap_sayisi','uye_sayisi' ,'uyeler','etkinlik',
'etkinlikadi' ,'etkinliksuan','odunc'));
    }


}
