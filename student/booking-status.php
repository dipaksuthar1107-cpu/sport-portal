<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>My Booking Status</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .status-badge {
      font-size: 14px;
      padding: 6px 10px;
    }

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
      <a class="navbar-brand" href="dashboard.php">Booking Status</a>

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

  <!-- Booking Status Table -->
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">My Booking Status</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Equipment</th>
              <th>Quantity</th>
              <th>Booking Date</th>
              <th>Return Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Cricket Bat</td>
              <td>2</td>
              <td>10-Feb-2026</td>
              <td>11-Feb-2026</td>
              <td><span class="badge bg-warning status-badge">Pending</span></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Football</td>
              <td>1</td>
              <td>05-Feb-2026</td>
              <td>06-Feb-2026</td>
              <td><span class="badge bg-success status-badge">Approved</span></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Dumbbells</td>
              <td>1</td>
              <td>01-Feb-2026</td>
              <td>02-Feb-2026</td>
              <td><span class="badge bg-info status-badge">Collected</span></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Badminton Racket</td>
              <td>2</td>
              <td>28-Jan-2026</td>
              <td>29-Jan-2026</td>
              <td><span class="badge bg-secondary status-badge">Returned</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    ©
    <?php echo date("Y"); ?> Sports Equipment Rental Portal
  </footer>


</body>

</html>