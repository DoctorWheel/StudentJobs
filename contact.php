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

<!-- Includes code from codeshack.io -->

<?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['message'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['message'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// If there are no errors
	if (!$responses) {
		// Where to send the mail? It should be your email address
		$to   = $_POST['email'];
		// Send mail from which email address?
		$from = 'noreply@studentjobs.nl';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['message'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Cc: iljanemo@gmail.com' . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentJobs | CONTACT</title>
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <script src="templates.js"></script>
</head>
<body>
    <div class="page">
        <header-template></header-template>
        <div class="textbanner">
            <h1>Contact</h1>
        </div>
        <div class="contact-wrapper">
            <div class="contact">
                <h1>Contact us</h1>
                <form class="contact-form" method="post">
                    <input id="email" type="email" name="email" placeholder="Email" required>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <input type="submit">
                </form>
            </div>
        </div>
        <footer-template></footer-template>
    </div>

	<account-overlays-template></account-overlays-template>
	
</body>
</html>