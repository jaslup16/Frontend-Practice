<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Notifications</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e31b23;">
    <a class="navbar-brand text-white" href="#">INTELLIDOC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="adminDash.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="Calendar.php">Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="users.html">User Management</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.html">Logout</a>
            </li>
        </ul>
    </div>
</nav>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
