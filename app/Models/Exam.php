<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'passing_score',
        'max_attempts',
        'duration_minutes',
        'total_questions',
        'question_order',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(ExamQuestion::class)->orderBy('question_order');
    }

    public function results()
    {
        return $this->hasMany(ExamResult::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
