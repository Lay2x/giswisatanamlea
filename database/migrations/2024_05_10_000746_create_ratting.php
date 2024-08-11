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
        Schema::create('ratting', function (Blueprint $table) {
            $table->id('id_ratting');
            $table->string('id_wisata');
            $table->string('nama_komentator');
            $table->string('ratting');
            $table->string('komentar')->nulllable();
            $table->string('tanggal_buat');
            $table->string('publish')->nulllable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratting');
    }
};
