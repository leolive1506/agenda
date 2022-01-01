<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Agenda extends Component
{
    public $nome = 'Leo lindo';
    public $mostrarCont = false;

    public function toggleMostarCont()
    {
        $this->mostrarCont = !$this->mostrarCont;
    }

    public function render()
    {
        return view('livewire.pages.agenda');
    }
}
