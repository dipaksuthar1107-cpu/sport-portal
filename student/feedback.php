<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Submit Feedback</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .feedback-card{ box-shadow:0 4px 10px rgba(0,0,0,0.1); border-radius:12px; }
  .star-rating input{ display:none; }
  .star-rating label{ font-size:25px; color:#ccc; cursor:pointer; }
  .star-rating input:checked ~ label{ color:#ffc107; }
  .star-rating label:hover,
  .star-rating label:hover ~ label{ color:#ffc107; }
</style>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Feedback</a>

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

<!-- Feedback Form -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card feedback-card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Submit Feedback After Return</h4>
        </div>
        <div class="card-body">

          <form>
            <!-- Equipment -->
            <div class="mb-3">
              <label class="form-label">Equipment</label>
              <input type="text" class="form-control" value="Cricket Bat" readonly>
            </div>

            <!-- Condition -->
            <div class="mb-3">
              <label class="form-label">Equipment Condition</label>
              <select class="form-select" required>
                <option value="">Select</option>
                <option>Excellent</option>
                <option>Good</option>
                <option>Average</option>
                <option>Damaged</option>
              </select>
            </div>

            <!-- Rating -->
            <div class="mb-3">
              <label class="form-label">Overall Rating</label><br>
              <div class="star-rating d-flex flex-row-reverse justify-content-end">
                <input type="radio" id="star5" name="rating"><label for="star5">★</label>
                <input type="radio" id="star4" name="rating"><label for="star4">★</label>
                <input type="radio" id="star3" name="rating"><label for="star3">★</label>
                <input type="radio" id="star2" name="rating"><label for="star2">★</label>
                <input type="radio" id="star1" name="rating"><label for="star1">★</label>
              </div>
            </div>

            <!-- Comments -->
            <div class="mb-3">
              <label class="form-label">Comments</label>
              <textarea class="form-control" rows="4" placeholder="Write your feedback..."></textarea>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2">
              <button class="btn btn-success">Submit Feedback</button>
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
