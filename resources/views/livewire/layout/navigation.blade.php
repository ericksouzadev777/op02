<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 p-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- aqui muda justify-between para justify-center -->
        <div class="flex justify-center items-center h-16 space-x-12">

            <!-- logo -->
            <div class="shrink-0">
                <a href="{{ route('home') }}" wire:navigate>
                    <img src="{{ asset('images/img-original.png') }}" width="100" height="100" alt="Premios PIX">
                </a>
            </div>

            <div class="flex justify-end gap-2">
                <!-- valor -->
                <div class="px-4 py-2 border border-gray-300 rounded-md text-black font-bold">
                    R$ 100
                </div>

                <!-- botão sacar -->
                <button wire:click="sacar" class="bg-blue-700 text-white font-bold py-2 px-6 rounded-md hover:bg-blue-800">
                    SACAR
                </button>
            </div>
        </div>
    </div>
</nav>
