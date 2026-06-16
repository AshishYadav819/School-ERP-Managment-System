<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'employee_code',
        'name',
        'mobile',
        'email',
        'subject',
        'salary'
    ];
}