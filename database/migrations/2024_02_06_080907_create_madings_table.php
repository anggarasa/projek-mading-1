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
        Schema::create('madings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->string('category');
            $table->timestamp('publised_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('madings');
    }
};
