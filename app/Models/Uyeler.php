<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class Uyeler extends Model
{
    use HasFactory;
    protected $casts=[
        'dogum_yili'=>'date'
    ];

    public function odunckitaplar()
    {
        return $this->hasMany(OduncKitaplar::class);
    }

    public function yetki()
    {
        return $this->belongsTo(Yetkiler::class,'yetki_id');
    }


protected $table = 'uyelers';
protected $fillable = ['ad','soyad','sehir', 'dogum_yili','telefon','mail','yetki_id'];
}
