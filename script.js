window.onload = function() {
        if (typeof userType === 'undefined') {
            document.getElementById('btnAccount1').style.display = 'none';
            document.getElementById('btnAccount2').style.display = 'none';
            document.getElementById('btnLogout').style.display = 'none';
            document.getElementById('btnSignUp').style.display = 'block';
            document.getElementById('btnLogin').style.display = 'block';
            document.getElementById('btnSignUp2').style.display = 'block';
        } else if (userType === 'student') {
            document.getElementById('btnAccount1').style.display = 'block';
            document.getElementById('btnAccount2').style.display = 'none';
            document.getElementById('btnLogout').style.display = 'block';
            document.getElementById('btnSignUp').style.display = 'none';
            document.getElementById('btnLogin').style.display = 'none';
            document.getElementById('btnSignUp2').style.display = 'none';
        } else if (userType === 'employer') {
            document.getElementById('btnAccount1').style.display = 'none';
            document.getElementById('btnAccount2').style.display = 'block';
            document.getElementById('btnLogout').style.display = 'block';
            document.getElementById('btnSignUp').style.display = 'none';
            document.getElementById('btnLogin').style.display = 'none';
            document.getElementById('btnSignUp2').style.display = 'none';
        }
    };

document.getElementById('btnLogin').addEventListener('click', function() {
    document.getElementById('loginOverlay').style.display = 'block';
});

window.addEventListener('DOMContentLoaded', function() {
        var urlParams = new URLSearchParams(window.location.search);
        var message = urlParams.get('login');
        if (message === "incorrect") {
            document.getElementById('loginOverlay').style.display = 'block';
            document.getElementById('loginerror').style.display = 'block';
        }
});

document.getElementById('btnSignUp').addEventListener('click', function() {
    document.getElementById('signUpOverlay').style.display = 'block';
});

document.getElementById('btnSignUp2').addEventListener('click', function() {
    document.getElementById('signUpOverlay').style.display = 'block';
});

var closeButtons = document.getElementsByClassName('close-button');
for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].addEventListener('click', function() {
        var overlay = this.parentElement.parentElement;
        overlay.style.display = 'none';
        document.getElementById('loginerror').style.display = 'none';

        if (overlay.id === 'signUpOverlay') {
            document.getElementById('signUpForm').style.display = 'block';
            document.getElementById('employerForm').style.display = 'none';
            document.getElementById('studentForm').style.display = 'none';
        }
    });
}

document.getElementById('signUpEmployer').addEventListener('click', function() {
    document.getElementById('signUpForm').style.display = 'none';
    document.getElementById('employerForm').style.display = 'block';
});

document.getElementById('signUpStudent').addEventListener('click', function() {
    document.getElementById('signUpForm').style.display = 'none';
    document.getElementById('studentForm').style.display = 'block';
});

document.getElementById('gotoEmployerFromStudent').addEventListener('click', function() {
    document.getElementById('studentForm').style.display = 'none';
    document.getElementById('employerForm').style.display = 'block';
});

document.getElementById('gotoStudentFromEmployer').addEventListener('click', function() {
    document.getElementById('employerForm').style.display = 'none';
    document.getElementById('studentForm').style.display = 'block';
});

document.getElementById('noAccount').addEventListener('click', function() {
    document.getElementById('loginOverlay').style.display = 'none';
    document.getElementById('signUpOverlay').style.display = 'block';
    document.getElementById('loginerror').style.display = 'none';

    document.getElementById('signUpForm').style.display = 'block';
    document.getElementById('employerForm').style.display = 'none';
    document.getElementById('studentForm').style.display = 'none';
});


var loginFromSignUpButtons = document.getElementsByClassName('gotoLogin');
for (var i = 0; i < loginFromSignUpButtons.length; i++) {
    loginFromSignUpButtons[i].addEventListener('click', function() {
        document.getElementById('signUpOverlay').style.display = 'none';
        document.getElementById('loginOverlay').style.display = 'block';
        document.getElementById('loginerror').style.display = 'none';

        document.getElementById('signUpForm').style.display = 'block';
        document.getElementById('employerForm').style.display = 'none';
        document.getElementById('studentForm').style.display = 'none';
    });
}

// Handle form submission
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var submitlogin = "login.php";

    this.action = submitlogin;
    this.method = "POST";


    this.submit();
    
    console.log('Login Form Submitted');
});

document.getElementById('employerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var submitemployer = "signup.php";

    this.action = submitemployer;
    this.method = "POST";

    this.submit();
    
    console.log('Employer Form Submitted');
});

document.getElementById('studentForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var submitstudent = "signup.php";

    this.action = submitstudent;
    this.method = "POST";

    this.submit();
    
    console.log('Student Form Submitted');
});

var overlays = document.getElementsByClassName('overlay');
for (var i = 0; i < overlays.length; i++) {
    overlays[i].addEventListener('click', function(event) {
        if (event.target === event.currentTarget) {
            this.style.display = 'none';
            document.getElementById('loginerror').style.display = 'none';

            if (this.id === 'signUpOverlay') {
                document.getElementById('signUpForm').style.display = 'block';
                document.getElementById('employerForm').style.display = 'none';
                document.getElementById('studentForm').style.display = 'none';
            }
        }
    });
}
