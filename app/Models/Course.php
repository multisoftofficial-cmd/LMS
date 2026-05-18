<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'title',
        'slug',
        'description',
        'image',
        'duration_weeks',
        'credits',
        'learning_outcomes',
        'level',
        'status',
    ];

    protected $casts = [
        'learning_outcomes' => 'json',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class)->orderBy('module_order');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
