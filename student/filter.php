<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sports Equipment Rental</title>

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .equipment-card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
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
        <a class="navbar-brand" href="dashboard.php">Filter By Category</a>

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


<!-- Container -->
<div class="container mt-4">

    <h3 class="text-center mb-4">Available Sports Equipment</h3>

    <!-- Filter Dropdown -->
    <div class="row mb-4">
        <div class="col-md-4 mx-auto">
            <select class="form-select" id="categoryFilter" onchange="filterCategory()">
                <option value="all">All Categories</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <option value="Fitness">Fitness</option>
                <option value="Other">Other</option>
            </select>
        </div>
    </div>

    <!-- Equipment Cards -->
    <div class="row g-4" id="equipmentList">

        <div class="col-md-3 equipment-item" data-category="Indoor">
            <div class="card equipment-card">
                <div class="card-body text-center">
                    <h5>Table Tennis Bat</h5>
                    <span class="badge bg-primary">Indoor</span>
                    <br><br>
                    <button class="btn btn-success btn-sm">Request</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 equipment-item" data-category="Outdoor">
            <div class="card equipment-card">
                <div class="card-body text-center">
                    <h5>Football</h5>
                    <span class="badge bg-success">Outdoor</span>
                    <br><br>
                    <button class="btn btn-success btn-sm">Request</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 equipment-item" data-category="Fitness">
            <div class="card equipment-card">
                <div class="card-body text-center">
                    <h5>Dumbbells</h5>
                    <span class="badge bg-warning">Fitness</span>
                    <br><br>
                    <button class="btn btn-success btn-sm">Request</button>
                </div>
            </div>
        </div>

        <div class="col-md-3 equipment-item" data-category="Other">
            <div class="card equipment-card">
                <div class="card-body text-center">
                    <h5>Whistle</h5>
                    <span class="badge bg-secondary">Other</span>
                    <br><br>
                    <button class="btn btn-success btn-sm">Request</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="footer">
    © <?php echo date("Y"); ?> Sports Equipment Rental Portal
</footer>


<!-- JavaScript -->
<script>
function filterCategory() {
    let selected = document.getElementById("categoryFilter").value;
    let items = document.querySelectorAll(".equipment-item");

    items.forEach(item => {
        let category = item.getAttribute("data-category");

        if (selected === "all" || category === selected) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
</script>

</body>
</html>
