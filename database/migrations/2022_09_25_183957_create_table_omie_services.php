<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_services', function (Blueprint $table) {
            $table->id();

            $table->string('cabecalho_cCodCateg')->null();
            $table->string('cabecalho_cCodLC116')->null();
            $table->string('cabecalho_cCodServMun')->null();
            $table->string('cabecalho_cCodigo')->null();
            $table->string('cabecalho_cDescricao')->null();
            $table->string('cabecalho_cIdTrib')->null();
            $table->string('cabecalho_nIdNBS')->null();
            $table->decimal('cabecalho_nPrecoUnit',18,2)->null();
            $table->string('descricao_cDescrCompleta')->null();

            $table->string('impostos_cRetCOFINS')->null();
            $table->string('impostos_cRetCSLL')->null();
            $table->string('impostos_cRetINSS')->null();
            $table->string('impostos_cRetIR')->null();
            $table->string('impostos_cRetISS')->null();
            $table->string('impostos_cRetPIS')->null();
            $table->decimal('impostos_nAliqCOFINS',18,2)->null();
            $table->decimal('impostos_nAliqCSLL',18,2)->null();
            $table->decimal('impostos_nAliqINSS',18,2)->null();
            $table->decimal('impostos_nAliqIR',18,2)->null();
            $table->decimal('impostos_nAliqISS',18,2)->null();
            $table->decimal('impostos_nAliqPIS',18,2)->null();
            $table->integer('impostos_nRedBaseINSS')->null();

            $table->string('info_cImpAPI')->null();
            $table->string('info_dAlt')->null();
            $table->string('info_dInc')->null();
            $table->string('info_hAlt')->null();
            $table->string('info_hInc')->null();
            $table->string('info_inativo')->null();
            $table->string('info_uAlt')->null();
            $table->string('info_uInc')->null();

            $table->string('intListar_cCodIntServ')->null();
            $table->binary('intListar_nCodServ')->null();


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
        Schema::dropIfExists('omie_services');
    }
}
