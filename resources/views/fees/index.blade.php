@extends('layout')

@section('content')

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
.action-btn{
    width:36px;
    height:36px;
    padding:0;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:4px;
}

.table td,
.table th{
    vertical-align:middle;
}
</style>

<div class="d-flex justify-content-between mb-3">

    <h2>Fee Report</h2>

    <a href="{{ route('fees.create') }}"
       class="btn btn-info text-white">
        Collect Fee
    </a>

</div>

<table class="table table-bordered table-striped">
<style>
.action-btn{
    width:36px;
    height:36px;
    padding:0;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:4px;
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
</style>
    <thead>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Class</th>
        <th>Total Fee</th>
        <th>Paid Fee</th>
        <th>Pending Fee</th>
        <th>Payment Date</th>
        <th>Mode</th>
        <th width="80">Action</th>
    </tr>
</thead>

    <tbody>

    @forelse($fees as $fee)

        @php
            $totalFee = $fee->student->total_fee ?? 0;

            $paidFee = \App\Models\Fee::where(
                'student_id',
                $fee->student_id
            )->sum('amount');

            $pendingFee = $totalFee - $paidFee;
        @endphp

        <tr>

            <td>{{ $fee->id }}</td>

            <td>{{ $fee->student->name }}</td>

            <td>{{ $fee->student->class }}</td>

            <td>₹ {{ number_format($totalFee,2) }}</td>

            <td class="text-success fw-bold">
                ₹ {{ number_format($paidFee,2) }}
            </td>

            <td class="text-danger fw-bold">
                ₹ {{ number_format($pendingFee,2) }}
            </td>

            <td>{{ date('d-m-Y', strtotime($fee->payment_date)) }}</td>

            <td>{{ $fee->payment_mode }}</td>

            <td>

                <div class="dropdown">

                    <button class="btn btn-info text-white btn-sm action-btn"
                            type="button"
                            data-bs-toggle="dropdown">

                        <i class="fa-solid fa-ellipsis-vertical"></i>

                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                           <a class="dropdown-item"
                        href="{{ route('fees.show',$fee->id) }}">
                            <i class="fa fa-eye me-2"></i> View
                        </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="#">
                                <i class="fa fa-print me-2"></i>
                                Print Receipt
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <form action="#"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="dropdown-item text-danger">
                                    <i class="fa fa-trash me-2"></i>
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
            <td colspan="9" class="text-center">
                No Fee Records Found
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection