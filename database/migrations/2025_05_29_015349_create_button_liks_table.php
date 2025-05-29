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
        Schema::create('button_links', function (Blueprint $table) {
            $table->id();

            // Nome do botão
            $table->string('name');

            // URL ou link que o botão deve apontar
            $table->string('link');

            // Status: ativo (true) / desativado (false)
            $table->boolean('active')
                ->default(true)
                ->comment('1 = ativo, 0 = desativado');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('button_liks');
    }
};
