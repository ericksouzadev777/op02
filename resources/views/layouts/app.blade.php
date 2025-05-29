<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @if(isset($statusAlert) && $statusAlert->active)
            <div class="min-h-screen bg-blue-800">
                <div class="min-h-screen w-full max-w-xl mx-auto bg-blue-800 text-white rounded-2xl overflow-hidden shadow-xl">

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
                                class="text-inter font-extrabold block py-4 px-4 text-3xl md:text-base rounded-full
                                     bg-gradient-to-r from-blue-500 to-blue-400
                                     hover:from-blue-600 hover:to-blue-500
                                     transition w-[95%]"
                                >
                                CLIQUE AQUI E COMECE AGORA!
                            </a>
                        </div>

                        <div class="flex items-center justify-center">
                            <p class="font-inter text-2xl md:text-xl font-extrabold mb-6 w-[80%] mt-8">
                                Como Funciona?
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        @else
            <div class="min-h-screen bg-gray-100">
                <livewire:layout.navigation />

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        @endif
    </body>
</html>
