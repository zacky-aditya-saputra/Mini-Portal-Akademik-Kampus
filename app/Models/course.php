<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasUuids;

    protected $fillable = [
        'course_code',
        'name',
        'sks',
        'lecturer',
        'description',
        'category'
    ];
}
