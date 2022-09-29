<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieAccount
 *
 * @property $id
 * @property $razao_social
 * @property $nome_fantasia
 * @property $pessoa_fisica
 * @property $cnpj_cpf
 * @property $cnae
 * @property $codigo_cliente_integracao
 * @property $codigo_cliente_omie
 * @property $contato
 * @property $email
 * @property $inscricao_estadual
 * @property $inscricao_municipal
 * @property $bank_agencia
 * @property $bank_codigo_banco
 * @property $bank_conta_corrente
 * @property $bank_doc_titular
 * @property $bank_nome_titular
 * @property $endereco
 * @property $bairro
 * @property $cep
 * @property $cidade
 * @property $cidade_ibge
 * @property $codigo_pais
 * @property $complemento
 * @property $endereco_entrega
 * @property $endereco_numero
 * @property $estado
 * @property $exterior
 * @property $inativo
 * @property $bloquear_faturamento
 * @property $tag
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieAccount extends Model
{
    
    static $rules = [
		'razao_social' => 'required',
		'nome_fantasia' => 'required',
		'pessoa_fisica' => 'required',
		'cnpj_cpf' => 'required',
		'cnae' => 'required',
		'codigo_cliente_integracao' => 'required',
		'codigo_cliente_omie' => 'required',
		'contato' => 'required',
		'email' => 'required',
		'inscricao_estadual' => 'required',
		'inscricao_municipal' => 'required',
		'bank_agencia' => 'required',
		'bank_codigo_banco' => 'required',
		'bank_conta_corrente' => 'required',
		'bank_doc_titular' => 'required',
		'bank_nome_titular' => 'required',
		'endereco' => 'required',
		'bairro' => 'required',
		'cep' => 'required',
		'cidade' => 'required',
		'cidade_ibge' => 'required',
		'codigo_pais' => 'required',
		'complemento' => 'required',
		'endereco_entrega' => 'required',
		'endereco_numero' => 'required',
		'estado' => 'required',
		'exterior' => 'required',
		'inativo' => 'required',
		'bloquear_faturamento' => 'required',
		'tag' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razao_social','nome_fantasia','pessoa_fisica','cnpj_cpf','cnae','codigo_cliente_integracao','codigo_cliente_omie','contato','email','inscricao_estadual','inscricao_municipal','bank_agencia','bank_codigo_banco','bank_conta_corrente','bank_doc_titular','bank_nome_titular','endereco','bairro','cep','cidade','cidade_ibge','codigo_pais','complemento','endereco_entrega','endereco_numero','estado','exterior','inativo','bloquear_faturamento','tag'];



}
