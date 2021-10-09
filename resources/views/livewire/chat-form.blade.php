<div class="">
    <div class="w-64 relative">
        <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 my-2 message-out" role="alert">
            <p class="text-sm">Your message is sending.</p>
        </div>
    </div>
    <div class="p:2 sm:p-6 justify-between flex flex-col">
        <div class="">
            <input wire:model="nombre" type="text"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('nombre') border border-red-600 @enderror"
                placeholder="Tu nombre..." id="nombre">
                <div class="text-red-700 dark:text-red-400 text-sm">@error('nombre'){{ $message }}@enderror</div>
        </div>
        <div class="flex-1 min-h-full py-4">
            <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 my-2 message-out" role="alert">
                <p class="text-sm">Some additional text to explain said message.</p>
            </div>
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 my-2 message-in" role="alert">
                <p class="text-sm">Some additional text to explain said message.</p>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1">
                <input wire:model="mensaje" type="text"
                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('mensaje') border border-red-600 @enderror"
                    placeholder="Tu mensaje..." id="mensaje">
                    <div class="text-red-700 dark:text-red-400 text-sm">@error('mensaje'){{ $message }}@enderror</div>
            </div>
            <button type="button" wire:click="chat" class="bg-green-500 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 mx-1 rounded">Enviar</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('mensaje-enviado', function() {
            console.log('mensaje-enviado')
        });
    </script>
@endpush
