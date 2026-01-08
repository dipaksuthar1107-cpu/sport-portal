<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Request Equipment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .card{ box-shadow:0 4px 10px rgba(0,0,0,0.1); border-radius:12px; }
</style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Request-Book</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Request Form -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h4 class="mb-0">Request / Book Equipment</h4>
        </div>
        <div class="card-body">

          <form>
            <!-- Equipment Name -->
            <div class="mb-3">
              <label class="form-label">Equipment</label>
              <input type="text" class="form-control" value="Cricket Bat" readonly>
            </div>

            <!-- Quantity -->
            <div class="mb-3">
              <label class="form-label">Quantity</label>
              <input type="number" class="form-control" min="1" max="5" required>
            </div>

            <!-- Date -->
            <div class="mb-3">
              <label class="form-label">Booking Date</label>
              <input type="date" class="form-control" required>
            </div>

            <!-- Time -->
            <div class="mb-3">
              <label class="form-label">Booking Time</label>
              <input type="time" class="form-control" required>
            </div>

            <!-- Return Date -->
            <div class="mb-3">
              <label class="form-label">Expected Return Date</label>
              <input type="date" class="form-control" required>
            </div>

            <!-- Notes -->
            <div class="mb-3">
              <label class="form-label">Purpose / Notes (Optional)</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2">
              <button class="btn btn-success">Submit Request</button>
              <a href="#" class="btn btn-secondary">Cancel</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-2 mt-5">
  © 2026 Sports Equipment Rental Portal
</footer>

</body>
</html>