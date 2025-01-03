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
        Schema::create('uyelers', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('sehir');
            $table->date('dogum_yili');
            $table->string('mail');
            $table->string('telefon');
            $table->unsignedBigInteger('yetki_id');
            $table->foreign('yetki_id')->references('id')->on('yetkilers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uyelers');
    }
};
