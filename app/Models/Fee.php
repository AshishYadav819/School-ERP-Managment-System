<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_mode',
        'remarks'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }
}