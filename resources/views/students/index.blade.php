@extends('layout')

@section('content')

<style>
.action-btn{
    width:32px;
    height:32px;
    padding:0;
    border:none;
    border-radius:3px;
    background:#17c1e8 !important;
    color:#fff !important;
    font-size:18px;
    font-weight:bold;
    display:flex;
    align-items:center;
    justify-content:center;
}

.table td,
.table th{
    vertical-align:middle;
}

.dropdown-menu{
    min-width:150px;
}
</style>

<div class="d-flex justify-content-between mb-3">

    <h2>Student List</h2>

    <a href="{{ route('students.create') }}"
       class="btn btn-info text-white">
        Add Student
    </a>

</div>

<table class="table table-bordered table-striped">
<style>
.action-btn{
    width:32px;
    height:32px;
    padding:0;
    border:none;
    border-radius:3px;
    background:#17c1e8 !important;
    color:#fff !important;
    font-size:18px;
    font-weight:bold;
    display:flex;
    align-items:center;
    justify-content:center;
}

.table td,
.table th{
    vertical-align:middle;
}

.table thead th{
    background-color:#cfe8ef !important;
    border:1px solid #a8c7d1 !important;
    font-weight:600;
}

.dropdown-menu{
    min-width:150px;
}
</style>
 <thead>
    <tr>
        <th>ID</th>
        <th>Admission No</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Total Fee</th>
        <th width="80">Action</th>
    </tr>
</thead>

    <tbody>

    @forelse($students as $student)

        <tr>

            <td>{{ $student->id }}</td>

            <td>{{ $student->admission_no }}</td>

            <td>{{ $student->name }}</td>

            <td>{{ $student->mobile }}</td>

            <td>₹ {{ number_format($student->total_fee,2) }}</td>

            <td>

                <div class="dropdown">

                    <button class="btn action-btn"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        ⋮
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('students.edit',$student->id) }}">
                                ✏️ Edit
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('students.destroy',$student->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this student?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="dropdown-item text-danger">
                                    🗑 Delete
                                </button>

                            </form>
                        </li>

                    </ul>

                </div>

            </td>

        </tr>

    @empty

        <tr>
            <td colspan="6" class="text-center">
                No Students Found
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection