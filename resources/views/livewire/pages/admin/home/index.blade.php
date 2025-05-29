<div class="space-y-6 p-6">

    {{-- Flash message --}}
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    {{-- Formulário de criação --}}
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-lg font-semibold mb-4">Adicionar Novo Link</h3>
        <form wire:submit.prevent="create" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nome</label>
                <input
                    type="text"
                    wire:model.defer="name"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                />
                @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Link (URL)</label>
                <input
                    type="url"
                    wire:model.defer="link"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                />
                @error('link')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md transition"
            >
                Salvar
            </button>
        </form>
    </div>

    {{-- Tabela de registros --}}
    <div class="bg-white shadow rounded-lg p-6 overflow-x-auto">
        <h3 class="text-lg font-semibold mb-4">Links Cadastrados</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Link</th>
                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Ações</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($buttonLinks as $item)
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item->id }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $item->name }}</td>
                    <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                        {{ \Illuminate\Support\Str::limit($item->link, 40) }}
                    </td>
                    <td class="px-4 py-2 text-center">
                        @if($item->active)
                            <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Ativo</span>
                        @else
                            <span class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">Inativo</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 text-center space-x-2">
                        <button
                            wire:click="toggleActive({{ $item->id }})"
                            class="px-2 py-1 text-xs font-medium rounded
                                       {{ $item->active ? 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200' : 'bg-blue-100 text-blue-800 hover:bg-blue-200' }}
                                       transition"
                        >
                            {{ $item->active ? 'Desativar' : 'Ativar' }}
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
