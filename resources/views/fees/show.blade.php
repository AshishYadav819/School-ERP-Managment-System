@extends('layout')

@section('content')

<div class="card shadow">

    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Fee Details</h4>
    </div>

    <div class="card-body">

        @php
            $totalFee = $fee->student->total_fee ?? 0;

            $paidFee = \App\Models\Fee::where(
                'student_id',
                $fee->student_id
            )->sum('amount');

            $pendingFee = $totalFee - $paidFee;
        @endphp

        <div class="row">

            <div class="col-md-6 mb-3">
                <strong>Student Name :</strong>
                {{ $fee->student->name }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Class :</strong>
                {{ $fee->student->class }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Total Fee :</strong>
                ₹ {{ number_format($totalFee,2) }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Paid Fee :</strong>
                <span class="text-success">
                    ₹ {{ number_format($paidFee,2) }}
                </span>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Pending Fee :</strong>
                <span class="text-danger">
                    ₹ {{ number_format($pendingFee,2) }}
                </span>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Collected Amount :</strong>
                ₹ {{ number_format($fee->amount,2) }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Payment Date :</strong>
                {{ date('d-m-Y', strtotime($fee->payment_date)) }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Payment Mode :</strong>
                {{ $fee->payment_mode }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Receipt No :</strong>
                {{ $fee->receipt_no ?? '-' }}
            </div>

            <div class="col-md-6 mb-3">
                <strong>Fee Type :</strong>
                {{ $fee->fee_type ?? '-' }}
            </div>

            <div class="col-md-12 mb-3">
                <strong>Remarks :</strong>
                <br>
                {{ $fee->remarks ?? '-' }}
            </div>

        </div>

        <div class="text-center mt-3">

            <a href="{{ route('fees.index') }}"
               class="btn btn-secondary">
                Back
            </a>

            <a href="{{ route('fees.edit',$fee->id) }}"
               class="btn btn-info text-white">
                Edit
            </a>

        </div>

    </div>

</div>

@endsection