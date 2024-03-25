<?php

namespace App\Http\Livewire\Site;

use App\Models\Site;
use Livewire\Component;

class AdicionarSites extends Component
{
    public $data_inicio_site;
    public $email_pessoal;
    public $id_cliente;
    public $dominio;

    public function mount()
    {
        $this->data_inicio_site = date('Y-m-d');
        $this->reset(['dominio', 'id_cliente', 'data_inicio_site', 'email_pessoal']);
    }

    public function salvar()
    {
        $mensagens = [
            'dominio.required' => 'O campo :attribute é obrigatório.',
            'id_cliente.required' => 'O campo :attribute é obrigatório.',
            'data_inicio_site.date' => 'O campo :attribute deve ser uma data válida.',
            'email_pessoal.required' => 'O campo :attribute é obrigatório.'
        ];

        $validated = $this->validate([
            'dominio' => 'required',
            'id_cliente' => 'required',
            'data_inicio_site' => 'date|required',
            'email_pessoal' => 'required',
        ], $mensagens);

        Site::create($validated);
    }


    public function render()
    {
        return view('livewire.site.adicionar-sites');
    }
}
