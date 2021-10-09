<?php

namespace App\Http\Livewire;

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
            'nombre' => 'required|string',
            'mensaje' => 'required|string',
        ]);
        //$this->dispatchBrowserEvent('mensaje-enviado');
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success', 
            'message' => "Se ha enviado tu mensaje", 
            'title' => 'Mensaje enviado'
        ]);
    }
}
