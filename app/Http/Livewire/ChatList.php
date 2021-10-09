<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    public $mensajes;
    public $usuario;

    protected $listeners = [
        'set-nombre' => 'setNombre',
        'nuevo-mensaje' => 'newMessage',
    ];

    public function mount($nombre)
    {
        $this->mensajes = [];
        $this->usuario = $nombre;
    }

    public function render()
    {
        return view('livewire.chat-list');
    }

    public function newMessage($mensaje)
    {
        $this->mensajes[] = $mensaje;
        if ($this->usuario !== $mensaje['usuario'] ) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'info', 
                'message' => "Mensaje recibido", 
                'title' => 'Nuevo Mensaje'
            ]);
        }
    }

    public function setNombre(string $usuario)
    {
        $this->usuario = $usuario;
    }
}
