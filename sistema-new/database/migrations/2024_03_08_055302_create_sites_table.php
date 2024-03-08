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
            $table->integer('id_cliente');
            $table->string('data_inicio_site');
            $table->string('dominio');
            $table->string('email_profissional');
            $table->string('endereco_loja_virtual');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('google');
            $table->string('youtube');
            $table->string('informacoes_adicionais');
            $table->string('local_hospedagem');
            $table->string('dns_primario');
            $table->string('dns_secundario');
            $table->string('usuario_ftp');
            $table->string('host_ftp');
            $table->string('senha_ftp');
            $table->string('informacoes_login_site');
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
