<?php

namespace App\Http\Controllers;

use App\Models\OduncKitaplar;
use Illuminate\Http\Request;

use App\Models\Uyeler;
use App\Models\Kitaplar;
class OduncController extends Controller
{
    public function index(){

        $order = OduncKitaplar::with(['uyeler', 'kitaplar'])->get();

        return view('oduncler', compact('order'));


    }

    public function kitapver()
    {
        return view('kitapver');
    }

    public function uyelistele()
    {
        $uyeler=Uyeler::orderBy('id')->get();
        return view('uyelistele' ,compact('uyeler'));
    }
    public function uyesecildi($id)
    {
        $uye=Uyeler::findOrFail($id);
        return view('kitapver' ,compact('uye'));

    }

    public function kitaplistele()
    {
       $kitaplar=Kitaplar::orderBy('id')->get();
        return view('kitaplistele' ,compact('kitaplar'));
    }


    public function kitapsec($id)
    {
        $kitap=Kitaplar::findOrFail($id);
        return view('kitapver' ,compact('kitap'));
    }

    public function oduncverildi(Request $request)
    {

        $data = $request->validate([
            'uye_id' => 'required|exists:uyelers,id',
            'kitap_id' => 'required|exists:kitaplar,id',
            'odunc_alinma_tarihi' => 'required|date',
            'odunc_verilecek_tarih' => 'required|date',

        ]);

        $uye = Uyeler::findOrFail($data['uye_id']);
        $kitap = Kitaplar::findOrFail($data['kitap_id']);

        $oduncKitap = OduncKitaplar::create([

            'uye_id' => $uye->id,
            'kitap_id' => $kitap->id,
            'odunc_alinma_tarihi' => $data['odunc_alinma_tarihi'],
            'odunc_verilecek_tarih' => $data['odunc_verilecek_tarih'],


        ]);

        $kitap->update([
            'kitap_durumu'=>'Ödünç Alınmış'
        ]);

        return redirect()->route('odunc');
    }

    public function delete($id){

        $kitap = OduncKitaplar::with(['kitaplar'])->findOrFail($id);
        $kitap->delete();

$kitap->kitaplar->update([
    'kitap_durumu'=>'Mevcut'
]);
        return redirect()->route('odunc');
    }

    public function oduncduzenle($id)
    {
        $or=OduncKitaplar::findOrFail($id);
        return view('oduncduzenle',compact('or'));
    }

    public function update(Request $request ,$id){

        $kitap = OduncKitaplar::findOrFail($id);

            $request->validate([
                'uye_id' => 'required|exists:uyelers,id',
                'odunc_alinma_tarihi' => 'required|date',
                'odunc_verilecek_tarih' => 'required|date',
                'kitap_id' => 'required|exists:kitaplar,id',
            ]);

            $kitap->update([
                'uye_id' => $request->uye_id,
                'odunc_alinma_tarihi' => $request->odunc_alinma_tarihi,
                'odunc_verilecek_tarih' => $request->odunc_verilecek_tarih,
                'kitap_id' => $request->kitap_id,

            ]);


        return redirect()->route('odunc');
    }

    public function verildi($id)
    {

        $kitap = OduncKitaplar::with(['kitaplar'])->findOrFail($id);

        if($kitap && is_null($kitap->geri_verme_tarihi)){
            $kitap->update([
                'geri_verme_tarihi' => now(),
                'durum' => 1,
            ]);

$kitap->kitaplar->update([
    'kitap_durumu'=>'Mevcut'
]);
        }else{

            $kitap->update([]);
        }



        return redirect()->route('odunc');
    }


}
