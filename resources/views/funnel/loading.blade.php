{{-- resources/views/funnel/loading.blade.php --}}
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Carregando… – Prêmios PIX</title>

    {{-- Tailwind + seu app.js --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        .fade {
            transition: opacity 0.8s ease;
        }
        .fade.hidden {
            opacity: 0;
        }
        .fade.visible {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="w-full max-w-md px-4">
    {{-- Mensagem dinâmica --}}
    <h1 id="stepText"
        class="text-center text-2xl font-semibold mb-4 fade hidden">
        <!-- preenchido via JS -->
    </h1>

    {{-- Barra de progresso --}}
    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
        <div id="barFill"
             class="h-full bg-blue-700"
             style="width: 0%; transition: width 1.2s ease;">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const steps = [
            'Quase lá! Falta apenas um passo…',
            'Processando saque',
            'Validando pesquisa'
        ];
        const durations = [2400, 2400, 2400]; // ms em cada etapa
        const fillPercents = [33, 66, 100];

        const txtEl = document.getElementById('stepText');
        const barEl = document.getElementById('barFill');

        let idx = 0;

        function showStep(i) {
            // text
            txtEl.textContent = steps[i];
            txtEl.classList.remove('hidden');
            txtEl.classList.add('visible');
            // animar barra
            barEl.style.width = fillPercents[i] + '%';
            // após duration, fade out e ir next
            setTimeout(() => {
                txtEl.classList.remove('visible');
                txtEl.classList.add('hidden');
                // após fade-out completo (0.8s), próxima
                setTimeout(() => {
                    if (i + 1 < steps.length) {
                        showStep(i + 1);
                    } else {
                        // fim, redireciona
                        window.location.href = '{{ route("funnel.pagar") }}';
                    }
                }, 800);
            }, durations[i]);
        }

        // delay inicial para garantir CSS carregado
        setTimeout(() => { showStep(0); }, 100);
    });
</script>

</body>
</html>
