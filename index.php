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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>StudentJobs | HOME</title>
<link rel="icon" type="image/ico" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="styles.css">
<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    
    <div class="page">
    <div class="header">
      <div class="name" onclick="location.href='index.php';" style="cursor: pointer;"><h1>StudentJobs</h1><img src="images/icon.png" alt="Logo" style="width: 2.5vw; margin-left: 0.4vw;"></div>
      <div class="navigation">
          <span class="nav-item" onclick="location.href='index.php';" style="cursor: pointer;">HOME</span>
          <span class="nav-item" onclick="location.href='jobs.php';" style="cursor: pointer;">JOBS</span>
          <span class="nav-item" onclick="location.href='partners.php';" style="cursor: pointer;">PARTNERS</span>
          <span class="nav-item" onclick="location.href='about.php';" style="cursor: pointer;">ABOUT</span>
          <span class="nav-item" onclick="location.href='contact.php';" style="cursor: pointer;">CONTACT</span>
      </div>
      <div class="buttons">
          <div class="button-container">
              <button id="btnSignUp" class="button button-1">Sign Up</button>
              <button id="btnLogin" class="button button-2">Login</button>
              <button id="btnAccount1" class="button button-1" style="display: none;" onclick="location.href='student.php';">Account</button>
              <button id="btnAccount2" class="button button-1" style="display: none;" onclick="location.href='employer.php';">Account</button>
              <button id="btnLogout" class="button button-2" style="display: none;" onclick="location.href='logout.php';">Logout</button>
          </div>
      </div>
    </div>
    <div class="content1">
        <div class="intro">
          <div class="introtext" style="padding-right: 20px;">
                <h1 class="introtitle">Your Dream Job is Waiting for <span style="color: white">You</span>!</h1>
                <p class="intropg">At StudentJobs we kickstart your career!</p>
                    <div class="introbutton-container">
                        <button class="introbutton introbutton-1" onclick="location.href='about.php';" style="cursor: pointer;">About us</button>
                        <button id="btnSignUp2" class="introbutton introbutton-2">Sign up</button>
                    </div>
          </div>
          <div class="introimg">
                <img src="images/introimg.jpg" alt="Intro Image">
          </div>
        </div>
    </div>
    <div class="content2">
        <h1 style="text-align: center; margin-top: 25px;">Applying to Jobs Has Never Been Easier</h1>
          <div class="promo-container">
                    <div class="promo-box promo-left">
                        <h2>1</h2>
                        <p>Easily navigate through a wide range of job listings tailored specifically for students.</p>
                    </div>
                    <div class="promo-box promo-middle">
                        <h2>2</h2>
                        <p>Apply for multiple jobs, track your progress, and simplify the application process.</p>
                    </div>
                    <div class="promo-box promo-right">
                        <h2>3</h2>
                        <p>Communicate easily with potential employers and schedule interviews at your convenience.</p>
                    </div>
          </div>
    </div>
    <div class="content3">
      <div class="intro2">
          <div class="intro2text">
                <h1 class="intro2title">Hire the Best Candidates</h1>
                <p class="intro2pg">Discover StudentJobs for Employers.</p>
                    <div class="intro2button-container">
                        <button class="intro2button intro2button-1" onclick="location.href='partners.php';" style="cursor: pointer;">Get started</button>
                    </div>
          </div>
          <div class="intro2img">
                <img src="images/laptopman.png" alt="Intro Image">
          </div>
        </div>
    </div>
    <div class="footer">
      <p style="text-align: center;">© 2023 StudentJobs</p>
    </div>
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