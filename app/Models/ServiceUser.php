<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    use HasFactory;

    protected $table = 'service_user';
    protected $fillable = [
        'service_id',
        'user_id',
        'amount_for_personal',
    ];

}
