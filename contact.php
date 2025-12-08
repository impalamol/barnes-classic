<?php
$currentPage = 'contact';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/styles.php'; ?>
    <title>Barnes School & Junior College | Contact</title>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="breadcrumbs" style="background: url(assets/media/breadcrumbs/about.jpg)">
            <div class="breadcrumbContent">
                <div class="container">
                    <div class="row">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="contactUs">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 col-xl-5 col-xxl-5 mb-4">
                        <div class="contactCard form">
                            <div class="pgHeader">
                                <div class="pgTitle">
                                    <h2>Let's Talk</h2>
                                </div>
                            </div>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email contactInfo">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Message" id="message"
                                                style="height: 120px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <button type="submit" class="btn btn-primary">
                                            Send Message <i class="ph-duotone ph-paper-plane-tilt"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-7 col-xxl-7 mb-4">
                        <div class="contactCard">
                            <div class="pgHeader">
                                <div class="pgTitle">
                                    <h2>Contact Details</h2>
                                </div>
                            </div>
                            <div class="contactChip">
                                <div class="icon">
                                    <i class="ph-duotone ph-map-pin"></i>
                                </div>
                                <div class="contactDetail">
                                    <h5>
                                        Address
                                    </h5>
                                    <span>
                                        Air Force Station Road Devlali Camp, Nashik, Maharashtra 422401, India
                                    </span>
                                </div>
                            </div>
                            <div class="contactChip">
                                <div class="icon">
                                    <i class="ph-duotone ph-phone"></i>
                                </div>
                                <div class="contactDetail">
                                    <h5>
                                        Contact
                                    </h5>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-4">
                                            <span class="mb-3">
                                                <strong>For Admission</strong>
                                                <a href="tel:+917888092255">+91 7888 0922 55</a>
                                            </span>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-4">
                                            <span class="mb-3">
                                                <strong>Other Query</strong>
                                                <a href="tel:+917888095545">+91 78880 95545</a>
                                            </span>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-4">
                                            <span class="mb-3">
                                                <strong>Office</strong>
                                                <a href="tel:+9102534034261">0253 4034261</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contactChip">
                                <div class="icon">
                                    <i class="ph-duotone ph-envelope"></i>
                                </div>
                                <div class="contactDetail">
                                    <h5>
                                        Email
                                    </h5>
                                    <div class="row">

                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <span class="mb-3">
                                                <strong>To Admin</strong>
                                                <a
                                                    href="mailto:administrator@barnesschool.in">administrator@barnesschool.in</a>
                                            </span>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <span class="mb-3">
                                                <strong>For Admission</strong>
                                                <a href="mailto:admission@barnesschool.in">admission@barnesschool.in</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.466887927139!2d73.8055119749989!3d19.877213781499425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd95c53e356741%3A0x68ac2e21d0e99be!2sBarnes%20School%20and%20Junior%20College!5e1!3m2!1sen!2sin!4v1765192892530!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <div class="modal fade" id="highlightPopupModal" tabindex="-1" aria-labelledby="highlightPopupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="highlightPopupModalLabel">Title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/media/gallery/gallery.jpg" alt="Img Title" title="Img Title">
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>