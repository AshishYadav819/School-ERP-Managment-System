@extends('layout')

@section('content')

<style>
    .sky-blue-header{
        background-color: #87CEEB; /* Sky Blue */
        color: #fff;
    }

    .card{
        border-radius: 10px;
        overflow: hidden;
    }

    .btn-success,
    .btn-secondary{
        min-width: 120px;
    }

    label{
        font-weight: 600;
    }
</style>

<div class="card shadow">

    <div class="card-header sky-blue-header">
        <h4 class="mb-0">Student Registration</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('students.store') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label>Admission No <span class="text-danger">*</span></label>

                    <input type="text"
                           name="admission_no"
                           class="form-control"
                           placeholder="Enter Admission No"
                           required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Student Name <span class="text-danger">*</span></label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter Student Name"
                           required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Date Of Birth <span class="text-danger">*</span></label>

                    <input type="date"
                           name="dob"
                           class="form-control"
                           required>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Gender <span class="text-danger">*</span></label>

                    <select name="gender"
                            class="form-select"
                            required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Mobile Number <span class="text-danger">*</span></label>

                    <input type="text"
                           name="mobile"
                           class="form-control"
                           placeholder="Enter Mobile Number"
                           required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Class <span class="text-danger">*</span></label>

                    <input type="text"
                        name="class"
                        class="form-control"
                        placeholder="Enter Class"
                        required>
                </div>

                <!-- Total Fee -->
                <div class="col-md-4 mb-3">
                    <label>Total Fee <span class="text-danger">*</span></label>

                    <input type="number"
                        name="total_fee"
                        class="form-control"
                        placeholder="Enter Total Fee"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Email Address</label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter Email">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Address</label>

                    <textarea name="address"
                              rows="3"
                              class="form-control"
                              placeholder="Enter Address"></textarea>
                </div>

            </div>

        
 <div class="d-flex justify-content-center gap-2 mt-4">

    <button type="reset"
                        class="btn btn-secondary">
                    Reset
                </button>


     <button type="submit"
                        class="btn btn-info text-white">
                    Save Student
                </button>

     </div>
        </form>

    </div>

</div>

@endsection