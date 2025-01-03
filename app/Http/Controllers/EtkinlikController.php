<?php

namespace App\Http\Controllers;

use App\Models\Etkinlikler;
use Illuminate\Http\Request;

class EtkinlikController extends Controller
{
   public function index(){

       $etkinlikler=Etkinlikler::orderBy('created_at','desc')->get();


       return view('etkinlikler',compact('etkinlikler' ));
   }

   public function etkinlikekle(){

       return view('etkinlikekle');
   }

    public function etkinlikform(Request $request)
    {

        $etkinlikdata = $request->validate([

            'etkinlik_adi' => 'required|string|max:255',
            'etkinlik_icerigi' => 'required|string|max:255',
            'etkinlik_yeri' => 'required|string|max:255',
            'etkinlige_katilacaklar' => 'required|string|max:255',
            'etkinligi_yonetenler' => 'required|string|max:255',
            'etkinlik_tarihi' => 'required|string|max:255',
            'etkinlik_durum' => 'required|string|max:255',

        ]);

        Etkinlikler::create($etkinlikdata);

        return redirect()->route('etkinlikler');
    }

    public function etkinlikdelete($id){

        $etkinlik = Etkinlikler::findOrFail($id);
        $etkinlik->delete();

        return redirect()->route('etkinlikler');
    }

    public function etkinlikedit($id)
    {
        $etkinlik=Etkinlikler::findOrFail($id);
        return view('etkinlikduzenle',compact('etkinlik'));
    }
    public function etkinlikupdate(Request $request, $id)
    {
        $etkinlik = Etkinlikler::findOrFail($id);

        $request->validate([
            'etkinlik_adi' => 'required|string|max:255',
            'etkinlik_icerigi' => 'required|string|max:255',
            'etkinlik_yeri' => 'required|string|max:255',
            'etkinlige_katilacaklar' => 'required|string|max:255',
            'etkinligi_yonetenler' => 'required|string|max:255',
            'etkinlik_tarihi' => 'required|string|max:255',
            'etkinlik_durum' => 'required|string|max:255',
        ]);

        $etkinlik->update([
            'etkinlik_adi' => $request->etkinlik_adi,
            'etkinlik_icerigi' => $request->etkinlik_icerigi,
            'etkinlik_yeri' => $request->etkinlik_yeri,
            'etkinlige_katilacaklar' => $request->etkinlige_katilacaklar,
            'etkinligi_yonetenler' => $request->etkinligi_yonetenler,
            'etkinlik_tarihi' => $request->etkinlik_tarihi,
            'etkinlik_durum' => $request->etkinlik_durum,
        ]);


        return redirect()->route('etkinlikler');
    }






}
