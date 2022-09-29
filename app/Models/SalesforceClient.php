<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SalesforceClient
 *
 * @property $id
 * @property $account_id
 * @property $ref_id
 * @property $parent_id
 * @property $end_user_id
 * @property $name
 * @property $tax_id
 * @property $phone
 * @property $client_type
 * @property $shipping_address
 * @property $billing_address
 * @property $first_purchase_date
 * @property $payment_method
 * @property $onwer_link
 * @property $status
 * @property $authentication_key
 * @property $last_purchase_date
 * @property $account_full_legal_name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SalesforceClient extends Model
{
    
    static $rules = [
		'account_id' => 'required',
		'ref_id' => 'required',
		'parent_id' => 'required',
		'end_user_id' => 'required',
		'name' => 'required',
		'tax_id' => 'required',
		'phone' => 'required',
		'client_type' => 'required',
		'shipping_address' => 'required',
		'billing_address' => 'required',
		'first_purchase_date' => 'required',
		'payment_method' => 'required',
		'onwer_link' => 'required',
		'status' => 'required',
		'authentication_key' => 'required',
		'last_purchase_date' => 'required',
		'account_full_legal_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['account_id','ref_id','parent_id','end_user_id','name','tax_id','phone','client_type','shipping_address','billing_address','first_purchase_date','payment_method','onwer_link','status','authentication_key','last_purchase_date','account_full_legal_name'];



}
