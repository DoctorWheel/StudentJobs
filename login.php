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
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Employer
    $sql = "SELECT * FROM employers WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["user_type"] = "employer";
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_first_name"] = $row["first_name"];
        $_SESSION["user_email"] = $row["email"];
        header("Location: employer.php");
        exit();
    }

    // Student
    $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["user_type"] = "student";
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_first_name"] = $row["first_name"];
        $_SESSION["user_email"] = $row["email"];
        header("Location: student.php");
        exit();
    }

    $message = "Invalid email or password";
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?login=incorrect");
    exit;
}
?>

<?php echo $message; ?>

<?php
    // logged in?
    if (isset($_SESSION["user_type"])) {
        if ($_SESSION["user_type"] === "employer") {
            header("Location: employer.php");
            exit();
        } elseif ($_SESSION["user_type"] === "student") {
            header("Location: student.php");
            exit();
        }
    }
?>

<?php
header("Location: index.php?login=incorrect");
exit();
?>