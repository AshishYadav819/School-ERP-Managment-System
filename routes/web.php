<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeeController;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Fee;
Route::get('/', function () {
    return redirect('/students');
});
Route::get('/dashboard', function () {

    return view('dashboard', [
        'students' => Student::count(),
        'teachers' => Teacher::count(),
        'fees' => Fee::sum('amount')
    ]);

})->name('dashboard');
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::get('/attendance',[AttendanceController::class,'index'])->name('attendance.index');
Route::get('/attendance/create',[AttendanceController::class,'create'])->name('attendance.create');
Route::post('/attendance/store',[AttendanceController::class,'store'])->name('attendance.store');
Route::get('/fees',[FeeController::class,'index'])->name('fees.index');
Route::get('/fees/create',[FeeController::class,'create'])->name('fees.create');
Route::post('/fees/store',[FeeController::class,'store'])->name('fees.store');
Route::get('/fees/show',[FeeController::class,'show'])->name('fees.show');
