<div class="space-y-6">
    <div class="p-4 bg-white shadow rounded">
        <h2 class="text-xl font-semibold">Manage Funnels</h2>
        <form wire:submit.prevent="save" class="mt-4 grid grid-cols-1 md:grid-cols-4 gap-4">
            <input wire:model="name" type="text" placeholder="Name" class="input" />
            <input wire:model="initial_amount" type="number" placeholder="Initial Amount" class="input" />
            <label class="flex items-center space-x-2">
                <input type="checkbox" wire:model="active" class="checkbox" />
                <span>Active</span>
            </label>
            <button type="submit" class="btn btn-primary">{{ $editId ? 'Update' : 'Create' }}</button>
        </form>
    </div>

    <div class="p-4 bg-white shadow rounded">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-2">Order</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Amount</th>
                <th class="px-4 py-2">Active</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($funnels as $f)
                <tr>
                    <td class="px-4 py-2">{{ $f->order }}</td>
                    <td class="px-4 py-2">{{ $f->name }}</td>
                    <td class="px-4 py-2">{{ $f->initial_amount }}</td>
                    <td class="px-4 py-2">{{ $f->active ? 'Yes' : 'No' }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <button wire:click="moveUp({{ $f->id }})" class="text-sm">↑</button>
                        <button wire:click="moveDown({{ $f->id }})" class="text-sm">↓</button>
                        <button wire:click="edit({{ $f->id }})" class="text-sm text-blue-600">Edit</button>
                        <button wire:click="delete({{ $f->id }})" class="text-sm text-red-600" onclick="return confirm('Delete?')">Delete</button>
                        <button wire:click="select({{ $f->id }})" class="text-sm text-green-600">Steps</button>
                    </td>
                </tr>
                @if($showFunnelId === $f->id)
                    <tr><td colspan="5" class="p-4">
                            <livewire:pages.admin.funnel.steps :funnelId="$f->id" key="steps-{{ $f->id }}" />
                        </td></tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
