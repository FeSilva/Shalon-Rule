<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAccountsOmie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_accounts', function (Blueprint $table) {
            $table->id();

            //Dados da Conta
            $table->string('razao_social')->null();
            $table->string('nome_fantasia')->null();
            $table->string('pessoa_fisica')->null();
            $table->string('cnpj_cpf')->null();
            $table->string('cnae')->null();
            $table->string('codigo_cliente_integracao')->null();
            $table->string('codigo_cliente_omie')->null();
            $table->string('contato')->null();
            $table->string('email')->null();
            $table->string('inscricao_estadual')->null();
            $table->string('inscricao_municipal')->null();

            //Dados Bancarios
            $table->string('bank_agencia')->null();
            $table->string('bank_codigo_banco')->null();
            $table->string('bank_conta_corrente')->null();
            $table->string('bank_doc_titular')->null();
            $table->string('bank_nome_titular')->null();

            //Endereço
            $table->string('endereco')->null();
            $table->string('bairro')->null();
            $table->string('cep')->null();
            $table->string('cidade')->null();
            $table->string('cidade_ibge')->null();
            $table->string('codigo_pais')->null();
            $table->string('complemento')->null();
            $table->string('endereco_entrega')->null();
            $table->string('endereco_numero')->null();
            $table->string('estado')->null();
            $table->string('exterior')->null();
            $table->string('inativo')->null();

            $table->string('bloquear_faturamento')->null();
            $table->string('tag')->null();

            //Created_at / updated_at / deleted_at(opcional)
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
        Schema::dropIfExists('accounts_omie');
    }
}
