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
        Schema::create('kitaplar', function (Blueprint $table) {
            $table->id();
            $table->string('kitap_adi');
            $table->string('yazar');
            $table->date('yayin_yili');
            $table->string('yayin_evi');
            $table->unsignedBigInteger('kitap_turu');
            $table->foreign('kitap_turu')->references('id')->on('kategorilers');
            $table->longText('kitap_aciklama');
            $table->string('kitap_durumu')->default('Mevcut');
            $table->timestamps();


        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
