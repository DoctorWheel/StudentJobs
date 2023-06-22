class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = '<div class="header"><div class="name" onclick="location.href=\'index.php\';" style="cursor: pointer;"><h1>StudentJobs</h1><img src="images/icon.png" alt="Logo" style="width: 2.5vw; margin-left: 0.4vw;"></div><div class="navigation"><span class="nav-item active">HOME</span><span class="nav-item" onclick="location.href=\'jobs.php\';" style="cursor: pointer;">JOBS</span><span class="nav-item" onclick="location.href=\'partners.php\';" style="cursor: pointer;">PARTNERS</span><span class="nav-item" onclick="location.href=\'about.php\';" style="cursor: pointer;">ABOUT</span><span class="nav-item" onclick="location.href=\'contact.php\';" style="cursor: pointer;">CONTACT</span></div><div class="buttons"><div class="button-container"><button id="btnSignUp" class="button button-1">Sign Up</button><button id="btnLogin" class="button button-2">Login</button><button id="btnAccount1" class="button button-1" style="display: none;" onclick="location.href=\'student.php\';">Account</button><button id="btnAccount2" class="button button-1" style="display: none;" onclick="location.href=\'employer.php\';">Account</button><button id="btnLogout" class="button button-2" style="display: none;" onclick="location.href=\'logout.php\';">Logout</button></div></div></div>';
    }
}

customElements.define('header-template', Header)

class Footer extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = '<div class="footer"><p style="text-align: center;">© 2023 StudentJobs</p></div>';
    }
}

customElements.define('footer-template', Footer)

class AccountOverlays extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = '<!-- LOGIN / SIGN UP OVERLAY --><!-- Login Overlay --><div id="loginOverlay" class="overlay"><div class="overlay-content"><span class="close-button">&times;</span><form id="loginForm"><h2>Login</h2><br><input type="email" name="email" id="loginEmail" placeholder="E-mail Address" required><input type="password" name="password" id="loginPassword" placeholder="Password" required><p id="loginerror" style="color: red; display: none;">Incorrect credentials, please try again...</p><button type="submit" class="overlay-button">Login</button><br><p><u><i><a class="forgotPassword" href="mailto:customercare@studentjobs.nl?subject=Forgot password&amp;body=Hi StudentJobs Service, I lost my password.">Forgot Password?</a></i></u></p><p><u><i><a id="noAccount">Don\'t have an account? Click here</a></i></u></p></form></div></div><!-- Sign Up Overlay --><div id="signUpOverlay" class="overlay"><div class="overlay-content"><span class="close-button">&times;</span><form id="signUpForm"><h2>Sign Up</h2><br><div style="text-align: center;"><button type="button" id="signUpEmployer" class="overlay-button" style="margin-right: 15px;">Employer</button><button type="button" id="signUpStudent" class="overlay-button" style="margin-left: 15px;">Student</button></div></form><!-- Employer Form --><form id="employerForm" class="signUpDetails" style="display: none;"><h2>Employer Sign Up</h2><br><input type="text" name="userType" value="employer" style="display: none;"> <!-- Hidden field for user type --><input type="text" name="firstName" id="employerName" placeholder="First Name" required><input type="text" name="function" id="employerFunction" placeholder="Function" required><input type="email" name="email" id="employerEmail" placeholder="Company E-mail" required><input type="password" name="password" id="employerPassword" placeholder="Password" required><button type="submit" class="overlay-button">Sign Up</button><p><u><i><a id="gotoLoginFromEmployer" class="gotoLogin">Already have an account? Click here</a></i></u></p><p><a id="gotoStudentFromEmployer"><u><i>I am a student</i></u></a></p></form><!-- Student Form --><form id="studentForm" class="signUpDetails" style="display: none;"><h2>Student Sign Up</h2><br><input type="text" name="userType" value="student" style="display: none;"> <!-- Hidden field for user type --><input type="text" name="firstName" id="studentFirstName" placeholder="First Name" required><input type="text" name="lastName" id="studentLastName" placeholder="Last Name" required><input type="email" name="email" id="studentEmail" placeholder="E-mail" required><input type="password" name="password" id="studentPassword" placeholder="Password" required><button type="submit" class="overlay-button">Sign Up</button><p><u><i><a id="gotoLoginFromStudent" class="gotoLogin">Already have an account? Click here</a></i></u></p><p><a id="gotoEmployerFromStudent"><u><i>I am an Employer</i></u></a></p></form></div></div><script src="script.js"></script><!-- LOGIN / SIGN UP OVERLAY -->';
    }
}

customElements.define('account-overlays-template', AccountOverlays)