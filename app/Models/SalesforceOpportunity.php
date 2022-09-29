<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SalesforceOpportunity
 *
 * @property $id
 * @property $opportunity_id
 * @property $account_id
 * @property $opportunity_number
 * @property $name
 * @property $amount
 * @property $old_amount
 * @property $close_date
 * @property $old_account_owner
 * @property $owner_id
 * @property $description
 * @property $currency_iso_code
 * @property $forecast_category
 * @property $stage_name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SalesforceOpportunity extends Model
{
    
    static $rules = [
		'opportunity_id' => 'required',
		'account_id' => 'required',
		'opportunity_number' => 'required',
		'name' => 'required',
		'amount' => 'required',
		'old_amount' => 'required',
		'close_date' => 'required',
		'old_account_owner' => 'required',
		'owner_id' => 'required',
		'description' => 'required',
		'currency_iso_code' => 'required',
		'forecast_category' => 'required',
		'stage_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['opportunity_id','account_id','opportunity_number','name','amount','old_amount','close_date','old_account_owner','owner_id','description','currency_iso_code','forecast_category','stage_name'];



}
