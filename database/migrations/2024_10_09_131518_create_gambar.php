<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->foreignId('kategori_id')->constrained('kategori_gambar')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar');
    }
};