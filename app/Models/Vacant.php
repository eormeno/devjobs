<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $fillable = [
        'title',
        'salary_id',
        'category_id',
        'company',
        'apply_deadline',
        'job_description',
        'user_id',
        'image',
        'published'
    ];
}
