<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Admin Dashboard | Sports Equipment Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body{background:#eef2f7; font-family:Segoe UI, sans-serif;}
    .sidebar{height:100vh; background:#0f172a; color:#fff;}
    .sidebar a{color:#cbd5e1; text-decoration:none; display:block; padding:12px 20px;}
    .sidebar a:hover{background:#1e293b; color:#fff;}
    .topbar{background:#fff; box-shadow:0 2px 6px rgba(0,0,0,.1);} 
    .card-box{border-radius:16px; box-shadow:0 6px 15px rgba(0,0,0,.08);} 
  </style>
</head>
<body>
<div class="container-fluid">
<div class="row">

<!-- Sidebar -->
<div class="col-md-2 sidebar p-0">
  <h5 class="text-center py-3 border-bottom">Admin Panel</h5>
  <a href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
  <a href="#"><i class="bi bi-box-seam me-2"></i>Equipment</a>
  <a href="#"><i class="bi bi-calendar-check me-2"></i>Bookings</a>
  <a href="#"><i class="bi bi-graph-up me-2"></i>Reports</a>
  <a href="#"><i class="bi bi-cash-coin me-2"></i>Penalty</a>
  <a href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
</div>

<!-- Main Content -->
<div class="col-md-10 p-0">

<!-- Topbar -->
<div class="topbar p-3 d-flex justify-content-between align-items-center">
  <h5 class="mb-0">Sports Equipment Rental Dashboard</h5>
  <span class="badge bg-primary">Admin</span>
</div>

<div class="container mt-4">

<!-- Stats Cards -->
<div class="row g-4">
  <div class="col-md-3">
    <div class="card card-box text-center">
      <div class="card-body">
        <i class="bi bi-box fs-1 text-primary"></i>
        <h6>Total Equipment</h6>
        <h3>150</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-box text-center">
      <div class="card-body">
        <i class="bi bi-hourglass-split fs-1 text-warning"></i>
        <h6>Pending</h6>
        <h3>12</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-box text-center">
      <div class="card-body">
        <i class="bi bi-check-circle fs-1 text-success"></i>
        <h6>Approved</h6>
        <h3>62</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-box text-center">
      <div class="card-body">
        <i class="bi bi-arrow-repeat fs-1 text-info"></i>
        <h6>Returned</h6>
        <h3>80</h3>
      </div>
    </div>
  </div>
</div>

<!-- Table -->
<div class="card card-box mt-5">
  <div class="card-header bg-dark text-white">Recent Booking Requests</div>
  <div class="card-body">
    <table class="table table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th>Student</th>
          <th>Equipment</th>
          <th>Qty</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Amit</td>
          <td>Football</td>
          <td>1</td>
          <td><span class="badge bg-warning">Pending</span></td>
          <td>
            <button class="btn btn-success btn-sm">Approve</button>
            <button class="btn btn-danger btn-sm">Reject</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>
