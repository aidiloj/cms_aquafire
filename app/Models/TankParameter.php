<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TankParameter extends Model
{
    protected $fillable = [
        'date',
        'ammonia',
        'nitrite',
        'nitrate',
        'ph'
    ];
}
