<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('funnel_options', function (Blueprint $table) {
            $table->id();

            // Relaciona a etapa
            $table->foreignId('funnel_step_id')
                ->constrained()
                ->cascadeOnDelete();

            // Texto da opção (pergunta)
            $table->string('name');

            // Se cada opção tiver um valor a ser somado
            $table->decimal('amount', 10, 2)->default(0);

            // Pra ordenar as opções na UI
            $table->integer('order')->default(0);

            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('funnel_options');
    }
};
