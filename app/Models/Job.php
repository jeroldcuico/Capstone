<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'details',
        'price',
        'job_code',
        'description',
        'image',
        'created_at',
        'deleted_at',
    ];
}
