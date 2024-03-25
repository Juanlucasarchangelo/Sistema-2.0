<?php

namespace App\Http\Livewire\Site;

use App\Models\Site;
use Livewire\Component;

class ListarSites extends Component
{
    public function render()
    {
        $all_sites = Site::all();
        return view('livewire.site.listar-sites', ['all_sites' => $all_sites]);
    }
}
