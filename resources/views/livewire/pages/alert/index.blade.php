{{-- resources/views/livewire/pages/alert/index.blade.php --}}
<div class="relative min-h-screen bg-blue-800 pt-10 pb-10 overflow-hidden">

    {{-- moedas flutuantes --}}
    <div class="absolute inset-0 pointer-events-none">
        <img src="https://premiospixes2025.online/dv/images/coin.png"
             alt="Moeda"
             class="floating-coin absolute opacity-0"
             style="top: 10%; left: 5%; width:40px;"/>
        <img src="https://premiospixes2025.online/dv/images/coin.png"
             alt="Moeda"
             class="floating-coin absolute opacity-0"
             style="top: 20%; left: 85%; width:40px;"/>
        <img src="https://premiospixes2025.online/dv/images/coin.png"
             alt="Moeda"
             class="floating-coin absolute opacity-0"
             style="top: 70%; left: 10%; width:40px;"/>
        <img src="https://premiospixes2025.online/dv/images/coin.png"
             alt="Moeda"
             class="floating-coin absolute opacity-0"
             style="top: 80%; left: 90%; width:40px;"/>
    </div>

    <div class="w-full max-w-xl mx-auto bg-blue-800 text-white rounded-2xl overflow-hidden shadow-2xl">
        <div class="px-6 pb-6 text-center">

            {{-- título principal --}}
            <h2 class="font-inter text-4xl md:text-5xl font-extrabold mb-4 inline-block mt-7">
                VOCÊ FOI PREMIADO
            </h2>

            {{-- gift + moedas internas --}}
            <div class="gift-container mx-auto mb-8 relative w-64 h-64 border-4 border-gray-50/30 rounded-xl overflow-hidden">
                <img src="{{ asset('images/alert-img.png') }}"
                     alt="Prêmio"
                     class="gift-image object-contain w-full h-full"/>
                <div class="coins absolute bottom-4 left-0 w-full flex justify-center space-x-2 opacity-0">
                    {{-- quatro moedas dentro da gift-container --}}
                    @for ($i = 0; $i < 4; $i++)
                        <img src="https://premiospixes2025.online/dv/images/coin.png"
                             alt="Moeda"
                             class="coin w-8 h-8"/>
                    @endfor
                </div>
            </div>

            {{-- subtítulo --}}
            <p class="font-inter text-2xl md:text-xl font-extrabold mb-6">
                AVALIE E GANHE ATÉ <strong>R$732,00</strong> NO SEU PIX!
            </p>

            {{-- botão CTA --}}
            <a href="#"
               wire:click.prevent="registerVisitor"
               class="font-inter font-extrabold block py-4 px-6 text-3xl md:text-base rounded-full
                bg-gradient-to-r from-blue-500 to-blue-400
                hover:from-blue-600 hover:to-blue-500
                transform transition w-[95%] mx-auto mb-8"
               id="meuBotao">
                CLIQUE AQUI E COMECE AGORA!
            </a>

            {{-- seção “Como funciona?” --}}
            <section class="px-4 py-8 md:py-12">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Como funciona?</h2>
                <p class="text-base md:text-lg font-medium mb-6 max-w-xl mx-auto">
                    Avalie nossos produtos ou serviços e ganhe dinheiro. É rápido, fácil e você pode ganhar recompensas únicas!
                </p>
                <ul class="space-y-4 mb-6 max-w-md mx-auto">
                    @foreach ([
                      'Participe em poucos minutos',
                      'Ganhe prêmios exclusivos',
                      'Ajude-nos a melhorar ainda mais',
                    ] as $benefit)
                        <li class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6 flex-shrink-0 text-blue-800 bg-white rounded-full mr-3"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1
                            1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1
                            0 000-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="text-base md:text-lg">{{ $benefit }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="inline-flex items-center text-sm md:text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 text-white mr-2"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000
                        16zm1-8.414V6a1 1 0 10-2 0v5a1
                        1 0 00.553.894l3 1.5a1 1 0 10.894-1.788l-2.447-1.224z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Oferta por tempo limitado</span>
                </div>
            </section>

        </div>
    </div>

    {{-- aviso legal --}}
    <section class="text-white text-center px-4 py-6">
        <p class="text-sm md:text-base font-medium leading-relaxed max-w-2xl mx-auto">
            Aviso legal: Promoção exclusiva da empresa <strong>Premios Pix</strong> de CNPJ
            <strong>48.077.864/0001-38</strong>, conforme regulamento disponível.
            Sujeita a alterações e condições específicas. Consulte os termos aplicáveis.
        </p>
    </section>


    {{-- scripts de animação --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // anima entrada dos elementos
            const elems = document.querySelectorAll('.gift-container, h2, p.font-inter, .coins, #meuBotao, section ul');
            elems.forEach((el, i) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    el.style.transition = `all 0.6s ease-out ${i * 0.1}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, 100);
            });

            // anima moedas internas
            const innerCoins = document.querySelectorAll('.coins img');
            innerCoins.forEach((c, i) => {
                setTimeout(() => {
                    c.style.transition = 'opacity 0.8s ease-out';
                    c.style.opacity = '0.9';
                }, 500 + i * 100);
            });

            // anima moedas flutuantes
            const floatCoins = document.querySelectorAll('.floating-coin');
            floatCoins.forEach((c, i) => {
                setTimeout(() => {
                    c.style.transition = 'opacity 0.8s ease-out';
                    c.style.opacity = '0.6';
                }, 300 + i * 200);
            });

            // efeito de clique e hover no CTA
            const btn = document.getElementById('meuBotao');
            btn.addEventListener('click', e => {
                e.preventDefault();
                btn.style.transform = 'scale(0.95)';
                @this.call('registerVisitor');
            });
            btn.addEventListener('mouseenter', () => btn.style.transform = 'translateY(-3px)');
            btn.addEventListener('mouseleave', () => btn.style.transform = 'translateY(0)');
        });
    </script>

</div>
