<div class="p:2 sm:p-6 flex flex-col justify-between min-h-full">
    <div class="py-2">
        <input wire:model="nombre" type="text"
            class="w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('nombre') border border-red-600 @enderror"
            placeholder="Tu nombre..." id="nombre">
        <div class="text-red-700 dark:text-red-400 text-sm">@error('nombre'){{ $message }}@enderror</div>
    </div>
    <div class="flex-1 mb-auto max-h-96 py-4 overflow-y-auto">
        @livewire('chat-list', ['nombre' => $nombre], key('chat-list'))
    </div>
    <div class="flex py-2">
        <div class="flex-1">
            <input wire:model="mensaje" type="text"
                class="w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('mensaje') border border-red-600 @enderror"
                placeholder="Tu mensaje..." id="mensaje">
            <div class="text-red-700 dark:text-red-400 text-sm">@error('mensaje'){{ $message }}@enderror</div>
        </div>
        <button type="button" wire:click="chat" class="bg-green-500 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 mx-1 rounded h-10">Enviar</button>
    </div>
</div>
