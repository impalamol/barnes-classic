<?php
$currentPage = 'academics-achievements';
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
    <title>Barnes School & Junior College | Academic Achievements</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Academic Achievements</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="academics">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Grade 9A</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student1.jpg" alt="Priti Gurav">
                                                <span class="percentage">99.84%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Priti Gurav</h3>
                                                <p>Class 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student2.jpg" alt="Mitali Aher">
                                                <span class="percentage">99.84%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Mitali Aher</h3>
                                                <p>Class 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student3.jpg" alt="Sadia Shaikh">
                                                <span class="percentage">99.83%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Sadia Shaikh</h3>
                                                <p>Class 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student4.jpg" alt="Avinash Barke">
                                                <span class="percentage">99.75%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Avinash Barke</h3>
                                                <p>Class 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student5.jpg" alt="Sarvesh Patil">
                                                <span class="percentage">99.55%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Sarvesh Patil</h3>
                                                <p>Class 12</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-4">
                                        <div class="card avatarCard">
                                            <figure><img src="assets/media/students/student6.jpg" alt="Chintan Parmar">
                                                <span class="percentage">99.52%</span>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Chintan Parmar</h3>
                                                <p>Class 12</p>
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
    </div> <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>