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

    <h2>Teachers List</h2>

    <a href="{{ route('teachers.create') }}"
       class="btn btn-info text-white">
        Add Teacher
    </a>

</div>

<table class="table table-bordered table-hover">
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
    border:1px solid #a8c7d1;
    font-weight:600;
}

.dropdown-menu{
    min-width:150px;
}
</style>
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Salary</th>
            <th width="80">Action</th>
        </tr>
    </thead>

    <tbody>

    @forelse($teachers as $teacher)

        <tr>

            <td>{{ $teacher->id }}</td>
            <td>{{ $teacher->employee_code }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->subject }}</td>
            <td>₹ {{ number_format($teacher->salary,2) }}</td>

            <td>

                <div class="dropdown">

                    <button class="btn action-btn"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('teachers.edit',$teacher->id) }}">
                                 Edit
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('teachers.destroy',$teacher->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this teacher?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="dropdown-item text-danger">
                                     Delete
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
                No Teachers Found
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection