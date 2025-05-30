<div class="min-h-screen bg-blue-800 pt-10 pb-10">
    <div class="min-h-screen w-full max-w-xl mx-auto bg-blue-800 text-white rounded-2xl overflow-hidden shadow-2xl">

        <!-- Header com botão de voltar, logo e sino -->
        <div class="flex items-center justify-between p-4">
            <!-- Back button -->
            <button class="p-2 bg-[#0a2d79] rounded-full hover:bg-[#0a1f5e]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Logo “PREMIOS PIX◆” -->
            <div class="text-lg md:text-xl font-extrabold tracking-wider uppercase">
                <img src="{{ asset('images/img-original.png') }}" width="150px">
            </div>

            <!-- Notification bell -->
            <button class="relative p-2 bg-[#0a2d79] rounded-full hover:bg-[#0a1f5e]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                     viewBox="0 0 20 20">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6z" />
                    <path d="M14 14a2 2 0 11-4 0h4z" />
                </svg>
                <span class="absolute top-1 right-1 h-2 w-2 bg-red-500 rounded-full ring-1 ring-white"></span>
            </button>
        </div>

        <!-- Corpo do card -->
        <div class="px-6 pb-6 text-center">
            <div class="flex items-center justify-center">
                <h2 class="font-inter text-4xl md:text-5xl font-extrabold mb-4 w-[50%]">VOCÊ FOI PREMIADO</h2>
            </div>
            <!-- Título -->

            <!-- Imagem gerada -->
            <div class="mx-auto mb-4 border-4 border-gray-50/30 rounded-xl" style="width:250px;height:250px;">
                <img
                    src="{{ asset('images/alert-img.png') }}"

                    alt="Mãos segurando presente e moedas"
                    class="object-contain w-full h-full"
                />
            </div>

            <div class="flex items-center justify-center">
                <p class="font-inter text-2xl md:text-xl font-extrabold mb-6 w-[80%]">
                    AVALIE E GANHE ATÉ <strong>R$732,00</strong> NO SEU PIX!
                </p>
            </div>

            <div class="flex items-center justify-center">
                <a
                    href="#"
                    wire:click.prevent="registerVisitor"
                    class="text-inter font-extrabold block py-4 px-4 text-3xl md:text-base rounded-full
                     bg-gradient-to-r from-blue-500 to-blue-400
                     hover:from-blue-600 hover:to-blue-500
                     transition w-[95%]"
                >
                    CLIQUE AQUI E COMECE AGORA!
                </a>
            </div>

            <!-- Seção “Como funciona?” -->
            <section class="bg-blue-800 text-white text-center px-4 py-8 md:py-12">
                <!-- Título -->
                <h2 class="text-2xl md:text-3xl font-bold mb-4">
                    Como funciona?
                </h2>

                <!-- Descrição -->
                <p class="text-base md:text-lg font-medium mb-6 max-w-xl mx-auto">
                    Avalie nossos produtos ou serviços e ganhe dinheiro. É rápido, fácil e você pode ganhar recompensas únicas!
                </p>

                <!-- Lista de benefícios -->
                <ul class="space-y-4 mb-6 max-w-md mx-auto">
                    <li class="flex items-center justify-center">
                        <!-- ícone de check -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 flex-shrink-0 text-blue-800 bg-white rounded-full mr-3"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1
                                          1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1
                                          0 000-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="text-base md:text-lg">Participe em poucos minutos</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 flex-shrink-0 text-blue-800 bg-white rounded-full mr-3"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1
                                                1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1
                                                0 000-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="text-base md:text-lg">Ganhe prêmios exclusivos</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 flex-shrink-0 text-blue-800 bg-white rounded-full mr-3"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1
                                             1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1
                                             0 000-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="text-base md:text-lg">Ajude-nos a melhorar ainda mais</span>
                    </li>
                </ul>

                <!-- Nota de tempo limitado -->
                <div class="inline-flex items-center text-sm md:text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 text-white mr-2"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000
                                            16zm1-8.414V6a1 1 0 10-2 0v5a1
                                             1 0 00.553.894l3 1.5a1 1 0 10.894-1.788l-2.447-1.224z"
                              clip-rule="evenodd" />
                    </svg>
                    <span>Oferta por tempo limitado</span>
                </div>
            </section>

        </div>
    </div>

    <section class="text-white text-center px-4 py-6">
        <p class="text-sm md:text-base font-medium leading-relaxed max-w-2xl mx-auto">
            Aviso legal: Promoção exclusiva da empresa <strong>Premios Pix</strong> de CNPJ <strong>48.077.864/0001-38</strong>, conforme regulamento disponível. Sujeita a alterações e condições específicas. Consulte os termos aplicáveis.
        </p>
    </section>

</div>
