@extends('layout')

@section('content')

<div class="d-flex justify-content-between">

<h2>Attendance Report</h2>

<a href="{{ route('attendance.create') }}"
 class="btn btn-info text-white">
Mark Attendance
</a>

</div>

<br>

<table class="table table-bordered">

<style>
.table-header th {
    background-color: #cfe8ef;
    border: 1px solid #a8c7d1;
}
</style>

<tr class="table-header">
    <th>ID</th>
    <th>Date</th>
    <th>Student</th>
    <th>Status</th>
</tr>

@foreach($records as $record)

<tr>

<td>{{ $record->id }}</td>

<td>{{ $record->attendance_date }}</td>

<td>{{ $record->student->name }}</td>

<td>

@if($record->status=="Present")

<span class="badge bg-success">
Present
</span>

@else

<span class="badge bg-danger">
Absent
</span>

@endif

</td>

</tr>

@endforeach

</table>

@endsection