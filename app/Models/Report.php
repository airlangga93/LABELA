<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title',
        'location',
        'disaster_type',
        'victims',
        'description',
        'disaster_date',
        'status',
    ];
}
