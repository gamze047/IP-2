<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yetkiler extends Model
{
    protected $table = 'yetkilers';


    public function uyeler()
    {
        return $this->hasMany(Uyeler::class );
    }
    protected $fillable = ['id','yetki','yetki_resmi' ,'yetki_izinleri'];


}
