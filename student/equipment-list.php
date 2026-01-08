<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Equipment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">Student Panel</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipment-list.php">Equipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking-status.php">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Equipment Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Available Sports Equipment</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Equipment Name</th>
                <th>Category</th>
                <th>Available Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cricket Bat</td>
                <td>Cricket</td>
                <td>10</td>
                <td>
                    <button class="btn btn-success btn-sm">Request</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Football</td>
                <td>Football</td>
                <td>15</td>
                <td>
                    <button class="btn btn-success btn-sm">Request</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Badminton Racket</td>
                <td>Badminton</td>
                <td>8</td>
                <td>
                    <button class="btn btn-success btn-sm">Request</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-2 fixed-bottom">
    © 2026 Sports Equipment Rental Portal
</footer>

</body>
</html>