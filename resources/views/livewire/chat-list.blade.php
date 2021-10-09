<div>
    @forelse ($mensajes as $mensaje)
        @if ( $usuario === $mensaje['usuario'])
        <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 my-2 max-w-3xl w-full text-xs md:text-sm float-left message-out" role="alert">
            <p class="font-bold">Tu</p>
            <p class="">{{$mensaje['mensaje']}}</p>
        </div>
        @else
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 my-2 max-w-3xl w-full text-xs md:text-sm float-right message-in" role="alert">
            <p class="font-bold">{{$mensaje['usuario']}} dice:</p>
            <p class="">{{$mensaje['mensaje']}}</p>
        </div>
        @endif
    @empty
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded text-xs md:text-sm relative" role="alert">
        <strong class="font-bold">No hay mensajes!</strong>
        <span class="block sm:inline">No se han enviado nuevos mensajes.</span>
    </div>
    @endforelse
</div>

@push('scripts')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production '9b59e571eabb1ff5a028'
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{env('MIX_PUSHER_APP_KEY')}}', {
        cluster: 'us2'
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event', function(data) {
        //alert(JSON.stringify(data));

        Livewire.emitTo('chat-list', 'nuevo-mensaje', data);
    });
</script>
@endpush
