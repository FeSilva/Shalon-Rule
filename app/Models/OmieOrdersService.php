<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieOrdersService
 *
 * @property $id
 * @property $cabecalho_cCodIntOS
 * @property $cabecalho_cCodParc
 * @property $cabecalho_cEtapa
 * @property $cabecalho_cNumOS
 * @property $cabecalho_dDtPrevisao
 * @property $cabecalho_nCodCli
 * @property $cabecalho_nCodOS
 * @property $cabecalho_nQtdeParc
 * @property $cabecalho_nValorTotal
 * @property $departamentos
 * @property $email_cEnvBoleto
 * @property $email_cEnvLink
 * @property $email_cEnvRecibo
 * @property $email_cEnviarPara
 * @property $infoCadastro_cAmbiente
 * @property $infoCadastro_cCancelada
 * @property $infoCadastro_cFaturada
 * @property $infoCadastro_cHrAlt
 * @property $infoCadastro_cHrCanc
 * @property $infoCadastro_cHrFat
 * @property $infoCadastro_cHrInc
 * @property $infoCadastro_dDtAlt
 * @property $infoCadastro_dDtCanc
 * @property $infoCadastro_dDtFat
 * @property $infoCadastro_dDtInc
 * @property $informacoesAdicionais_cCidPrestServ
 * @property $informacoesAdicionais_cCodCateg
 * @property $informacoesAdicionais_nCodCC
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieOrdersService extends Model
{
    
    static $rules = [
		'cabecalho_cCodIntOS' => 'required',
		'cabecalho_cCodParc' => 'required',
		'cabecalho_cEtapa' => 'required',
		'cabecalho_cNumOS' => 'required',
		'cabecalho_dDtPrevisao' => 'required',
		'cabecalho_nCodCli' => 'required',
		'cabecalho_nCodOS' => 'required',
		'cabecalho_nQtdeParc' => 'required',
		'cabecalho_nValorTotal' => 'required',
		'departamentos' => 'required',
		'email_cEnvBoleto' => 'required',
		'email_cEnvLink' => 'required',
		'email_cEnvRecibo' => 'required',
		'email_cEnviarPara' => 'required',
		'infoCadastro_cAmbiente' => 'required',
		'infoCadastro_cCancelada' => 'required',
		'infoCadastro_cFaturada' => 'required',
		'infoCadastro_cHrAlt' => 'required',
		'infoCadastro_cHrCanc' => 'required',
		'infoCadastro_cHrFat' => 'required',
		'infoCadastro_cHrInc' => 'required',
		'infoCadastro_dDtAlt' => 'required',
		'infoCadastro_dDtCanc' => 'required',
		'infoCadastro_dDtFat' => 'required',
		'infoCadastro_dDtInc' => 'required',
		'informacoesAdicionais_cCidPrestServ' => 'required',
		'informacoesAdicionais_cCodCateg' => 'required',
		'informacoesAdicionais_nCodCC' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cabecalho_cCodIntOS','cabecalho_cCodParc','cabecalho_cEtapa','cabecalho_cNumOS','cabecalho_dDtPrevisao','cabecalho_nCodCli','cabecalho_nCodOS','cabecalho_nQtdeParc','cabecalho_nValorTotal','departamentos','email_cEnvBoleto','email_cEnvLink','email_cEnvRecibo','email_cEnviarPara','infoCadastro_cAmbiente','infoCadastro_cCancelada','infoCadastro_cFaturada','infoCadastro_cHrAlt','infoCadastro_cHrCanc','infoCadastro_cHrFat','infoCadastro_cHrInc','infoCadastro_dDtAlt','infoCadastro_dDtCanc','infoCadastro_dDtFat','infoCadastro_dDtInc','informacoesAdicionais_cCidPrestServ','informacoesAdicionais_cCodCateg','informacoesAdicionais_nCodCC'];



}
