<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admission_no',
        'name',
        'dob',
        'gender',
        'mobile',
        'email',
         'class',
         'total_fee',
        'address'
    ];
public function attendances()
{
    return $this->hasMany(Attendance::class);
}
public function fees()
{
    return $this->hasMany(Fee::class);
}
}