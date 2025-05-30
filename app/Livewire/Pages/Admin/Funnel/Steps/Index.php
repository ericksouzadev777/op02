<?php

namespace App\Livewire\Pages\Admin\Funnel\Steps;

use Livewire\Component;

use App\Models\FunnelStep;

class Index extends Component
{
    public $funnelId;
    public $steps;
    public $name;
    public $icon;
    public $amount;
    public $active = true;
    public $order;
    public $editId;

    protected $rules = [
        'name' => 'required|string',
        'icon' => 'nullable|string',
        'amount' => 'required|numeric',
        'active' => 'boolean'
    ];

    public function mount($funnelId)
    {
        $this->funnelId = $funnelId;
        $this->refreshSteps();
    }

    public function refreshSteps()
    {
        $this->steps = FunnelStep::where('funnel_id', $this->funnelId)
            ->orderBy('order')->get();
    }

    public function save()
    {
        $this->validate();

        if ($this->editId) {
            $s = FunnelStep::find($this->editId);
            $s->update([
                'name' => $this->name,
                'icon' => $this->icon,
                'amount' => $this->amount,
                'active' => $this->active,
                'order' => $this->order ?? $s->order
            ]);
        } else {
            FunnelStep::create([
                'funnel_id' => $this->funnelId,
                'name' => $this->name,
                'icon' => $this->icon,
                'amount' => $this->amount,
                'active' => $this->active,
                'order' => FunnelStep::where('funnel_id', $this->funnelId)->max('order') + 1,
            ]);
        }

        $this->resetStepForm();
        $this->refreshSteps();
    }

    public function resetStepForm()
    {
        $this->name = null;
        $this->icon = null;
        $this->amount = null;
        $this->active = true;
        $this->order = null;
        $this->editId = null;
    }

    public function edit($id)
    {
        $s = FunnelStep::find($id);
        $this->editId = $id;
        $this->name = $s->name;
        $this->icon = $s->icon;
        $this->amount = $s->amount;
        $this->active = $s->active;
        $this->order = $s->order;
    }

    public function delete($id)
    {
        FunnelStep::find($id)->delete();
        $this->refreshSteps();
    }

    public function moveUp($id)
    {
        $current = FunnelStep::find($id);
        $above = FunnelStep::where('funnel_id', $this->funnelId)
            ->where('order','<',$current->order)
            ->orderBy('order','desc')->first();
        if ($above) {
            [$current->order, $above->order] = [$above->order, $current->order];
            $current->save();
            $above->save();
            $this->refreshSteps();
        }
    }

    public function moveDown($id)
    {
        $current = FunnelStep::find($id);
        $below = FunnelStep::where('funnel_id', $this->funnelId)
            ->where('order','>',$current->order)
            ->orderBy('order','asc')->first();
        if ($below) {
            [$current->order, $below->order] = [$below->order, $current->order];
            $current->save();
            $below->save();
            $this->refreshSteps();
        }
    }

    public function render()
    {
        return view('livewire.pages.admin.funnel.steps.index')->layout('layouts.funnel');
    }
}
