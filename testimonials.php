<?php
$currentPage = 'testimonials';
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
    <title>Barnes School & Junior College | Testimonials</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Testimonials</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="testimonialCard">
                                            <video controls="">
                                                <source src="https://barnesschool.in/Test/3.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="testimonialCard">
                                            <video controls="">
                                                <source src="https://barnesschool.in/Test/3.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="testimonialCard">
                                            <video controls="">
                                                <source src="https://barnesschool.in/Test/3.mp4" type="video/mp4">
                                            </video>
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