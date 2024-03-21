<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente');
            $table->string('email_pessoal');
            $table->string('dominio');
            $table->string('data_inicio_site');
            $table->string('status')->nullable();
            $table->string('data_cancelamento')->nullable();
            $table->string('email_profissional')->nullable();
            $table->string('endereco_loja_virtual')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('youtube')->nullable();
            $table->string('informacoes_adicionais')->nullable();
            $table->string('local_hospedagem')->nullable();
            $table->string('dns_primario')->nullable();
            $table->string('dns_secundario')->nullable();
            $table->string('usuario_ftp')->nullable();
            $table->string('host_ftp')->nullable();
            $table->string('vencimento_domínio')->nullable();
            $table->string('provedor_dominio')->nullable();
            $table->string('informacoes_acesso_dominio')->nullable();
            $table->string('informacoes_login_site')->nullable();
            $table->string('informacoes_banco_dados')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
