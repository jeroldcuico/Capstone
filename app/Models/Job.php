<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'title',
        'body',
        'budget',
        'position_type',
        'slug',
        'project_duration',
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'job_id');
    }
}
