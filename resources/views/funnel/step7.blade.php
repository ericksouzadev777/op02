{{-- resources/views/funnel/step7.blade.php --}}
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Etapa 7 – Prêmios PIX</title>

    {{-- Tailwind + seu app.js --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Confetti --}}
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>

    <style>
        /* custom radio igual ao mockup */
        input[type="radio"] {
            -webkit-appearance: none;
            appearance: none;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #D1D5DB; /* gray-300 */
            border-radius: 0.375rem;
            background-color: #fff;
            position: relative;
            cursor: pointer;
        }
        input[type="radio"]:checked {
            background-color: #000;
            border-color: #000;
        }
        input[type="radio"]:checked::after {
            content: '';
            position: absolute;
            top: 0.125rem;
            left: 0.45rem;
            width: 0.25rem;
            height: 0.5rem;
            border: solid #fff;
            border-width: 0 0.15rem 0.15rem 0;
            transform: rotate(45deg);
        }
        .js-hidden { display: none !important; }
    </style>
</head>
<body class="bg-gray-100 font-sans">

{{-- NAVBAR --}}
<nav class="bg-white border-b border-gray-200">
    <div class="max-w-3xl mx-auto px-4 py-3 flex items-center justify-between">
        <img src="{{ asset('images/img-original.png') }}" class="h-8" alt="Prêmios PIX">
        <div class="flex items-center space-x-4">
            <div class="px-3 py-1 bg-white border border-gray-300 rounded-lg font-semibold">
                R$ 865,72
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                SACAR
            </button>
        </div>
    </div>
</nav>

{{-- CONTEÚDO --}}
<main class="max-w-md mx-auto py-8 px-4">
    <div class="p-6">

        {{-- barra de progresso --}}
        <div class="h-2 bg-gray-200 rounded-full overflow-hidden mb-6">
            <div id="progress-bar" class="h-full bg-black" style="width:56%"></div>
        </div>

        {{-- título --}}
        <h1 class="text-center text-2xl font-semibold mb-2">
            Qual horário do dia você mais usa o Aplicativo?
        </h1>
        <p class="text-center text-gray-500 mb-6">
            Selecione uma opção para continuar
        </p>

        {{-- opções --}}
        <div class="space-y-3 mb-6">
            <label class="flex justify-between items-center bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🌅</span>
                    <span class="font-medium">Manhã</span>
                </div>
                <input type="radio" name="rating" value="manha">
            </label>
            <label class="flex justify-between items-center bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🌞</span>
                    <span class="font-medium">Tarde</span>
                </div>
                <input type="radio" name="rating" value="tarde">
            </label>
            <label class="flex justify-between items-center bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🌜</span>
                    <span class="font-medium">Noite</span>
                </div>
                <input type="radio" name="rating" value="noite">
            </label>
            <label class="flex justify-between items-center bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🌙</span>
                    <span class="font-medium">Madrugada</span>
                </div>
                <input type="radio" name="rating" value="madrugada">
            </label>
        </div>

        {{-- botão Continuar --}}
        <button id="btnContinue"
                class="w-full bg-blue-700 text-white py-3 rounded-lg text-lg font-medium hover:bg-blue-800">
            Continuar
        </button>

        {{-- erro --}}
        <p id="errorMsg" class="js-hidden text-red-600 text-center mt-2">
            Por favor, selecione uma opção.
        </p>
    </div>

    {{-- link bônus --}}
    <a href="#"
       class="block text-center mt-6 bg-green-50 text-green-600 font-medium py-2 rounded-lg">
        Concorra a um bônus adicional
    </a>

    {{-- termos --}}
    <section class="text-center text-sm text-gray-500 mt-6">
        Ao participar das atividades de recompensa, você concorda com nossos
        <a href="#" class="underline">Termos</a> e
        <a href="#" class="underline">Condições</a>.
    </section>
</main>

{{-- MODAL --}}
<div id="modal" class="js-hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 bg-white rounded-xl p-6 w-80 text-center space-y-4">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2
                  bg-green-100 text-green-700 px-4 py-1 rounded-xl">
            Nova recompensa
        </div>
        <h2 class="text-lg font-semibold mt-4">Você ganhou</h2>
        <p class="text-5xl font-extrabold">
            R$ <span id="displayAmount">0,00</span>
        </p>
        <p class="text-gray-600">
            Responda mais pesquisas para ganhar até R$1559
        </p>
        <button id="btnNext"
                class="mt-4 bg-black text-white py-2 px-6 rounded-full w-full">
            Continuar recebendo
        </button>
    </div>
</div>

{{-- áudio --}}
<audio id="audio" src="{{ asset('money.mp3') }}"></audio>

{{-- JS puro --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnContinue = document.getElementById('btnContinue');
        const errorMsg    = document.getElementById('errorMsg');
        const modal       = document.getElementById('modal');
        const btnNext     = document.getElementById('btnNext');
        const audio       = document.getElementById('audio');
        const display     = document.getElementById('displayAmount');
        const target      = 148.26; // valor desta etapa

        btnContinue.addEventListener('click', () => {
            // valida seleção
            const checked = document.querySelector('input[name="rating"]:checked');
            if (!checked) {
                errorMsg.classList.remove('js-hidden');
                return;
            }
            errorMsg.classList.add('js-hidden');

            // exibe modal
            modal.classList.remove('js-hidden');

            // play audio
            audio.currentTime = 0;
            audio.play();

            // confetti
            for (let i = 0; i < 4; i++) {
                confetti({
                    particleCount: 120,
                    spread: 360,
                    startVelocity: 20,
                    origin: { x: Math.random(), y: 0 },
                    scalar: 1.4
                });
            }

            // animação do número
            display.textContent = '0,00';
            let start = null;
            function animate(ts) {
                if (!start) start = ts;
                const p = Math.min((ts - start) / 800, 1);
                display.textContent = (target * p).toFixed(2).replace('.', ',');
                if (p < 1) requestAnimationFrame(animate);
            }
            requestAnimationFrame(animate);
        });

        // redireciona para step8
        btnNext.addEventListener('click', () => {
            window.location.href = '{{ url("/funnel/8") }}';
        });
    });
</script>
</body>
</html>
