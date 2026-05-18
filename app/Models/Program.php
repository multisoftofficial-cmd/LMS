<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'duration_months',
        'price',
        'status',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function enrollments()
    {
        return $this->hasManyThrough(Enrollment::class, Course::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
