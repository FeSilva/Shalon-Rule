<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieProduct
 *
 * @property $id
 * @property $codigo_produto
 * @property $codigo_produto_integracao
 * @property $descricao
 * @property $codigo
 * @property $unidade
 * @property $ncm
 * @property $ean
 * @property $valor_unitario
 * @property $codigo_familia
 * @property $tipo_item
 * @property $recomendacoes_fiscais
 * @property $peso_liq
 * @property $peso_bruto
 * @property $altura
 * @property $largura
 * @property $profundidade
 * @property $marca
 * @property $dias_garantia
 * @property $dias_crossdocking
 * @property $descr_detalhada
 * @property $obs_internas
 * @property $videos
 * @property $tabelas_preco
 * @property $exibir_descricao_nfe
 * @property $exibir_descricao_pedido
 * @property $cst_icms
 * @property $modalidade_icms
 * @property $csosn_icms
 * @property $aliquota_icms
 * @property $red_base_icms
 * @property $motivo_deson_icms
 * @property $per_icms_fcp
 * @property $codigo_beneficio
 * @property $cst_pis
 * @property $aliquota_pis
 * @property $cst_cofins
 * @property $aliquota_cofins
 * @property $cfop
 * @property $codInt_familia
 * @property $descricao_familia
 * @property $bloqueado
 * @property $bloquear_exclusao
 * @property $importado_api
 * @property $inativo
 * @property $aliquota_ibpt
 * @property $cest
 * @property $quantidade_estoque
 * @property $estoque_minimo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieProduct extends Model
{
    
    static $rules = [
		'codigo_produto' => 'required',
		'codigo_produto_integracao' => 'required',
		'descricao' => 'required',
		'codigo' => 'required',
		'unidade' => 'required',
		'ncm' => 'required',
		'ean' => 'required',
		'valor_unitario' => 'required',
		'codigo_familia' => 'required',
		'tipo_item' => 'required',
		'recomendacoes_fiscais' => 'required',
		'peso_liq' => 'required',
		'peso_bruto' => 'required',
		'altura' => 'required',
		'largura' => 'required',
		'profundidade' => 'required',
		'marca' => 'required',
		'dias_garantia' => 'required',
		'dias_crossdocking' => 'required',
		'descr_detalhada' => 'required',
		'obs_internas' => 'required',
		'videos' => 'required',
		'tabelas_preco' => 'required',
		'exibir_descricao_nfe' => 'required',
		'exibir_descricao_pedido' => 'required',
		'cst_icms' => 'required',
		'modalidade_icms' => 'required',
		'csosn_icms' => 'required',
		'aliquota_icms' => 'required',
		'red_base_icms' => 'required',
		'motivo_deson_icms' => 'required',
		'per_icms_fcp' => 'required',
		'codigo_beneficio' => 'required',
		'cst_pis' => 'required',
		'aliquota_pis' => 'required',
		'cst_cofins' => 'required',
		'aliquota_cofins' => 'required',
		'cfop' => 'required',
		'codInt_familia' => 'required',
		'descricao_familia' => 'required',
		'bloqueado' => 'required',
		'bloquear_exclusao' => 'required',
		'importado_api' => 'required',
		'inativo' => 'required',
		'aliquota_ibpt' => 'required',
		'cest' => 'required',
		'quantidade_estoque' => 'required',
		'estoque_minimo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo_produto','codigo_produto_integracao','descricao','codigo','unidade','ncm','ean','valor_unitario','codigo_familia','tipo_item','recomendacoes_fiscais','peso_liq','peso_bruto','altura','largura','profundidade','marca','dias_garantia','dias_crossdocking','descr_detalhada','obs_internas','videos','tabelas_preco','exibir_descricao_nfe','exibir_descricao_pedido','cst_icms','modalidade_icms','csosn_icms','aliquota_icms','red_base_icms','motivo_deson_icms','per_icms_fcp','codigo_beneficio','cst_pis','aliquota_pis','cst_cofins','aliquota_cofins','cfop','codInt_familia','descricao_familia','bloqueado','bloquear_exclusao','importado_api','inativo','aliquota_ibpt','cest','quantidade_estoque','estoque_minimo'];



}
