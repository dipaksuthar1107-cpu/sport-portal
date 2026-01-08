<?php
// admin_login.php
session_start();

// Demo admin credentials (use database in real project)
$admin_username = "admin@gmail.com";
$admin_password = "12345";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .login-card{ box-shadow:0 6px 15px rgba(0,0,0,0.3); border-radius:12px; }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Sports Rental</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link active">Home</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-4">
      <div class="card login-card">
        <div class="card-header bg-dark text-white text-center">
          <h4 class="mb-0">Admin Login</h4>
          <small>Sports Department Staff</small>
        </div>
        <div class="card-body">

          <?php if($error): ?>
            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
          <?php endif; ?>

          <form method="post">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control"  placeholder="Enter username" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control"  placeholder="Enter password" required>
            </div>

            <div class="d-grid">
              <button class="btn btn-primary">Login</button>
            </div>
          </form>

        </div>
        <div class="card-footer text-center">
          <small class="text-muted">Authorized Access Only</small>
        </div>
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