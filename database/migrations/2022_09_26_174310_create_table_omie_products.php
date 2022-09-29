<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_products', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_produto')->null();
            $table->string('codigo_produto_integracao')->null();
            $table->string('descricao')->null();
            $table->string('codigo')->null();
            $table->string('unidade')->null();
            $table->string('ncm')->null();
            $table->string('ean')->null();
            $table->decimal('valor_unitario',18,2)->null();
            $table->integer('codigo_familia')->null();
            $table->string('tipo_item')->null();
            $table->integer('recomendacoes_fiscais')->null();
            $table->integer('peso_liq')->null();
            $table->integer('peso_bruto')->null();
            $table->integer('altura')->null();
            $table->integer('largura')->null();
            $table->integer('profundidade')->null();
            $table->string('marca')->null();
            $table->integer('dias_garantia')->null();
            $table->integer('dias_crossdocking')->null();
            $table->string('descr_detalhada')->null();
            $table->string('obs_internas')->null();
            $table->string('videos')->null();
            $table->string('tabelas_preco')->null();
            $table->string('exibir_descricao_nfe')->null();
            $table->string('exibir_descricao_pedido')->null();
            $table->string('cst_icms')->null();
            $table->string('modalidade_icms')->null();
            $table->string('csosn_icms')->null();
            $table->integer('aliquota_icms')->null();
            $table->integer('red_base_icms')->null();
            $table->string('motivo_deson_icms')->null();
            $table->integer('per_icms_fcp')->null();
            $table->string('codigo_beneficio')->null();
            $table->string('cst_pis')->null();
            $table->integer('aliquota_pis')->null();
            $table->string('cst_cofins')->null();
            $table->integer('aliquota_cofins')->null();
            $table->string('cfop')->null();
            $table->string('codInt_familia')->null();
            $table->string('descricao_familia')->null();
            $table->string('bloqueado')->null();
            $table->string('bloquear_exclusao')->null();
            $table->string('importado_api')->null();
            $table->string('inativo')->null();
            $table->integer('aliquota_ibpt')->null();
            $table->string('cest')->null();
            $table->integer('quantidade_estoque')->null();
            $table->integer('estoque_minimo')->null();

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
        Schema::dropIfExists('omie_products');
    }
}
