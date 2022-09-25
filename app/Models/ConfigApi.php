<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigApi
 *
 * @property $id
 * @property $conf_group
 * @property $conf_key
 * @property $conf_value
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConfigApi extends Model
{
    
    static $rules = [
		'conf_group' => 'required',
		'conf_key' => 'required',
		'conf_value' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['conf_group','conf_key','conf_value'];



}
