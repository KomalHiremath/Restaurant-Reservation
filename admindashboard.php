<!-- admin-dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

include_once 'dbCon.php';
$con = connect();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin</h1>
    <a href="manage-bookings.php">Manage Bookings</a>
    <a href="manage-restaurants.php">Manage Restaurants</a>
    <a href="logout.php">Logout</a>
</body>
</html>
