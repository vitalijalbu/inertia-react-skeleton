<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adset extends Model
{
    use HasFactory;

    protected $table = 'adsets_analytics';
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

    public function accountAnalytics()
    {
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

}
