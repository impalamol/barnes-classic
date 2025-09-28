<?php
$currentPage = 'school-management';
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
    <title>Barnes School & Junior College | School Management</title>
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
                                <li class="breadcrumb-item"><a href="about">About Us</a></li>
                                <li class="breadcrumb-item active" aria-current="page">School Management</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="aboutUs schoolManagement">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">Directors</h6>
                                        <h2>Bombay Education Society</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/avatars/avatar1.jpg" alt="">
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Mr. Lancelot Joseph</h3>
                                                <p>Hon. Secretary</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/avatars/avatar2.jpg" alt="">
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Mr. Vere Carneiro</h3>
                                                <p>Hon. Treasurer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/avatars/avatar3.jpg" alt="">
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Mr. Rudolf Woodman</h3>
                                                <p>Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Video Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="youtube-video" src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

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