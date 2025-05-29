<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('funnel_option_responses', function (Blueprint $table) {
            $table->id();

            // Usuário que respondeu
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // Em qual etapa ele marcou
            $table->foreignId('funnel_step_id')
                ->constrained()
                ->cascadeOnDelete();

            // Qual opção marcou
            $table->foreignId('funnel_option_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('funnel_option_responses');
    }
};
