<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan Eloquent (cara yang lebih disukai)
        // Menggunakan DB insert karena model App\Models\Product tidak ditemukan
        DB::table('products')->insert([
            [
                'name' => 'Laptop ASUS ROG',
                'description' => 'Laptop gaming high-end dengan performa luar biasa.',
                'price' => 25000000,
                'category' => 'Electronics',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'Keyboard mekanik dengan switch blue yang nyaman.',
                'price' => 1500000,
                'category' => 'Accessories',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mouse Wireless Logitech',
                'description' => 'Mouse ergonomis dengan koneksi bluetooth.',
                'price' => 750000,
                'category' => 'Accessories',
                'is_active' => false, // Contoh produk tidak aktif
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}