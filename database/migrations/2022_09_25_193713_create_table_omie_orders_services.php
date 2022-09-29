<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieOrdersServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_orders_services', function (Blueprint $table) {
            $table->id();

            $table->string('cabecalho_cCodIntOS')->null();
            $table->string('cabecalho_cCodParc')->null();
            $table->string('cabecalho_cEtapa')->null();
            $table->string('cabecalho_cNumOS')->null();
            $table->datetime('cabecalho_dDtPrevisao')->null();
            $table->integer('cabecalho_nCodCli')->null();
            $table->integer('cabecalho_nCodOS')->null();
            $table->integer('cabecalho_nQtdeParc')->null();
            $table->decimal('cabecalho_nValorTotal',18,2)->null();

            $table->string('departamentos')->null();
            $table->string('email_cEnvBoleto')->null();
            $table->string('email_cEnvLink')->null();
            $table->string('email_cEnvRecibo')->null();
            $table->string('email_cEnviarPara')->null();

            $table->string('infoCadastro_cAmbiente')->null();
            $table->string('infoCadastro_cCancelada')->null();
            $table->string('infoCadastro_cFaturada')->null();
            $table->string('infoCadastro_cHrAlt')->null();
            $table->string('infoCadastro_cHrCanc')->null();
            $table->string('infoCadastro_cHrFat')->null();
            $table->string('infoCadastro_cHrInc')->null();
            $table->string('infoCadastro_dDtAlt')->null();
            $table->string('infoCadastro_dDtCanc')->null();
            $table->string('infoCadastro_dDtFat')->null();
            $table->string('infoCadastro_dDtInc')->null();

            $table->string('informacoesAdicionais_cCidPrestServ')->null();
            $table->string('informacoesAdicionais_cCodCateg')->null();
            $table->integer('informacoesAdicionais_nCodCC')->null();

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
        Schema::dropIfExists('omie_orders_services');
    }
}
