
<?php
session_start();

/* Login button click */
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    /* Dummy credentials (later DB se aayega) */
    if ($email == "student@gmail.com" && $password == "12345") {

        $_SESSION['student_login'] = true;
        $_SESSION['student_email'] = $email;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid Email or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .btn btn-danger w-100 {
        background-color: #dc3545;
        border-color: #dc3545;
    }
</style>
<body class="bg-light d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="">Sports Rental</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link active">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../student/login.php">Student Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Login Form -->
<div class="container d-flex justify-content-center align-items-center flex-grow-1">
    <div class="card shadow-sm" style="width: 400px;">
        <div class="card-body">
            <h4 class="text-center mb-3">Admin Login</h4>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Admin Email / Username</label>
                    <input type="text" class="form-control" placeholder="Enter admin email or username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-danger w-100">
                    Login
                </button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">
                    Authorized personnel only
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

