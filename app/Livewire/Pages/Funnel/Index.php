<?php

namespace App\Livewire\Pages\Funnel;

use Livewire\Component;
use App\Models\FunnelStep;

class Index extends Component
{
    public FunnelStep $step;

    /**
     * @param  int  $stepId  – vem da URL /funnel/{stepId}
     */
    public function mount(int $stepId)
    {
        // carrega a step com as opções (perguntas) e seu valor
        $this->step = FunnelStep::with('options')->findOrFail($stepId);
    }

    public function render()
    {
        return view('livewire.pages.funnel.index', [
            'step' => $this->step,
        ])->layout('layouts.funnel');
    }
}
