<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
   protected $table = 'kategorilers';

   public function kitaplar()
   {
       return $this->hasMany(Kitaplar::class);
   }
   protected $fillable = ['id' , 'kategori_adi'];
}
