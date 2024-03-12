<?php

namespace App\Http\Livewire;

use App\Models\Briefing;
use App\Models\Cliente;
use App\Models\Site;
use Livewire\Component;

class Painel extends Component
{
    public function render()
    {
        $cliente = Cliente::count();
        $site = Site::count();
        $resumo = 1;

        return view('livewire.painel', ['cliente' => $cliente], ['site' => $site], ['resumo' => $resumo]);
    }
}
