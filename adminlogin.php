<!-- admin-login.php -->
<?php
session_start();
include_once 'dbCon.php';
$con = connect();

if (isset($_POST['adminLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = $con->query($query);
    
    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $email;
        header("Location: admin-dashboard.php");
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <form method="post" action="">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit" name="adminLogin">Login</button>
    </form>
</body>
</html>
