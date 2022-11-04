<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $team_id
 * @property $onwer_id
 * @property $name
 * @property $description
 * @property $amount
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'name' => 'required',
		'amount' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['team_id','onwer_id','name','description','amount'];



    /**
     * Relacionamento com a tabela pivot
     */
    public function users()
    {
      return $this->belongsToMany(User::class, 'service_user');
    }
}
