<?php
session_start();

/* Dummy student name (replace with session later) */
$student_name = "Login Successful";
?>
>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Sports Dept. Admin Dashboard</span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<!-- Dashboard Cards -->
<div class="container mt-4">
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Manage Equipment</h5>
                    <p class="card-text">Add / Edit / Delete items</p>
                    <a href="equipment.php" class="btn btn-primary w-100">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Booking Requests</h5>
                    <p class="card-text">Approve / Reject</p>
                    <a href="admin_requests.php" class="btn btn-success w-100">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Collected / Returned</h5>
                    <p class="card-text">Track issue & return</p>
                    <a href="returns.php" class="btn btn-warning w-100">Manage</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Penalties</h5>
                    <p class="card-text">Late / Damage fines</p>
                    <a href="penalties.php" class="btn btn-danger w-100">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Reports</h5>
                    <p class="card-text">Usage & analytics</p>
                    <a href="admin_reports.php" class="btn btn-dark w-100">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Export History</h5>
                    <p class="card-text">Excel / PDF</p>
                    <a href="export_report.php" class="btn btn-secondary w-100">Download</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-2 fixed-bottom">
    © 2026 Sports Equipment Rental Portal - Admin
</footer>

</body>
</html>