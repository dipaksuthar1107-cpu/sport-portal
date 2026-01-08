<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Equipment Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .detail-card{ box-shadow:0 4px 10px rgba(0,0,0,0.1); border-radius:12px; }
    .label{ font-weight:600; color:#555; }

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
        <a class="navbar-brand" href="dashboard.php">Equipment Details</a>

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

<!-- Equipment Details -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card detail-card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Equipment Details</h4>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-4 label">Equipment Name</div>
            <div class="col-md-8">Cricket Bat</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 label">Category</div>
            <div class="col-md-8">Outdoor</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 label">Condition</div>
            <div class="col-md-8"><span class="badge bg-success">Good</span></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 label">Available Quantity</div>
            <div class="col-md-8">10</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 label">Security Deposit</div>
            <div class="col-md-8">₹200</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 label">Usage Rules</div>
            <div class="col-md-8">
              <ul class="mb-0">
                <li>Return within 24 hours</li>
                <li>No physical damage</li>
                <li>Late return fine ₹100/day</li>
              </ul>
            </div>
          </div>
          <div class="text-center mt-4">
            <button class="btn btn-success">Request Equipment</button>
            <a href="#" class="btn btn-secondary ms-2">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
    © <?php echo date("Y"); ?> Sports Equipment Rental Portal
</footer>

</body>
</html>
