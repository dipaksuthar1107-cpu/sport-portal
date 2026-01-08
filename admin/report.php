<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Reports</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body{background:#f4f6f9;}
        .card{border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1);}
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Admin – Reports & Analytics</span>
    <a href="dashboard.php" class="btn btn-outline-light btn-sm">Dashboard</a>
  </div>
</nav>

<div class="container mt-4">

<!-- Summary Reports -->
<div class="row g-4 mb-4">
  <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <i class="bi bi-box-seam fs-1 text-primary"></i>
        <h6>Total Equipment</h6>
        <h3>150</h3>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <i class="bi bi-calendar-check fs-1 text-success"></i>
        <h6>Total Bookings</h6>
        <h3>320</h3>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <i class="bi bi-arrow-repeat fs-1 text-info"></i>
        <h6>Returned Items</h6>
        <h3>280</h3>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center">
      <div class="card-body">
        <i class="bi bi-cash-coin fs-1 text-danger"></i>
        <h6>Total Penalty (₹)</h6>
        <h3>4,500</h3>
      </div>
    </div>
  </div>
</div>

<!-- Most Used Equipment -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">
    Most Used Equipment
  </div>
  <div class="card-body">
    <table class="table table-bordered text-center">
      <thead class="table-secondary">
        <tr>
          <th>Equipment</th>
          <th>Category</th>
          <th>Times Rented</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cricket Bat</td>
          <td>Outdoor</td>
          <td>120</td>
        </tr>
        <tr>
          <td>Football</td>
          <td>Outdoor</td>
          <td>95</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Top Borrowers -->
<div class="card mb-4">
  <div class="card-header bg-success text-white">
    Top Borrowers
  </div>
  <div class="card-body">
    <table class="table table-bordered text-center">
      <thead class="table-secondary">
        <tr>
          <th>Student Name</th>
          <th>Total Rentals</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Rahul</td>
          <td>18</td>
        </tr>
        <tr>
          <td>Amit</td>
          <td>15</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Export Reports -->
<div class="card">
  <div class="card-header bg-dark text-white">Download Reports</div>
  <div class="card-body text-center">
    <button class="btn btn-success me-3">
      <i class="bi bi-file-earmark-excel"></i> Export Excel
    </button>
    <button class="btn btn-danger">
      <i class="bi bi-file-earmark-pdf"></i> Export PDF
    </button>
  </div>
</div>

</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-2 mt-5">
© 2026 Sports Equipment Rental Portal
</footer>

</body>
</html>