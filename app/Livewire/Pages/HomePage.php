<?php

namespace App\Livewire\Pages;

use App\Models\StatusAlert;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $statusAlert = StatusAlert::first();
        return view('livewire.pages.home-page', compact('statusAlert'))
        ->layout('layouts.app', [
            'statusAlert' => $statusAlert,
        ]);
    }
}
