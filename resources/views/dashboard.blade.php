@extends('layout')

@section('content')

<h2 class="mb-4">School Dashboard</h2>

<div class="row">

    <!-- Students -->
    <div class="col-md-3 mb-3">
        <div class="card border-primary shadow">
            <div class="card-body text-center">
                <h5>Total Students</h5>
                <h2>{{ $students }}</h2>
            </div>
        </div>
    </div>

    <!-- Teachers -->
    <div class="col-md-3 mb-3">
        <div class="card border-success shadow">
            <div class="card-body text-center">
                <h5>Total Teachers</h5>
                <h2>{{ $teachers }}</h2>
            </div>
        </div>
    </div>

    <!-- Fees -->
    <div class="col-md-3 mb-3">
        <div class="card border-warning shadow">
            <div class="card-body text-center">
                <h5>Fee Collection</h5>
                <h2>₹ {{ number_format($fees,2) }}</h2>
            </div>
        </div>
    </div>

    <!-- Exams -->
    

</div>



                



    </div>

</div>

@endsection