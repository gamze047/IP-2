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
        Schema::create('uye_okunmus_kitaps', function (Blueprint $table) {
            $table->id();
            $table->string('odunc_id');
            $table->foreign('odunc_id')->references('odunc_id')->on('odunc_kitaplars');
            $table->string('uye_id');
            $table->foreign('uye_id')->references('id')->on('uyelers');
            $table->string('kitap_id');
            $table->foreign('kitap_id')->references('id')->on('kitaplar');
            $table->string('verme_tarihi');
            $table->foreign('verme_tarihi')->references('verme_tarihi')->on('odunc_kitaplars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uye_okunmus_kitaps');
    }
};
