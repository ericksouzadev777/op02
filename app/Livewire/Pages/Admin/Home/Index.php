<?php

namespace App\Livewire\Pages\Admin\Home;

use App\Models\ButtonLink;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $link;

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
        return view('livewire.pages.admin.home.index', [
            'buttonLinks' => ButtonLink::orderBy('created_at','desc')->get(),
        ])->layout('layouts.guest', [
            // Se precisar do statusAlert no layout:
            'statusAlert' => \App\Models\StatusAlert::first(),
        ]);
    }
}
