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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('wa_number');
            $table->string('address');
            $table->decimal('lat', 18, 15);
            $table->decimal('long', 18, 15);
            $table->string('cover_img');
            $table->string('profile_img');
            $table->foreignId('cabang_id')
                  ->constrained('cabangs', 'id', 'toko_cabang')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
