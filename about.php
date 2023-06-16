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
<title>StudentJobs | ABOUT</title>
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
          <span class="nav-item active" onclick="location.href='about.php';" style="cursor: pointer;">ABOUT</span>
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
        
    <div class="imagebanner">
    <img src="images/aboutimg.jpg">
    </div>
        
    <div class="textbanner">
    <h1>About</h1>
    </div>
        
    <div class="contenttext">
    <h2>About Us</h2>
    <div class="infocontainer">
    <div class="lefttext">
    <p>Welcome to StudentJobs, a job search platform created by students and for students! We're a group of enthusiastic Information Science students who understand the struggle of combining studies, a social life and, of course, the need for some extra cash.<br><br>
    
    At StudentJobs, we've got your back when it comes to finding jobs that perfectly fit your lifestyle, planning, skills and most importantly, your study. Say goodbye to endless scrolling through generic job listings that have nothing to do with your field of interest!<br><br>
    
    Our mission is simple: to make your job search as simple as possible. We've partnered with businesses around your study area to bring you a wide range of opportunities that align with your studies and interests. Whether you're looking for a part-time or full-time job, an internship, or even a freelance project, we've got you covered.<br><br>
    
    So, why waste time on platforms that leave you feeling lost? Join the StudentJobs community and unlock the potential of your student life. Let's turn your skills into experiences that will not only boost your bank account but also enrich your personal and professional growth. At StudentJobs we kickstart your career... Your Dream Job is Waiting for You!</p>
    </div>
    <div class="rightimage">
    <div class="image" style="margin-bottom: 20px;"><img src="images/about1.jpg"></div>
    <div class="image"><img src="images/about2.jpg"></div>
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
    
    <script src="script2.js"></script>
    <!-- LOGIN / SIGN UP OVERLAY -->
    
</body>
</html>