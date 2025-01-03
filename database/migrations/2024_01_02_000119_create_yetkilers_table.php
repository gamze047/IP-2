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
        Schema::create('yetkilers', function (Blueprint $table) {
            $table->id();
            $table->string('yetki');
            $table->string('yetki_resmi');
            $table->string('yetki_izinleri');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('yetkilers');
    }
};
