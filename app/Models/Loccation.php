<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class Loccation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class;)
    }
}
