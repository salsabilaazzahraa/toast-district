<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha', 100)->default('Toast.district');
            $table->text('deskripsi_usaha')->nullable();
            $table->text('alamat')->nullable();
            $table->string('jam_operasional', 100)->nullable();
            $table->string('no_whatsapp', 20)->nullable();
            $table->string('no_wa_sponsorship', 20)->nullable();
            $table->text('pesan_default_sponsorship')->nullable();
            $table->text('link_maps')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_profiles');
    }
};