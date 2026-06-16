<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\Student;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::with('student')
                   ->latest()
                   ->get();

        return view(
            'fees.index',
            compact('fees')
        );
    }

    public function create()
    {
        $students = Student::all();

        return view(
            'fees.create',
            compact('students')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'amount' => 'required',
            'payment_date' => 'required',
            'payment_mode' => 'required'
        ]);

        Fee::create($request->all());

        return redirect()
            ->route('fees.index')
            ->with('success','Fee Collected Successfully');
    }
    public function edit(Fee $fee)
{
    $students = Student::all();

    return view(
        'fees.edit',
        compact('fee','students')
    );
}

public function update(Request $request, Fee $fee)
{
    $request->validate([
        'student_id' => 'required',
        'amount' => 'required',
        'payment_date' => 'required',
        'payment_mode' => 'required'
    ]);

    $fee->update($request->all());

    return redirect()
        ->route('fees.index')
        ->with('success','Fee Updated Successfully');
}
public function show(Fee $fee)
{
    return view('fees.show', compact('fee'));
}
}