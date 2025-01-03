<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etkinlikler extends Model
{

    protected $casts = [
        'etkinlik_tarihi' => 'date',
    ];

    protected $table = 'etkinliklers';
    protected $fillable = ['etkinlik_adi', 'etkinlik_icerigi', 'etkinlik_yeri',
        'etkinlige_katilacaklar',
        'etkinligi_yonetenler',
        'etkinlik_tarihi',
        'etkinlik_durum',];
}
