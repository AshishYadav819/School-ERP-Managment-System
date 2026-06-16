@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Student</h4>
    </div>

    <div class="card-body">

        <form method="POST"
              action="{{ route('students.update',$student->id) }}">

            @csrf
            @method('PUT')

            <div class="row">

                <!-- Admission No -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Admission No
                    </label>

                    <input type="text"
                           name="admission_no"
                           value="{{ $student->admission_no }}"
                           class="form-control"
                           readonly>

                </div>

                <!-- Student Name -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Student Name <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $student->name }}"
                           class="form-control"
                           required>

                </div>
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Class
                    </label>

                    <input type="text"
                        name="class"
                        value="{{ $student->class }}"
                        class="form-control">

                </div>

                <!-- Total Fee -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Total Fee
                    </label>

                    <input type="number"
                        name="total_fee"
                        value="{{ $student->total_fee }}"
                        class="form-control">

                </div>
                <!-- DOB -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Date Of Birth
                    </label>

                    <input type="date"
                           name="dob"
                           value="{{ $student->dob }}"
                           class="form-control">

                </div>

                <!-- Gender -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Gender
                    </label>

                    <select name="gender"
                            class="form-select">

                        <option value="Male"
                            {{ $student->gender=='Male' ? 'selected' : '' }}>
                            Male
                        </option>

                        <option value="Female"
                            {{ $student->gender=='Female' ? 'selected' : '' }}>
                            Female
                        </option>

                    </select>

                </div>

                <!-- Mobile -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Mobile Number <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="mobile"
                           value="{{ $student->mobile }}"
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
                           value="{{ $student->email }}"
                           class="form-control">

                </div>

                <!-- Address -->
                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Address
                    </label>

                    <textarea name="address"
                              rows="3"
                              class="form-control">{{ $student->address }}</textarea>

                </div>

            </div>

           
 <div class="d-flex justify-content-center gap-2 mt-4">

    <button type="submit"
            class="btn btn-info text-white">
        Update
    </button>

    <a href="{{ route('students.index') }}"
       class="btn btn-outline-info">
        CANCEL
    </a>

</div>
        </form>

    </div>

</div>

@endsection