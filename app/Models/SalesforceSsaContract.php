<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SalesforceSsaContract
 *
 * @property $id
 * @property $ssa_id
 * @property $account_id
 * @property $ssa_start_date
 * @property $ssa_end_date
 * @property $active
 * @property $next_poss_expo_date
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SalesforceSsaContract extends Model
{
    
    static $rules = [
		'ssa_id' => 'required',
		'account_id' => 'required',
		'ssa_start_date' => 'required',
		'ssa_end_date' => 'required',
		'active' => 'required',
		'next_poss_expo_date' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ssa_id','account_id','ssa_start_date','ssa_end_date','active','next_poss_expo_date','status'];



}
