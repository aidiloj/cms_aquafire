<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $fillable = [
        'title',
        'images',
        'published_status',
        'content'
    ];
}
