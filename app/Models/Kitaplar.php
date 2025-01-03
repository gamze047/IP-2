<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Anasayfa;

class Kitaplar extends Model
{

    protected $casts = [
        'yayin_yili' => 'date',
    ];

    public function kategoriler()
    {
        return $this->belongsTo(Kategoriler::class, 'kitap_turu');
    }

    public function odunckitaplar()
    {
        return $this->hasMany(OduncKitaplar::class);
    }

    protected $table='kitaplar';
    protected $fillable=['id','kitap_adi' ,'yazar' , 'yayin_yili', 'yayin_evi','kitap_aciklama', 'kitap_turu' ,'kitap_durumu'];
}

