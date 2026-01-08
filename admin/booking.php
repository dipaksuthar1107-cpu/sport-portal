<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Booking Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<style>
body{background:#f4f6f9;}
.card{border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1);}
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
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Admin – Booking Management</span>
    <a href="dashboard.php" class="btn btn-outline-light btn-sm">Dashboard</a>
  </div>
</nav>

<div class="container mt-4">

<!-- Booking Requests -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">
    Booking Requests
  </div>
  <div class="card-body">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
        <tr>
          <th>ID</th>
          <th>Student Name</th>
          <th>Equipment</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rahul</td>
          <td>Cricket Bat</td>
          <td>Outdoor</td>
          <td>2</td>
          <td>10-Feb-2026</td>
          <td><span class="badge bg-warning">Pending</span></td>
          <td>
            <button class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Approve</button>
            <button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Reject</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Amit</td>
          <td>Football</td>
          <td>Outdoor</td>
          <td>1</td>
          <td>09-Feb-2026</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td>
            <button class="btn btn-info btn-sm"><i class="bi bi-box-arrow-in-down"></i> Collected</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Neha</td>
          <td>Badminton Racket</td>
          <td>Indoor</td>
          <td>1</td>
          <td>05-Feb-2026</td>
          <td><span class="badge bg-info">Collected</span></td>
          <td>
            <button class="btn btn-secondary btn-sm"><i class="bi bi-arrow-repeat"></i> Returned</button>
          </td>
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