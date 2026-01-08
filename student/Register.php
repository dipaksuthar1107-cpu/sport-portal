<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="">Sports Rental</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link active">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Register Form -->
<div class="container d-flex justify-content-center align-items-center flex-grow-1">
    <div class="card shadow-sm" style="width: 450px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Student Registration</h4>

            <form method="post">
                <div class="mb-2">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter full name" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Create password" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm password" required>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Register
                </button>
            </form>

            <div class="text-center mt-3">
                <small>
                    Already Registered?
                    <a href="login.php">Login Here</a>
                </small>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-2 mt-auto">
    © <?php echo date("Y"); ?> Sports Equipment Rental Portal
</footer>

</body>
</html>
