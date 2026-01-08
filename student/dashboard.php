<?php
session_start();

/* Dummy student name (replace with session later) */
$student_name = "Login Successful";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            background-color: #0b0a0ae6;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Student Panel</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipment-list.php">Equipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking-status.php">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Dashboard Content -->
<div class="container mt-4">

    <!-- Welcome -->
    <div class="mb-4">
        <h4>Welcome, <?php echo $student_name; ?></h4>
        <p class="text-muted">Manage your sports equipment bookings</p>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4">

        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Available Equipment</h5>
                    <p class="card-text">View all equipment</p>
                    <a href="equipment-list.php" class="btn btn-primary btn-sm">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">My Bookings</h5>
                    <p class="card-text">Current bookings</p>
                    <a href="booking-status.php" class="btn btn-success btn-sm">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Booking History</h5>
                    <p class="card-text">Past rentals</p>
                    <a href="booking-history.php" class="btn btn-warning btn-sm">View</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feedback</h5>
                    <p class="card-text">Submit feedback</p>
                    <a href="feedback.php" class="btn btn-info btn-sm">Give</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="footer">
    © <?php echo date("Y"); ?> Sports Equipment Rental Portal
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
