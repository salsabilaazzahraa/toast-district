<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan', 30)->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('kasir_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('jenis_pesanan', ['offline', 'online', 'catering']);
            $table->string('nama_pemesan', 100);
            $table->string('no_hp_pemesan', 20)->nullable();
            $table->enum('metode_pengambilan', ['dine_in', 'pick_up', 'delivery'])->default('pick_up');
            $table->text('alamat_pengiriman')->nullable();
            $table->dateTime('tanggal_acara')->nullable();
            $table->text('catatan_khusus')->nullable();
            $table->decimal('total_harga', 12, 2)->default(0);
            $table->enum('jenis_pembayaran', ['tunai', 'transfer_dp', 'transfer_lunas'])->default('tunai');
            $table->decimal('nominal_dibayar', 12, 2)->default(0);
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status_pembayaran', ['belum_lunas', 'dp', 'lunas'])->default('belum_lunas');
            $table->enum('status_pesanan', ['menunggu_konfirmasi', 'diproses', 'siap', 'selesai', 'dibatalkan'])->default('menunggu_konfirmasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};