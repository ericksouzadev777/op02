<?php

namespace App\Livewire\Pages\Admin\Funnel;

use Livewire\Component;
use App\Models\Funnel;

class Index extends Component
{
    public $funnels;
    public $name;
    public $initial_amount;
    public $active = true;
    public $order;
    public $editId = null;
    public $showFunnelId = null;

    protected $rules = [
        'name' => 'required|string',
        'initial_amount' => 'required|numeric',
        'active' => 'boolean',
        'order' => 'nullable|integer'
    ];

    public function mount()
    {
        $this->refreshFunnels();
    }

    public function refreshFunnels()
    {
        $this->funnels = Funnel::with('steps')->orderBy('order')->get();
    }

    public function save()
    {
        $this->validate();

        if ($this->editId) {
            $f = Funnel::find($this->editId);
            $f->update([
                'name' => $this->name,
                'initial_amount' => $this->initial_amount,
                'active' => $this->active,
                'order' => $this->order ?? $f->order
            ]);
        } else {
            Funnel::create([
                'name' => $this->name,
                'initial_amount' => $this->initial_amount,
                'active' => $this->active,
                'order' => Funnel::max('order') + 1,
            ]);
        }

        $this->resetForm();
        $this->refreshFunnels();
    }

    public function resetForm()
    {
        $this->name = null;
        $this->initial_amount = null;
        $this->active = true;
        $this->order = null;
        $this->editId = null;
    }

    public function edit($id)
    {
        $f = Funnel::find($id);
        $this->editId = $id;
        $this->name = $f->name;
        $this->initial_amount = $f->initial_amount;
        $this->active = $f->active;
        $this->order = $f->order;
    }

    public function delete($id)
    {
        Funnel::find($id)->delete();
        $this->refreshFunnels();
    }

    public function select($id)
    {
        $this->showFunnelId = $this->showFunnelId === $id ? null : $id;
    }

    public function moveUp($id)
    {
        $current = Funnel::find($id);
        $above = Funnel::where('order','<',$current->order)->orderBy('order','desc')->first();
        if ($above) {
            [$current->order, $above->order] = [$above->order, $current->order];
            $current->save();
            $above->save();
            $this->refreshFunnels();
        }
    }

    public function moveDown($id)
    {
        $current = Funnel::find($id);
        $below = Funnel::where('order','>',$current->order)->orderBy('order','asc')->first();
        if ($below) {
            [$current->order, $below->order] = [$below->order, $current->order];
            $current->save();
            $below->save();
            $this->refreshFunnels();
        }
    }

    public function render()
    {
        return view('livewire.pages.admin.funnel.index')->layout('layouts.funnel');
    }
}
