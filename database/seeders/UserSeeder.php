<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    public function run(): void{
        DB::table('users')->insert([
            [
                'nama' => 'Owner Toast.district',
                'email' => 'owner@toastdistrict.com',
                'password' => Hash::make('password123'),
                'no_hp' => '085707353189',
                'alamat' => 'Taman Hijau Simpang Lima Gumul',
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kasir 1',
                'email' => 'kasir@toastdistrict.com',
                'password' => Hash::make('password123'),
                'no_hp' => '085707353189',
                'alamat' => 'Taman Hijau Simpang Lima Gumul',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Ariel Pelanggan',
                'email' => 'pelanggan@toastdistrict.com',
                'password' => Hash::make('password123'),
                'no_hp' => '085707353189',
                'alamat' => 'Taman Hijau Simpang Lima Gumul',
                'role' => 'pelanggan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}