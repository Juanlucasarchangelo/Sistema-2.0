<?php

namespace App\Http\Livewire\Site;

use App\Models\Site;
use Livewire\Component;

class AdicionarSites extends Component
{
    public $data;
    public $email;
    public $id_cliente;
    public $dominio;

    public function mount(){
        $this->data = date('Y-m-d');
    }

    public function salvar()
    {
        Site::create([
            'dominio' => $this->dominio,
            'data_inicio_site' => $this->dominio,
            'id_cliente' => $this->id_cliente,
            'email_pessoal' => $this->email,
        ]);
    }

    public function render()
    {
        return view('livewire.site.adicionar-sites');
    }
}
