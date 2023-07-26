<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function candidate()
    {
        return $this->belongsTo(User::class);
    }
}
