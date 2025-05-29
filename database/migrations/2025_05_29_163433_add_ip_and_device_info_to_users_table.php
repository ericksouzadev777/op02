<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Já usamos varchar(45) para IPv4 e IPv6
            $table->string('ip_address', 45)
                ->nullable()
                ->after('remember_token')
                ->comment('Último IP de conexão');

            // Armazena toda a string do User-Agent
            $table->text('device_info')
                ->nullable()
                ->after('ip_address')
                ->comment('User-Agent do dispositivo');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['ip_address', 'device_info']);
        });
    }
};
