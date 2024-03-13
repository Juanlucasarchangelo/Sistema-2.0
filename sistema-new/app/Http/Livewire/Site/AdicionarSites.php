<?php

namespace App\Http\Livewire\Site;

use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class AdicionarSites extends Component
{

    
    public function salvar(Request $request)
    {
        dd('Oi');
        dd($request);
    }

    public function render()
    {
        return view('livewire.site.adicionar-sites');
    }
}
