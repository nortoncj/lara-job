<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected  $table = 'applications';
    protected $fillable = [
        'id',
        'cv',
        'user_id',
        'job_id',
        'email',
        'job_image',
        'job_title',
        'job_region',
        'company',
        'job_type',
    ];

    public $timestamps = true;
}
