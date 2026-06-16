<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $records = Attendance::with('student')
                    ->latest()
                    ->get();

        return view(
            'attendance.index',
            compact('records')
        );
    }

    public function create()
    {
        $students = Student::all();

        return view(
            'attendance.create',
            compact('students')
        );
    }

    public function store(Request $request)
    {
        foreach ($request->status as $studentId => $status)
        {
            Attendance::create([
                'student_id' => $studentId,
                'attendance_date' => $request->attendance_date,
                'status' => $status
            ]);
        }

        return redirect()
            ->route('attendance.index')
            ->with('success','Attendance Saved');
    }
}