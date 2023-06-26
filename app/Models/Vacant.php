<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\Category;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacant extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $casts = [
        'apply_deadline' => 'datetime',
    ];

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class)->orderBy('created_at', 'desc');
    }

    public function recruiter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
