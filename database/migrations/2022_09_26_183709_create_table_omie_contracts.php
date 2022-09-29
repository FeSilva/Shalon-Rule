<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_contracts', function (Blueprint $table) {
            $table->id();

            $table->json('cabecalho')->null();
            $table->json('departamentos')->null();
            $table->json('emailCliente')->null();
            $table->json('infAdic')->null();
            $table->json('itensContrato')->null();
            $table->json('observacoes')->null();
            $table->json('vencTextos')->null();

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
        Schema::dropIfExists('omie_contracts');
    }
}
