<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account_analytics';
    protected $fillable = [
        'account_id',
        'account_name',
        'tmz_city',
        'platform',
        'json_data',
        'last_updated_ts',
        'ts_created',
    ];

    protected $casts = [
        'json_data' => 'json',
        'ts_created' => 'datetime',
    ]; 
}
