<div class="max-w-md mx-auto p-4 space-y-6">

    {{-- Barra de progresso --}}
    <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
        <div class="bg-black h-2" style="width: {{ $progress }}%"></div>
    </div>

    {{-- Título --}}
    <h2 class="text-2xl font-bold text-center">
        Como você avalia sua experiência geral no Aplicativo?
    </h2>

    {{-- Subtítulo --}}
    <p class="text-center text-gray-500 text-sm">
        Selecione uma ou mais opções para continuar
    </p>

    @php
        // pega a etapa atual
        $step = $steps[$current];
    @endphp

    {{-- Lista de opções --}}
    <div class="space-y-3">
        @foreach($step->options as $option)
            <label
                class="flex items-center justify-between
               bg-white border border-gray-200 rounded-lg p-4"
            >
                <div class="flex items-center space-x-3">
                    {{-- ícone --}}
                    <span class="text-2xl">{!! $option->icon !!}</span>
                    {{-- texto --}}
                    <span class="text-base font-medium">{{ $option->name }}</span>
                </div>

                {{-- checkbox --}}
                <input
                    type="checkbox"
                    wire:model="selectedOptions"
                    value="{{ $option->id }}"
                    class="h-5 w-5 text-blue-600 border-gray-300 rounded"
                />
            </label>
        @endforeach
    </div>

    {{-- Botão Continuar só habilita se marcou ao menos uma --}}
    <button
        wire:click="answer"

        class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg
           hover:bg-blue-700 transition disabled:opacity-50 disabled:cursor-not-allowed"
    >
        Continuar
    </button>

    {{-- Link de bônus --}}
    <a
        href="#"
        class="block text-center mt-2 bg-green-50 text-green-600 font-medium py-2 rounded-lg"
    >
        Concorra a um bônus adicional
    </a>

</div>
