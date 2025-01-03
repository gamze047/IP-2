<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etkinliklers', function (Blueprint $table) {
            $table->id();
            $table->string('etkinlik_adi');
            $table->string('etkinlik_icerigi');
            $table->string('etkinlik_yeri');
            $table->string('etkinlige_katilacaklar');
            $table->string('etkinligi_yonetenler');
            $table->string('etkinlik_resim')->nullable();
            $table->date('etkinlik_tarihi');
            $table->string('etkinlik_durum');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etkinliklers');
    }
};
