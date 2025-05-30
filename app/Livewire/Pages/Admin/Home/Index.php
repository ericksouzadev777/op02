<?php

namespace App\Livewire\Pages\Admin\Home;

use App\Models\ButtonLink;
use App\Models\User;            // <<< import
use App\Models\StatusAlert;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $link;
    public $showModal = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'link' => 'required|url|max:255',
    ];

    public function create()
    {
        $this->validate();

        ButtonLink::create([
            'name'   => $this->name,
            'link'   => $this->link,
            'active' => true,
        ]);

        $this->reset(['name', 'link']);
        session()->flash('message', 'Link adicionado com sucesso!');
    }

    public function toggleActive($id)
    {
        $item = ButtonLink::findOrFail($id);
        $item->active = ! $item->active;
        $item->save();
        session()->flash('message', 'Status atualizado.');
    }

    public function render()
    {
        $buttonLinks = ButtonLink::orderBy('created_at','desc')->get();

        // busca só usuários com ip_address E device_info não nulos
        $users = User::whereNotNull('ip_address')
            ->whereNotNull('device_info')
            ->orderBy('id', 'desc')
            ->get(['id', 'name', 'ip_address', 'device_info', 'created_at']);

        return view('livewire.pages.admin.home.index', compact('buttonLinks','users'))
            ->layout('layouts.guest', [
                'statusAlert' => StatusAlert::first(),
            ]);
    }
}
