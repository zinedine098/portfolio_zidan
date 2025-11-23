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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' (bigint, primary key, auto increment)
            $table->string('name'); // Membuat kolom 'name' (VARCHAR)
            $table->text('description')->nullable(); // Membuat kolom 'description' (TEXT) yang boleh kosong
            $table->integer('price'); // Membuat kolom 'price' (INT)
            $table->string('category', 50); // Membuat kolom 'category' dengan panjang maksimal 50 karakter
            $table->boolean('is_active')->default(true); // Membuat kolom boolean dengan nilai default true
            $table->timestamps(); // Membuat dua kolom: 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
