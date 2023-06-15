<?php
session_start();
if (!isset($_SESSION["user_type"]) || $_SESSION["user_type"] !== "employer") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employer Account</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["user_first_name"]; ?>!</h1>
    <p>Email: <?php echo $_SESSION["user_email"]; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
