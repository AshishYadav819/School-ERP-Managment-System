@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Edit Fee Collection</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('fees.update',$fee->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <!-- Student -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Student
                    </label>

                    <select name="student_id"
                            class="form-select"
                            required>

                        @foreach($students as $student)

                            <option value="{{ $student->id }}"
                                {{ $fee->student_id == $student->id ? 'selected' : '' }}>

                                {{ $student->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- Amount -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Amount
                    </label>

                    <input type="number"
                           name="amount"
                           value="{{ $fee->amount }}"
                           class="form-control"
                           required>

                </div>

                <!-- Payment Date -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Payment Date
                    </label>

                    <input type="date"
                           name="payment_date"
                           value="{{ $fee->payment_date }}"
                           class="form-control"
                           required>

                </div>

                <!-- Payment Mode -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Payment Mode
                    </label>

                    <select name="payment_mode"
                            class="form-select"
                            required>

                        <option value="Cash"
                            {{ $fee->payment_mode=='Cash' ? 'selected' : '' }}>
                            Cash
                        </option>

                        <option value="UPI"
                            {{ $fee->payment_mode=='UPI' ? 'selected' : '' }}>
                            UPI
                        </option>

                        <option value="Cheque"
                            {{ $fee->payment_mode=='Cheque' ? 'selected' : '' }}>
                            Cheque
                        </option>

                        <option value="Bank Transfer"
                            {{ $fee->payment_mode=='Bank Transfer' ? 'selected' : '' }}>
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
                           value="{{ $fee->receipt_no }}"
                           class="form-control">

                </div>

                <!-- Fee Type -->
                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Fee Type
                    </label>

                    <select name="fee_type"
                            class="form-select">

                        <option value="Tuition Fee"
                            {{ $fee->fee_type=='Tuition Fee' ? 'selected' : '' }}>
                            Tuition Fee
                        </option>

                        <option value="Admission Fee"
                            {{ $fee->fee_type=='Admission Fee' ? 'selected' : '' }}>
                            Admission Fee
                        </option>

                        <option value="Exam Fee"
                            {{ $fee->fee_type=='Exam Fee' ? 'selected' : '' }}>
                            Exam Fee
                        </option>

                        <option value="Transport Fee"
                            {{ $fee->fee_type=='Transport Fee' ? 'selected' : '' }}>
                            Transport Fee
                        </option>

                    </select>

                </div>

                <!-- Remarks -->
                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Remarks
                    </label>

                    <textarea name="remarks"
                              rows="3"
                              class="form-control">{{ $fee->remarks }}</textarea>

                </div>

            </div>

            <div class="d-flex justify-content-center gap-2 mt-4">

                <button type="submit"
                        class="btn btn-info text-white">
                    Update Fee
                </button>

                <a href="{{ route('fees.index') }}"
                   class="btn btn-outline-info">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection