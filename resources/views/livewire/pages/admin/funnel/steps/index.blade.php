<div class="space-y-4">
    <div class="p-4 bg-gray-50 rounded">
        <h3 class="font-semibold">Steps for Funnel #{{ $funnelId }}</h3>
        <form wire:submit.prevent="save" class="mt-2 grid grid-cols-1 md:grid-cols-5 gap-2">
            <input wire:model="name" type="text" placeholder="Step Name" class="input" />
            <input wire:model="icon" type="text" placeholder="Icon (e.g. fas fa-check)" class="input" />
            <input wire:model="amount" type="number" placeholder="Amount" class="input" />
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="active" class="checkbox" />
                <span>Active</span>
            </label>
            <button type="submit" class="btn btn-secondary">{{ $editId ? 'Update' : 'Add' }}</button>
        </form>
    </div>

    <table class="min-w-full bg-white">
        <thead>
        <tr class="bg-gray-100">
            <th class="px-3 py-2">Order</th>
            <th class="px-3 py-2">Name</th>
            <th class="px-3 py-2">Icon</th>
            <th class="px-3 py-2">Amount</th>
            <th class="px-3 py-2">Active</th>
            <th class="px-3 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($steps as $s)
            <tr>
                <td class="px-3 py-2">{{ $s->order }}</td>
                <td class="px-3 py-2">{{ $s->name }}</td>
                <td class="px-3 py-2"><i class="{{ $s->icon }}"></i></td>
                <td class="px-3 py-2">{{ $s->amount }}</td>
                <td class="px-3 py-2">{{ $s->active ? 'Yes' : 'No' }}</td>
                <td class="px-3 py-2 space-x-1">
                    <button wire:click="moveUp({{ $s->id }})" class="text-xs">↑</button>
                    <button wire:click="moveDown({{ $s->id }})" class="text-xs">↓</button>
                    <button wire:click="edit({{ $s->id }})" class="text-xs text-blue-600">Edit</button>
                    <button wire:click="delete({{ $s->id }})" class="text-xs text-red-600" onclick="return confirm('Delete step?')">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
