<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Equipment Management</title>
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
    <span class="navbar-brand">Admin – Equipment Management</span>
    <a href="dashboard.php" class="btn btn-outline-light btn-sm">Dashboard</a>
  </div>
</nav>

<div class="container mt-4">

<!-- Add Equipment -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">Add New Equipment</div>
  <div class="card-body">
    <form>
      <div class="row g-3">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Equipment Name" required>
        </div>
        <div class="col-md-3">
          <select class="form-select" required>
            <option value="">Select Category</option>
            <option>Indoor</option>
            <option>Outdoor</option>
            <option>Fitness</option>
            <option>Other</option>
          </select>
        </div>
        <div class="col-md-2">
          <input type="number" class="form-control" placeholder="Quantity" required>
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option>Excellent</option>
            <option>Good</option>
            <option>Average</option>
          </select>
        </div>
        <div class="col-md-2 d-grid">
          <button class="btn btn-success"><i class="bi bi-plus-circle"></i> Add</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Equipment Table -->
<div class="card">
  <div class="card-header bg-dark text-white">Equipment List</div>
  <div class="card-body">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-secondary">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Condition</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Cricket Bat</td>
          <td>Outdoor</td>
          <td>20</td>
          <td>Good</td>
          <td>
            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</button>
            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Football</td>
          <td>Outdoor</td>
          <td>15</td>
          <td>Excellent</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
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