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
        Schema::create('odunc_kitaplars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uye_id');
            $table->foreign('uye_id')->references('id')->on('uyelers');
            $table->date('odunc_alinma_tarihi');
            $table->date('odunc_verilecek_tarih');
            $table->unsignedBigInteger('kitap_id');
            $table->foreign('kitap_id')->references('id')->on('kitaplar');
            $table->date('geri_verme_tarihi')->nullable();
            $table->boolean('durum')->default(0);
            $table->timestamps();


        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odunc_kitaplars');
    }
};
