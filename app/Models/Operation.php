<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operation
 *
 * @property $id
 * @property $time_id
 * @property $name
 * @property $strat
 * @property $break
 * @property $return
 * @property $closure
 * @property $created_at
 * @property $updated_at
 *
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operation extends Model
{
    
    static $rules = [
		'team_id' => 'required',
		'name' => 'required',
		'strat' => 'required',
		'break' => 'required',
		'return' => 'required',
		'closure' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['team_id','name','strat','break','return','closure'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'team_id');
    }
    

}
