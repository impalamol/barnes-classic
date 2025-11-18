<section class="topbar">
    <div class="container">
        <div class="row">
            <div class="topbarContent">
                <div class="quickLinks">
                    <a href="mailto:administrator@barnesschool.in"><i class="ph-duotone ph-envelope"></i>
                        administrator@barnesschool.in</a>
                    <div class="vr"></div>
                    <a href="tel:02534034261"><i class="ph-duotone ph-phone-call"></i> 0253 4034261</a>
                </div>

                <div class="social">
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-linkedin-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-facebook-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-instagram-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-twitter-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-youtube-logo"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>
<header class="sticky-top">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="index">
                <img src="assets/media/barnes-logo2.png" alt="Barnes School & Junior College">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'news') ? 'active' : ''; ?>"
                                href="about">What's
                                in the News </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'school-calendar') ? 'active' : ''; ?>"
                                href="school-calendar">School
                                Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" id="desktopMenuToggle" data-bs-toggle="offcanvas"
                                href="#desktopMenu" role="button" aria-controls="desktopMenu"><i
                                    class="ph-duotone ph-list"></i> Menu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="notification">
        <div class="container">
            <div class="row">
                <div class="notificationsContainer">
                    <span class="title">
                        <i class="ph-duotone ph-bell-simple-ringing"></i>
                        Notifications
                    </span>
                    <div class="notificationListContainer">
                        <ul class="notificationList">
                            <li><i class="ph-duotone ph-info"></i> Admission Test on 10th October 2025</li>
                            <li><i class="ph-duotone ph-info"></i> Join us for Open Day - 20th September 2025</li>
                            <li><i class="ph-duotone ph-info"></i> Updated Important Dates at a Glance</li>
                            <li><i class="ph-duotone ph-info"></i> Admission Test on 10th October 2025</li>
                            <li><i class="ph-duotone ph-info"></i> Join us for Open Day - 20th September 2025</li>
                            <li><i class="ph-duotone ph-info"></i> Updated Important Dates at a Glance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Desktop Offcanvas Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="desktopMenu" aria-labelledby="desktopMenuLabel">
    <div class="offcanvas-header border-bottom">
        <h3 class="offcanvas-title" id="desktopMenuLabel">Menu</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">

            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>" href="index">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">About us</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="who-we-are">Who we are</a></li>
                    <li><a class="dropdown-item" href="history">History</a></li>
                    <li><a class="dropdown-item" href="vision-mission">Vision & Mission</a></li>
                    <li><a class="dropdown-item" href="presidents-desk">President’s Desk</a></li>
                    <li><a class="dropdown-item" href="principals-desk">Principal’s Desk</a></li>
                    <li><a class="dropdown-item" href="school-management">School Management</a></li>
                    <li><a class="dropdown-item" href="student-council">Student Council</a></li>
                    <li><a class="dropdown-item" href="teaching-staff">Teaching Staff</a></li>
                    <li><a class="dropdown-item" href="non-teaching-staff">Non-teaching staff</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>"
                    href="index" data-bs-toggle="dropdown" aria-expanded="false">Admissions</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admission-process">Admission Process</a></li>
                    <li><a class="dropdown-item" href="apply-to-barnes">Apply To Barnes</a></li>
                    <li><a class="dropdown-item" href="school-visit">Apply for school visit</a></li>
                    <li><a class="dropdown-item" href="fees-structure">Fees Structure</a></li>
                    <li><a class="dropdown-item" href="testimonial">Testimonial</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'academics') ? 'active' : ''; ?>"
                    href="#" data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="day-scholar">Day Scholar</a></li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Boarder</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="routine">Routine</a></li>
                            <li><a class="dropdown-item" href="rules">Rules</a></li>
                            <li><a class="dropdown-item" href="in-charges">In charges</a></li>
                            <li><a class="dropdown-item" href="houses">Houses</a></li>
                            <li><a class="dropdown-item" href="meal">Meal</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'examinations') ? 'active' : ''; ?>"
                    href="#" data-bs-toggle="dropdown" aria-expanded="false">Examinations</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="examination-skims">Examination Skims</a></li>
                    <li><a class="dropdown-item" href="schedule">Schedule</a></li>
                    <li><a class="dropdown-item" href="circulars">Circulars</a></li>
                    <li><a class="dropdown-item" href="results">Results</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'achievements') ? 'active' : ''; ?>"
                    href="#" data-bs-toggle="dropdown" aria-expanded="false">Achievements</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="post-achievements">Post Achievements</a></li>
                    <li><a class="dropdown-item" href="present-achievements">Present Achievements</a></li>
                    <li><a class="dropdown-item" href="achievements-results">Results</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($currentPage === 'gallery') ? 'active' : ''; ?>" href="#"
                    data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="photo-gallery">Photo Gallery</a></li>
                    <li><a class="dropdown-item" href="video-gallery">Video Gallery</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="barnicles">Down the memory lane(Barnicles)</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="alumni">Alumni</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="we-in-the-print">We in the print</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'news') ? 'active' : ''; ?>" href="about">What's in the
                    News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage === 'school-calendar') ? 'active' : ''; ?>"
                    href="products">School Calendar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tenders">Tenders</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="work-with-us">Work with us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="quick-payment">Quick Payment</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="publications">Publications</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="student-corner">Student Corner</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="case-studies">Case studies</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="school-tour">School Tour</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="inquiry-forms">Inquiry Forms</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="whatsapp-button">WhatsApp Button</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="call-button">Call Button</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="request-call-back">Request call back feature</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="blogs">Blogs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="vlogs">Vlogs</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="privacy-policy">Privacy Policy</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="school-rules">School rules</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact-us">Contact Us (With how to reach us)</a>
            </li>

        </ul>
    </div>
</div>
