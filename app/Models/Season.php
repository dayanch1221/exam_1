<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $guarded = [
        'id0,'
    ];

    public function lessons()
    {
        return $this->hasMany(Student::class);
    }
}
