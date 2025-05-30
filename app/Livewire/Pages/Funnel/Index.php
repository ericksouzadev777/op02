<?php

namespace App\Livewire\Pages\Funnel;

use Livewire\Component;
use App\Models\Funnel;
use App\Models\FunnelOptionResponse;

class Index extends Component
{
    public Funnel   $funnel;
    public $steps;
    public $current     = 0;         // índice da etapa atual
    public $balance;
    public $selectedOptions = [];    // armazena ids marcados na etapa

    public function mount()
    {
        // carrega o primeiro funil com todas as etapas e opções
        $this->funnel  = Funnel::with('steps.options')->firstOrFail();
        $this->steps   = $this->funnel->steps;
        $this->balance = $this->funnel->initial_amount;
    }

    public function answer()
    {
        $step = $this->steps[$this->current];

        // grava cada opção marcada
        foreach ($this->selectedOptions as $optId) {
            FunnelOptionResponse::create([
                'user_id'          => 1,
                'funnel_step_id'   => $step->id,
                'funnel_option_id' => $optId,
            ]);

            // atualiza saldo
            $opt = $step->options->firstWhere('id', $optId);
            $this->balance += $opt->amount;
        }

        // limpa seleção e avança
        $this->selectedOptions = [];
        $this->current++;
    }

    public function render()
    {
        $total = count($this->steps);
        $progress = round((($this->current + 1) / $total) * 100);

        return view('livewire.pages.funnel.index', compact('progress'))
            ->layout('layouts.funnel');
    }
}
