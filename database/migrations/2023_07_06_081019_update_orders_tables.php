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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('courir_id') 
                  ->nullable()
                  ->constrained('kurirs', 'id', 'courir_order')
                  ->restrictOnUpdate()
                  ->cascadeOnDelete()
                  ->change();
        });
    }
};
