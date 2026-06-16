@extends('layout')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-info text-white">
        <h4 class="mb-0">
            Teacher Registration
        </h4>
    </div>

    <div class="card-body">

        <form action="{{ route('teachers.store') }}"
              method="POST">

            @csrf

            <div class="row">

                <!-- Employee Code -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Employee Code
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="employee_code"
                           class="form-control"
                           placeholder="Enter Employee Code"
                           required>

                </div>

                <!-- Teacher Name -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Teacher Name
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter Teacher Name"
                           required>

                </div>

                <!-- Mobile -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Mobile Number
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="mobile"
                           class="form-control"
                           placeholder="Enter Mobile Number"
                           required>

                </div>

                <!-- Email -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter Email Address">

                </div>

                <!-- Subject -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Subject
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text"
                           name="subject"
                           class="form-control"
                           placeholder="Enter Subject Name"
                           required>

                </div>

                <!-- Salary -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Salary
                    </label>

                    <input type="number"
                           name="salary"
                           class="form-control"
                           placeholder="Enter Salary">

                </div>

                <!-- Address -->
                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Address
                    </label>

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
                    Save Teacher
                </button>

     </div>
        </form>

    </div>

</div>
<style>
.card{
    border-radius:12px;
}

.card-header{
    border-radius:12px 12px 0 0 !important;
}

.form-control,
.form-select{
    height:45px;
}

.btn{
    border-radius:8px;
}

label{
    font-weight:600;
}
</style>
@endsection