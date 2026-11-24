<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu', 100);
            $table->enum('kategori', ['asin', 'manis']);
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 12, 2);
            $table->integer('stok')->default(0);
            $table->boolean('status_tersedia')->default(true);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};