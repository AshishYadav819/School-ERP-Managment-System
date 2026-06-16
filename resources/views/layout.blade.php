<!DOCTYPE html>

<html>
<head>
    <title>School Management System</title>

<!DOCTYPE html>

<html>
<head>
    <title>School Management System</title>

<!DOCTYPE html>

<html>
<head>
    <title>School Management System</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        margin: 0;
        background: #f4f6f9;
        font-family: Arial, sans-serif;
    }

    .wrapper {
        display: flex;
        min-height: 100vh;
    }

    /* Sidebar */

    .sidebar {
        width: 250px;
        background: #001f33;
        color: #fff;
        min-height: 100vh;
    }

    .sidebar-logo {
        padding: 20px;
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        border-bottom: 1px solid rgba(255,255,255,.15);
    }

    .sidebar ul {
        list-style: none;
        margin: 0;
        padding: 10px 0;
    }

    .sidebar ul li {
        margin: 0;
    }

    .sidebar ul li a {
        display: block;
        padding: 14px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        margin: 4px 8px;
        transition: .2s;
    }

    /* Hover Effect */

    .sidebar ul li a:hover {
        background: rgba(135, 206, 235, .25);
        color: #fff;
    }

    /* Active Menu */

    .sidebar ul li a.active {
        background: #87CEEB;
        color: #fff;
        font-weight: 600;
    }

    /* Main Area */

    .main-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* Topbar */

    .topbar {
        background: #001f33;
        color: #fff;
        padding: 15px 25px;
        border-bottom: 1px solid rgba(255,255,255,.10);
        box-shadow: 0 2px 8px rgba(0,0,0,.08);
    }

    .topbar h5 {
        margin: 0;
        font-weight: 600;
        color: #fff;
    }

    /* Content */

    .content {
        padding: 25px;
        flex: 1;
    }

    /* Footer */

    .footer {
        background: #001f33;
        color: #fff;
        text-align: center;
        padding: 12px;
        font-size: 13px;
        border-top: 1px solid rgba(255,255,255,.10);
    }

    /* Cards */

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,.10);
    }

    .card-header {
        background: #87CEEB !important;
        color: #fff !important;
        font-size: 20px;
        font-weight: 600;
    }

    /* Forms */

    label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-control,
    .form-select {
        height: 45px;
    }

    textarea.form-control {
        height: auto;
    }

    /* Tables */

    .table {
        background: #fff;
    }

    .table thead {
        background: #001f33;
        color: #fff;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    /* SweetAlert */

    .swal2-success-ring {
        border-color: #198754 !important;
    }

    .swal2-success-line-tip,
    .swal2-success-line-long {
        background-color: #198754 !important;
    }
</style>

</head>

<body>

<div class="wrapper">

<!-- Sidebar -->

<div class="sidebar">

    <div class="sidebar-logo">
        School ERP
    </div>

    <ul>

        <li>
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('students.index') }}"
               class="{{ request()->routeIs('students.*') ? 'active' : '' }}">
                Students
            </a>
        </li>

        <li>
            <a href="{{ route('teachers.index') }}"
               class="{{ request()->routeIs('teachers.*') ? 'active' : '' }}">
                Teachers
            </a>
        </li>

        <li>
            <a href="{{ route('attendance.index') }}"
               class="{{ request()->routeIs('attendance.*') ? 'active' : '' }}">
                Attendance
            </a>
        </li>

        <li>
            <a href="{{ route('fees.index') }}"
               class="{{ request()->routeIs('fees.*') ? 'active' : '' }}">
                Fees
            </a>
        </li>

    </ul>

</div>

<!-- Main Content -->

<div class="main-content">

    <!-- Topbar -->

    <div class="topbar">
        <h5>School Management System</h5>
    </div>

    <!-- Page Content -->

    <div class="content">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

    </div>

    <!-- Footer -->

    <div class="footer">
        Copyright © School ERP {{ date('Y') }}
    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>
Swal.fire({
    icon: 'success',
    title: '',
    html: '<h2 style="font-size:32px;font-weight:600;">{{ session('success') }}</h2>',
    showConfirmButton: false,
    timer: 2000,
    width: '650px'
});
</script>

@endif

</body>
</html>

</body>
</html>
