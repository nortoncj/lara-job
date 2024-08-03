<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSaved extends Model
{
    use HasFactory;

    protected  $table = 'jobs_saved';
    protected $fillable = [
        'id',
        'job_id',
        'user_id',
        'company',
        'job_type',
        'job_image',
        'job_title',
        'job_region'
    ];

    public $timestamps = true;
}
