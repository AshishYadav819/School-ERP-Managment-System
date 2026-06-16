@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Fee Collection</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('fees.store') }}" method="POST">
            @csrf

            <div class="row">

                <!-- Student -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Student <span class="text-danger">*</span>
                    </label>

                    <select name="student_id" class="form-select" required>

                        <option value="">
                            Select Student
                        </option>

                        @foreach($students as $student)

                            <option value="{{ $student->id }}">
                                {{ $student->name }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <!-- Amount -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Amount <span class="text-danger">*</span>
                    </label>

                    <input type="number"
                           name="amount"
                           class="form-control"
                           placeholder="Enter Amount"
                           required>
                </div>

                <!-- Payment Date -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Payment Date <span class="text-danger">*</span>
                    </label>

                    <input type="date"
                           name="payment_date"
                           class="form-control"
                           required>
                </div>

                <!-- Payment Mode -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Payment Mode <span class="text-danger">*</span>
                    </label>

                    <select name="payment_mode"
                            class="form-select"
                            required>

                        <option value="">
                            Select Mode
                        </option>

                        <option value="Cash">
                            Cash
                        </option>

                        <option value="UPI">
                            UPI
                        </option>

                        <option value="Cheque">
                            Cheque
                        </option>

                        <option value="Bank Transfer">
                            Bank Transfer
                        </option>

                    </select>
                </div>

                <!-- Receipt No -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Receipt No
                    </label>

                    <input type="text"
                           name="receipt_no"
                           class="form-control"
                           placeholder="Receipt Number">
                </div>

                <!-- Fee Type -->
                <div class="col-md-4 mb-3">
                    <label class="form-label">
                        Fee Type
                    </label>

                    <select name="fee_type"
                            class="form-select">

                        <option>Tuition Fee</option>
                        <option>Admission Fee</option>
                        <option>Exam Fee</option>
                        <option>Transport Fee</option>
                    </select>
                </div>

                <!-- Remarks -->
                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Remarks
                    </label>

                    <textarea name="remarks"
                              rows="3"
                              class="form-control"
                              placeholder="Enter Remarks"></textarea>

                </div>

            </div>

           <div class="d-flex justify-content-center gap-2 mt-4">

    <button type="reset"
                        class="btn btn-secondary">
                    Reset
                </button>


     <button type="submit"
                        class="btn btn-info text-white">
                   Collect Fee
                </button>

     </div>

        </form>

    </div>
</div>

@endsection