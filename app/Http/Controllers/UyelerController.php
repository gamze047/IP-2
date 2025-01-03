<?php

namespace App\Http\Controllers;
use App\Models\OduncKitaplar;
use App\Models\Uyeler;
use App\Models\Yetkiler;
use App\Models\Kitaplar;
use Illuminate\Http\Request;

class UyelerController extends Controller
{
    public function index(){

        $yetki=Uyeler::with('yetki')->get();
        return view('uyeler',compact('yetki'));

    }

    public function create(){

        return view('uyeekleform');
    }

    public function submit(Request $request){

        $validated = $request->validate([
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'sehir' => 'required|string|max:255',
            'dogum_yili' => 'required',
            'telefon' => 'required',
            'mail' => 'required|email|max:255',
            'yetki_id' => 'required',
        ]);

        Uyeler::create($validated);

        return redirect()->route('uyeler');

}
public function destroy($id){

    $uye = Uyeler::findOrFail($id);
    $uye->delete();

    return redirect()->route('uyeler');
}

public function edit($id)
{
    $uye=Uyeler::with('yetki')->find($id);

return view('uye', compact('uye'));
}

public function update(Request $request, $id)
    {
        $uyebilgi = Uyeler::with('yetki')->find($id);

        $request->validate([
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'sehir' => 'required|string|max:255',
            'dogum_yili' => 'required',
            'telefon' => 'required|max:255',
            'mail' => 'required|email|max:255',
            'yetki_id' => 'required',
        ]);


        $uyebilgi->update([
            'ad' => $request->ad,
            'soyad' => $request->soyad,
            'sehir' => $request->sehir,
            'dogum_yili'=>$request->dogum_yili,
            'telefon' =>$request->telefon,
            'mail' => $request->mail,
            'yetki_id' => $request->yetki_id,
        ]);


        return redirect()->route('uyeler');
    }



    public function uyedetay($id)
    {
        $oduncler=OduncKitaplar::where('uye_id',$id)->with('kitaplar')->get();
        $uye=Uyeler::with(['yetki'])->find($id);
        return view('uyebilgileri',compact('uye' ,'oduncler'));
    }
}
