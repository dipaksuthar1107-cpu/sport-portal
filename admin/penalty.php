<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Penalty Management</title>
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
    <span class="navbar-brand">Admin-Penalty Management</span>
    <a href="dashboard.php" class="btn btn-outline-light btn-sm">Dashboard</a>
  </div>
</nav>

<div class="container mt-4">

<!-- Add Penalty -->
<div class="card mb-4">
  <div class="card-header bg-danger text-white">
    <i class="bi bi-exclamation-triangle"></i> Add Penalty
  </div>
  <div class="card-body">
    <form>
      <div class="row g-3">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Student Name" required>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Equipment Name" required>
        </div>
        <div class="col-md-2">
          <select class="form-select" required>
            <option value="">Reason</option>
            <option>Late Return</option>
            <option>Damage</option>
            <option>Lost</option>
          </select>
        </div>
        <div class="col-md-2">
          <input type="number" class="form-control" placeholder="Penalty Amount" required>
        </div>
        <div class="col-md-2 d-grid">
          <button class="btn btn-danger">
            <i class="bi bi-plus-circle"></i> Add
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Penalty List -->
<div class="card">
  <div class="card-header bg-dark text-white">Penalty Records</div>
  <div class="card-body">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
        <tr>
          <th>ID</th>
          <th>Student</th>
          <th>Equipment</th>
          <th>Reason</th>
          <th>Amount (₹)</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rahul</td>
          <td>Cricket Bat</td>
          <td>Late Return</td>
          <td>100</td>
          <td><span class="badge bg-warning">Unpaid</span></td>
          <td>
            <button class="btn btn-success btn-sm"><i class="bi bi-check"></i> Paid</button>
            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Amit</td>
          <td>Football</td>
          <td>Damage</td>
          <td>300</td>
          <td><span class="badge bg-success">Paid</span></td>
          <td>
            <button class="btn btn-secondary btn-sm" disabled>Paid</button>
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
