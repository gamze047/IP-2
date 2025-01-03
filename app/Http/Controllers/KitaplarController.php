<?php

namespace App\Http\Controllers;

use App\Models\Kategoriler;
use Illuminate\Http\Request;
use  App\Models\Kitaplar;
class KitaplarController extends Controller
{

    public function index(Request $request)
    {
        $query = Kitaplar::query();

        if ($request->filled('kitap_turu')) {
            $query->where('kitap_turu', $request->kitap_turu);
        }

        $kitaplar = $query->with('kategoriler')->orderBy('id')->get();


        return view('kitaplar', compact('kitaplar'));
    }

    public function kitapekle()
    {
        $kitap=Kategoriler::orderBy('id')->get();
        return view('kitapekle' ,compact('kitap'));
    }

    public function kitapform(Request $request)
    {

        $validateddata = $request->validate([

            'kitap_adi' => 'required|string|max:255',
            'yazar' => 'required|string|max:255',
            'yayin_yili' => 'required|string|max:255',
            'yayin_evi' => 'required|string|max:255',
            'kitap_aciklama' => 'required|string|max:255',
            'kitap_turu' => 'required',

        ]);

        Kitaplar::create($validateddata);

        return redirect()->route('kitaplar');

    }

    public function kitapdelete($id){

        $kitap = Kitaplar::findOrFail($id);
        $kitap->delete();

        return redirect()->route('kitaplar');
    }


    public function kitapduzenle($id)
    {
        $kitap = Kitaplar::findOrFail($id);
        return view('kitapduzenle', compact('kitap'));
    }

    public function kitapedit(Request $request, $id)
    {
        $kitap = Kitaplar::findOrFail($id);

        $request->validate([
            'kitap_adi' => 'required|string|max:255',
            'yazar' => 'required|string|max:255',
            'yayin_evi' => 'required|string|max:255',
            'yayin_yili' => 'required|string|max:255',
            'kitap_aciklama' => 'required|string|max:255',
            'kitap_turu' => 'required',

        ]);

        $kitap->update([
            'kitap_adi' => $request->kitap_adi,
            'yazar' => $request->yazar,
            'yayin_evi' => $request->yayin_evi,
            'yayin_yili' => $request->yayin_yili,
            'kitap_aciklama' =>$request->kitap_aciklama,
            'kitap_turu' => $request->kitap_turu,

        ]);

        return redirect()->route('kitaplar');
    }


    public function filtrele()
    {
        $kitaplar = Kitaplar::orderBy('id')->get('kitap_adi');
        return view('kitaplar', compact('kitaplar'));

    }

    public function kitapdetay($id)
    {
        $kitap = Kitaplar::with('kategoriler')->find($id);
        return view('detaylikitapbilgi', compact('kitap'));

    }


}
