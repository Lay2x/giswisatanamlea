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
        Schema::create('wisata', function (Blueprint $table) {
            $table->increments('id_wisata');
            $table->string('tipe_wisata');
            $table->string('nama_wisata');
            $table->string('lokasi');
            $table->string('pemilik');
            $table->string('daya_tarik');
            $table->string('sarana');
            $table->string('fasilitas');
            $table->string('luas');
            $table->string('biaya_masuk');
            $table->text('deskripsi')->nulllable;
            $table->string('foto_wisata');
            $table->string('foto_wisata2');
            $table->string('foto_wisata3');
            $table->double('long_lokasi');
            $table->double('lat_lokasi');
            $table->string('slug_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
