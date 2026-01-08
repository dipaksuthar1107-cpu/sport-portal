<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking History</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .history-card{ box-shadow:0 4px 10px rgba(0,0,0,0.1); border-radius:12px; }

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
        <a class="navbar-brand" href="dashboard.php">Booking History</a>

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

<!-- Booking History -->
<div class="container mt-5">
  <div class="card history-card">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">My Booking History (Past Rentals)</h4>
    </div>
    <div class="card-body">

      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Equipment</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Booked Date</th>
            <th>Returned Date</th>
            <th>Status</th>
            <th>Feedback</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Cricket Bat</td>
            <td>Outdoor</td>
            <td>2</td>
            <td>05-Jan-2026</td>
            <td>06-Jan-2026</td>
            <td><span class="badge bg-secondary">Returned</span></td>
            <td><span class="badge bg-success">Submitted</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Football</td>
            <td>Outdoor</td>
            <td>1</td>
            <td>20-Dec-2025</td>
            <td>21-Dec-2025</td>
            <td><span class="badge bg-secondary">Returned</span></td>
            <td><a href="feedback.php" class="btn btn-sm btn-warning">Give Feedback</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dumbbells</td>
            <td>Fitness</td>
            <td>1</td>
            <td>10-Dec-2025</td>
            <td>10-Dec-2025</td>
            <td><span class="badge bg-secondary">Returned</span></td>
            <td><span class="badge bg-success">Submitted</span></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
    © <?php echo date("Y"); ?> Sports Equipment Rental Portal
</footer>

</body>
</html>
