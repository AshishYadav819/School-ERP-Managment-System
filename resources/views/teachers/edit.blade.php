@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Teacher</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('teachers.update',$teacher->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <!-- Employee Code -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Employee Code
                    </label>

                    <input type="text"
                           name="employee_code"
                           value="{{ $teacher->employee_code }}"
                           class="form-control"
                           readonly>

                </div>

                <!-- Teacher Name -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Teacher Name <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $teacher->name }}"
                           class="form-control"
                           required>

                </div>

                <!-- Mobile -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Mobile Number <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="mobile"
                           value="{{ $teacher->mobile }}"
                           class="form-control"
                           required>

                </div>

                <!-- Email -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           value="{{ $teacher->email }}"
                           class="form-control">

                </div>

                <!-- Subject -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Subject <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="subject"
                           value="{{ $teacher->subject }}"
                           class="form-control"
                           required>

                </div>

                <!-- Salary -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Salary
                    </label>

                    <input type="number"
                           name="salary"
                           value="{{ $teacher->salary }}"
                           class="form-control">

                </div>

                <!-- Address -->
                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Address
                    </label>

                    <textarea name="address"
                              rows="3"
                              class="form-control">{{ $teacher->address }}</textarea>

                </div>

            </div>

          <div class="d-flex justify-content-center gap-2 mt-4">

    <button type="submit"
            class="btn btn-info text-white">
        Update
    </button>

    <a href="{{ route('teachers.index') }}"
       class="btn btn-outline-info">
        CANCEL
    </a>

</div>

        </form>

    </div>

</div>

@endsection