<?php

namespace App\Livewire\Pages\Alert;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{

    public function registerVisitor()
    {
        // pega o maior ID (incluindo soft deletes, se usar)
        $nextId = User::withTrashed()->max('id') + 1;

        // monta os placeholders
        $name     = "Visitante {$nextId}";
        $email    = Str::slug("visitante-{$nextId}") . "@exemplo.com";
        $password = Hash::make(Str::random(12));
        // cria o usuário
        User::create([
            'name'         => $name,
            'email'        => $email,
            'password'     => $password,
            'ip_address'   => request()->ip(),
            'device_info'  => request()->header('User-Agent'),
        ]);

        // redireciona para a home do funil
        return redirect()->route('funnel.home');
    }

    public function render()
    {
        return view('livewire.pages.alert.index');
    }
}
