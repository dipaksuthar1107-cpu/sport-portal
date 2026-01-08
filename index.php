<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Equipment Rental Portal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('assets/images/sports.jpg') center/cover;
            color: white;
            padding: 100px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Sports Rental</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="student/login.php" class="nav-link">Student Login</a></li>
                <li class="nav-item"><a href="admin/login.php" class="nav-link">Admin Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Sports Equipment Rental Portal</h1>
        <p class="lead">Book sports equipment online easily and quickly</p>
        <a href="student/register.php" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Wide Range</h4>
                <p>Indoor, outdoor & fitness equipment available.</p>
            </div>
            <div class="col-md-4">
                <h4>Easy Booking</h4>
                <p>Book equipment by selecting date & time.</p>
            </div>
            <div class="col-md-4">
                <h4>Track Status</h4>
                <p>Check booking status anytime online.</p>
            </div>
        </div>
    </div>
</section>

<!-- Equipment Categories -->
<section class="bg-light py-5">
    <div class="container">
        <h3 class="text-center mb-4">Equipment Categories</h3>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card p-3">Indoor Sports</div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">Outdoor Sports</div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">Fitness</div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">Others</div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-2">
    <p class="mb-0">
        © <?php echo date("Y"); ?> Sports Equipment Rental Portal
    </p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
