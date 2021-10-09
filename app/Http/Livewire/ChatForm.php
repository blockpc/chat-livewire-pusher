<?php

namespace App\Http\Livewire;

use App\Events\SendMessageEvent;
use Livewire\Component;

class ChatForm extends Component
{
    public $nombre;
    public $mensaje;

    public function mount()
    {
        $this->nombre = "";
        $this->mensaje = "";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }

    public function chat()
    {
        $this->validate([
            'nombre' => 'required|string|min:3',
            'mensaje' => 'required|string',
        ]);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success', 
            'message' => "Se ha enviado tu mensaje", 
            'title' => 'Mensaje enviado'
        ]);
        // $this->emitTo('chat-list', 'nuevo-mensaje', [
        //     'nombre' => $this->nombre,
        //     'mensaje' => $this->mensaje,
        // ]);
        event(new SendMessageEvent($this->nombre, $this->mensaje));
        $this->mensaje = "";
    }

    public function updatedNombre()
    {
        $this->emitTo('chat-list', 'set-nombre', $this->nombre);
    }
}
