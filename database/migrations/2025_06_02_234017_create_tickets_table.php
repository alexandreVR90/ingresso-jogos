<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // se já existir tabela users
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('lot_id')->constrained()->onDelete('cascade');
            $table->string('qr_code')->unique();
            $table->string('status'); // Exemplo: 'active', 'used', 'cancelled'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
