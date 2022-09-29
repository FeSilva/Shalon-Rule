<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieContract
 *
 * @property $id
 * @property $cabecalho
 * @property $departamentos
 * @property $emailCliente
 * @property $infAdic
 * @property $itensContrato
 * @property $observacoes
 * @property $vencTextos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieContract extends Model
{
    
    static $rules = [
		'cabecalho' => 'required',
		'departamentos' => 'required',
		'emailCliente' => 'required',
		'infAdic' => 'required',
		'itensContrato' => 'required',
		'observacoes' => 'required',
		'vencTextos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cabecalho','departamentos','emailCliente','infAdic','itensContrato','observacoes','vencTextos'];



}
