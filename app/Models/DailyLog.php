<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    protected $fillable = [
        'title',
        'images',
        'publish_status',
        'content',
        'published_date'
    ];
}
