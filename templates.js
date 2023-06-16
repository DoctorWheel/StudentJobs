class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = '<div class="header"><div class="name" onclick="location.href=\'index.php\';" style="cursor: pointer;"><h1>StudentJobs</h1><img src="images/icon.png" alt="Logo" style="width: 2.5vw; margin-left: 0.4vw;"></div><div class="navigation"><span class="nav-item active">HOME</span><span class="nav-item" onclick="location.href=\'jobs.php\';" style="cursor: pointer;">JOBS</span><span class="nav-item" onclick="location.href=\'partners.php\';" style="cursor: pointer;">PARTNERS</span><span class="nav-item" onclick="location.href=\'about.php\';" style="cursor: pointer;">ABOUT</span><span class="nav-item" onclick="location.href=\'contact.php\';" style="cursor: pointer;">CONTACT</span></div><div class="buttons"><div class="button-container"><button id="btnSignUp" class="button button-1">Sign Up</button><button id="btnLogin" class="button button-2">Login</button><button id="btnAccount1" class="button button-1" style="display: none;" onclick="location.href=\'student.php\';">Account</button><button id="btnAccount2" class="button button-1" style="display: none;" onclick="location.href=\'employer.php\';">Account</button><button id="btnLogout" class="button button-2" style="display: none;" onclick="location.href=\'logout.php\';">Logout</button></div></div></div>';
    }
}

customElements.define('header-template', Header)