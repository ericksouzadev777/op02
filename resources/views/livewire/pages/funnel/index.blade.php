{{-- 2) wrapper do seu bloco atual, ativando Alpine --}}
<div
    x-data="rewardDemo()"
    x-cloak
    class="flex flex-col w-[90%] sm:w-[24%] m-auto pt-6 gap-3"
>

    {{-- áudio --}}
    <audio x-ref="audio" src="{{ asset('money.mp3') }}"></audio>

    {{-- Barra de progresso --}}
    <div class="w-[90%] bg-gray-200 rounded-full h-3 overflow-hidden m-auto">
        <div class="bg-black h-3" style="width: {{ $progress }}%"></div>
    </div>

    {{-- Título --}}
    <h2 class="pt-5 text-center font-semibold text-[28px] leading-tight">
        Como você avalia sua experiência geral no Aplicativo?
    </h2>

    {{-- Subtítulo --}}
    <p class="text-center text-gray-700 text-xl">
        Selecione uma ou mais opções para continuar
    </p>

    @php $step = $steps[$current]; @endphp

    {{-- Lista de opções --}}
    <div class="space-y-3">
        @foreach($step->options as $option)
            <label class="flex justify-between items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer transition">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">{!! $option->icon !!}</span>
                    <span class="font-medium">{{ $option->name }}</span>
                </div>
                <input
                    type="checkbox"
                    wire:model="selectedOptions"
                    value="{{ $option->id }}"
                    class="h-5 w-5 text-blue-600 border-gray-300 rounded"
                />
            </label>
        @endforeach
    </div>

    {{-- Botão Continuar --}}
    <button
        @click="open = true; playSound(); startAnimation(16.84); showConfetti()"
        class="w-full py-4 bg-blue-700 text-white font-semibold rounded-lg transition hover:bg-blue-800"
    >
        Continuar
    </button>

    {{-- Link de bônus --}}
    <a href="#"
       class="block text-center mt-2 bg-green-50 text-green-600 font-medium py-2 rounded-lg mb-5">
        Concorra a um bônus adicional
    </a>

    {{-- === 3) o modal inline === --}}
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 flex items-center justify-center z-50"
    >
        {{-- backdrop --}}
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        {{-- conteúdo do modal --}}
        <div class="bg-white rounded-xl p-6 relative z-10 w-full max-w-sm text-center space-y-4">
            <h2 class="text-xl font-bold">Você ganhou</h2>
            <p class="text-5xl font-extrabold">
                R$ <span x-text="display.toFixed(2)"></span>
            </p>
            <p class="text-gray-600">
                Responda mais pesquisas para ganhar até R$1559
            </p>
            <button
                @click="open = false"
                class="mt-4 bg-black text-white py-2 px-6 rounded-full w-full"
            >
                Fechar
            </button>
        </div>
    </div>
</div>

<script>
    function rewardDemo() {
        return {
            open: false,
            display: 0,

            startAnimation(target) {
                const from    = 0;
                const diff    = target - from;
                let   startTs = null;
                const duration = 800;

                const step = (ts) => {
                    if (!startTs) startTs = ts;
                    const progress = Math.min((ts - startTs) / duration, 1);
                    this.display = from + diff * progress;
                    if (progress < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
            },

            showConfetti() {
                for (let i = 0; i < 4; i++) {
                    confetti({
                        particleCount: 120,
                        spread: 360,
                        startVelocity: 20,
                        origin: { x: Math.random(), y: 0 },
                        scalar: 1.4
                    });
                }
            },

            playSound() {
                this.$refs.audio.currentTime = 0;
                this.$refs.audio.play();
            },
        }
    }
</script>
