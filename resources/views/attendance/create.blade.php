@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Student Attendance Entry</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('attendance.store') }}"
              method="POST">

            @csrf

            <div class="row">

                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Attendance Date
                        <span class="text-danger">*</span>
                    </label>

                    <input type="date"
                           name="attendance_date"
                           class="form-control"
                           required>

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                    <tr>

                        <th width="10%">#</th>

                        <th width="45%">
                            Student Name
                        </th>

                        <th width="45%">
                            Attendance Status
                        </th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach($students as $key => $student)

                    <tr>

                        <td>
                            {{ $key + 1 }}
                        </td>

                        <td>
                            {{ $student->name }}
                        </td>

                        <td>

                            <select
                                name="status[{{ $student->id }}]"
                                class="form-select">

                                <option value="Present">
                                    Present
                                </option>

                                <option value="Absent">
                                    Absent
                                </option>

                            </select>

                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

         <div class="d-flex justify-content-center gap-2 mt-4">

   <a href="{{ route('attendance.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>



     <button type="submit"
                        class="btn btn-info text-white">
                      Save Attendance
                </button>

     </div>

        </form>

    </div>

</div>

@endsection