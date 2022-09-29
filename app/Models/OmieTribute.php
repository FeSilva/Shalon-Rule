<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OmieTribute
 *
 * @property $id
 * @property $cDescricao
 * @property $cIdTrib
 * @property $cTipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OmieTribute extends Model
{
    
    static $rules = [
		'cDescricao' => 'required',
		'cIdTrib' => 'required',
		'cTipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cDescricao','cIdTrib','cTipo'];



}
