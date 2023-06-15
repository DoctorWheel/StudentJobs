<?php

session_start();

$servername = "localhost:3307";
$username = "root";
$password = "uu2023";
$dbname = "studentjobs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userType = $_POST["userType"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Add user
    if ($userType == "employer") {
        $function = $_POST["function"];

        $sql = "INSERT INTO employers (first_name, function, email, password)
                VALUES ('$firstName', '$function', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["user_type"] = "employer";
            $_SESSION["user_id"] = $conn->insert_id;
            $_SESSION["user_first_name"] = $firstName;
            $_SESSION["user_email"] = $email;
            header("Location: employer.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($userType == "student") {
        $sql = "INSERT INTO students (first_name, last_name, email, password)
                VALUES ('$firstName', '$lastName', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["user_type"] = "student";
            $_SESSION["user_id"] = $conn->insert_id;
            $_SESSION["user_first_name"] = $firstName;
            $_SESSION["user_email"] = $email;
            header("Location: student.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
