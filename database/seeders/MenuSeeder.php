<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder{
    public function run(): void{
        DB::table('menus')->insert([
            [
                'nama_menu' => 'Choco Crunchy Toast',
                'kategori' => 'manis',
                'deskripsi' => 'Roti panggang lembut dengan olesan cokelat lumer dan taburan crispy choco malt yang renyah',
                'harga' => 10000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/choco-chruncy.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Tiramisu Toast',
                'kategori' => 'manis',
                'deskripsi' => 'Roti toast hangat dengan saus krim tiramisu aromatik dan taburan bubuk kakao manis.',
                'harga' => 10000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/tiramisu.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Green Tea Toast',
                'kategori' => 'manis',
                'deskripsi' => 'Perpaduan roti panggang mentega dengan saus matcha green tea khas Jepang yang manis dan lembut.',
                'harga' => 10000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/green-tea.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Crunchy Cheese Toast',
                'kategori' => 'manis',
                'deskripsi' => 'Roti panggang gurih-manis berlimpah saus keju creamy dengan topping remahan renyah di atasnya.',
                'harga' => 12000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/crunchy-cheese.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Egg & Cheese Toast',
                'kategori' => 'asin',
                'deskripsi' => 'Roti brioche panggang berisi telur orak-arik lembut, keju cheddar leleh, dan saus spesial',
                'harga' => 15000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/egg-cheese.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Egg & Patty Toast',
                'kategori' => 'asin',
                'deskripsi' => 'Isian daging patty sapi panggang juicy dipadukan dengan telur lembut dan saus gurih.',
                'harga' => 18000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/egg-patty.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Smoke Beef & Cheese Toast',
                'kategori' => 'asin',
                'deskripsi' => 'Irisan daging asap premium dengan lelehan keju gurih, selada segar, dan saus mayo-tomat',
                'harga' => 15000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/smoke-beef-cheese.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_menu' => 'Mix Egg Patty & Cheese',
                'kategori' => 'asin',
                'deskripsi' => 'Menu komplit berisi kombinasi telur lembut, daging patty sapi tebal, dan keju leleh berlapis',
                'harga' => 22000,
                'stok' => 50,
                'status_tersedia' => true,
                'gambar' => 'images/menus/mix-patty-cheese.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}