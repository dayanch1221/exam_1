<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    protected $guarded = [
        'id',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'registrations');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
