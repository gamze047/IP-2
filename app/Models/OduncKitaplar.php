<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OduncKitaplar extends Model
{
    protected $casts =[

        'odunc_alinma_tarihi' => 'date',
    'odunc_verilecek_tarih' => 'date',
        'geri_verme_tarihi'=>'date',

];

public function kitaplar()
{
    return $this->belongsTo(Kitaplar::class,'kitap_id');
}

    public function uyeler()
    {
        return $this->belongsTo(Uyeler::class,'uye_id');
    }


    protected $table = 'odunc_kitaplars';
    protected $fillable = ['id','uye_id','odunc_alinma_tarihi', 'odunc_verilecek_tarih','kitap_id' ,'geri_verme_tarihi','durum'];
}
