<?php
session_start();

if (isset($_SESSION["user_type"])) {
    $userType = $_SESSION["user_type"];
    // Set variable
    echo "<script>var userType = '$userType';</script>";
} else {
    echo "<script>var userType = undefined;</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentJobs | JOBS</title>
    <script src="templates.js"></script>
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div class="page">
        <header-template></header-template>
        Jobs
        <footer-template></footer-template>
    </div>

    <account-overlays-template></account-overlays-template>

</body>
</html>