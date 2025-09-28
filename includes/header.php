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
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'admissions') ? 'active' : ''; ?>"
                                href="index">Admissions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'news') ? 'active' : ''; ?>"
                                href="about">What's
                                in the News </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($currentPage === 'school-calendar') ? 'active' : ''; ?>"
                                href="products">School
                                Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-link" href="contact">Contact Us</a>
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
<!-- Modal -->
<div class="modal fade" id="aboutVideo" tabindex="-1" aria-labelledby="aboutVideoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="aboutVideoLabel">Video Title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                        allowfullscreen></iframe>
                    <iframe id="youtubeIframe" width="100%" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                        title="YouTube video" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>