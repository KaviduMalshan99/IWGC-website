<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'location',
        'description',
        'deadline_date',
        'job_type', 
        'experience',
    ];

    protected $casts = [
        'deadline_date' => 'date', 
    ];
}
