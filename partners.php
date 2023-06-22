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
    <title>Document</title>
    <script src="templates.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page">
        <header-template></header-template>
        Partners
        <footer-template></footer-template>
    </div>

        <!-- LOGIN / SIGN UP OVERLAY -->
    <!-- Login Overlay -->
    <div id="loginOverlay" class="overlay">
        <div class="overlay-content">
            <span class="close-button">&times;</span>
            <form id="loginForm">
                <h2>Login</h2><br>
                <input type="email" name="email" id="loginEmail" placeholder="E-mail Address" required>
                <input type="password" name="password" id="loginPassword" placeholder="Password" required>
                <p id="loginerror" style="color: red; display: none;">Incorrect credentials, please try again...</p>
                <button type="submit" class="overlay-button">Login</button>
                <br><p><u><i><a class="forgotPassword" href="mailto:customercare@studentjobs.nl?subject=Forgot password&amp;body=Hi StudentJobs Service, I lost my password.">Forgot Password?</a></i></u></p>
                <p><u><i><a id="noAccount">Don't have an account? Click here</a></i></u></p>
            </form>
        </div>
    </div>

    <!-- Sign Up Overlay -->
    <div id="signUpOverlay" class="overlay">
        <div class="overlay-content">
            <span class="close-button">&times;</span>
            <form id="signUpForm">
                <h2>Sign Up</h2><br>
                <div style="text-align: center;">
                <button type="button" id="signUpEmployer" class="overlay-button" style="margin-right: 15px;">Employer</button>
                <button type="button" id="signUpStudent" class="overlay-button" style="margin-left: 15px;">Student</button>
                </div>
            </form>

            <!-- Employer Form -->
            <form id="employerForm" class="signUpDetails" style="display: none;">
                <h2>Employer Sign Up</h2><br>
                <input type="text" name="userType" value="employer" style="display: none;"> <!-- Hidden field for user type -->
                <input type="text" name="firstName" id="employerName" placeholder="First Name" required>
                <input type="text" name="function" id="employerFunction" placeholder="Function" required>
                <input type="email" name="email" id="employerEmail" placeholder="Company E-mail" required>
                <input type="password" name="password" id="employerPassword" placeholder="Password" required>
                <button type="submit" class="overlay-button">Sign Up</button>
                <p><u><i><a id="gotoLoginFromEmployer" class="gotoLogin">Already have an account? Click here</a></i></u></p>
                <p><a id="gotoStudentFromEmployer"><u><i>I am a student</i></u></a></p>
            </form>

            <!-- Student Form -->
            <form id="studentForm" class="signUpDetails" style="display: none;">
                <h2>Student Sign Up</h2><br>
                <input type="text" name="userType" value="student" style="display: none;"> <!-- Hidden field for user type -->
                <input type="text" name="firstName" id="studentFirstName" placeholder="First Name" required>
                <input type="text" name="lastName" id="studentLastName" placeholder="Last Name" required>
                <input type="email" name="email" id="studentEmail" placeholder="E-mail" required>
                <input type="password" name="password" id="studentPassword" placeholder="Password" required>
                <button type="submit" class="overlay-button">Sign Up</button>
                <p><u><i><a id="gotoLoginFromStudent" class="gotoLogin">Already have an account? Click here</a></i></u></p>
                <p><a id="gotoEmployerFromStudent"><u><i>I am an Employer</i></u></a></p>
            </form>
        </div>
    </div>
    
    <script src="script.js"></script>
    <!-- LOGIN / SIGN UP OVERLAY -->
</body>
</html>