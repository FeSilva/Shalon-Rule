<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieService
 *
 * @property $id
 * @property $cabecalho_cCodCateg
 * @property $cabecalho_cCodLC116
 * @property $cabecalho_cCodServMun
 * @property $cabecalho_cCodigo
 * @property $cabecalho_cDescricao
 * @property $cabecalho_cIdTrib
 * @property $cabecalho_nIdNBS
 * @property $cabecalho_nPrecoUnit
 * @property $descricao_cDescrCompleta
 * @property $impostos_cRetCOFINS
 * @property $impostos_cRetCSLL
 * @property $impostos_cRetINSS
 * @property $impostos_cRetIR
 * @property $impostos_cRetISS
 * @property $impostos_cRetPIS
 * @property $impostos_nAliqCOFINS
 * @property $impostos_nAliqCSLL
 * @property $impostos_nAliqINSS
 * @property $impostos_nAliqIR
 * @property $impostos_nAliqISS
 * @property $impostos_nAliqPIS
 * @property $impostos_nRedBaseINSS
 * @property $info_cImpAPI
 * @property $info_dAlt
 * @property $info_dInc
 * @property $info_hAlt
 * @property $info_hInc
 * @property $info_inativo
 * @property $info_uAlt
 * @property $info_uInc
 * @property $intListar_cCodIntServ
 * @property $intListar_nCodServ
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieService extends Model
{
    
    static $rules = [
		'cabecalho_cCodCateg' => 'required',
		'cabecalho_cCodLC116' => 'required',
		'cabecalho_cCodServMun' => 'required',
		'cabecalho_cCodigo' => 'required',
		'cabecalho_cDescricao' => 'required',
		'cabecalho_cIdTrib' => 'required',
		'cabecalho_nIdNBS' => 'required',
		'cabecalho_nPrecoUnit' => 'required',
		'descricao_cDescrCompleta' => 'required',
		'impostos_cRetCOFINS' => 'required',
		'impostos_cRetCSLL' => 'required',
		'impostos_cRetINSS' => 'required',
		'impostos_cRetIR' => 'required',
		'impostos_cRetISS' => 'required',
		'impostos_cRetPIS' => 'required',
		'impostos_nAliqCOFINS' => 'required',
		'impostos_nAliqCSLL' => 'required',
		'impostos_nAliqINSS' => 'required',
		'impostos_nAliqIR' => 'required',
		'impostos_nAliqISS' => 'required',
		'impostos_nAliqPIS' => 'required',
		'impostos_nRedBaseINSS' => 'required',
		'info_cImpAPI' => 'required',
		'info_dAlt' => 'required',
		'info_dInc' => 'required',
		'info_hAlt' => 'required',
		'info_hInc' => 'required',
		'info_inativo' => 'required',
		'info_uAlt' => 'required',
		'info_uInc' => 'required',
		'intListar_cCodIntServ' => 'required',
		'intListar_nCodServ' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cabecalho_cCodCateg','cabecalho_cCodLC116','cabecalho_cCodServMun','cabecalho_cCodigo','cabecalho_cDescricao','cabecalho_cIdTrib','cabecalho_nIdNBS','cabecalho_nPrecoUnit','descricao_cDescrCompleta','impostos_cRetCOFINS','impostos_cRetCSLL','impostos_cRetINSS','impostos_cRetIR','impostos_cRetISS','impostos_cRetPIS','impostos_nAliqCOFINS','impostos_nAliqCSLL','impostos_nAliqINSS','impostos_nAliqIR','impostos_nAliqISS','impostos_nAliqPIS','impostos_nRedBaseINSS','info_cImpAPI','info_dAlt','info_dInc','info_hAlt','info_hInc','info_inativo','info_uAlt','info_uInc','intListar_cCodIntServ','intListar_nCodServ'];



}
