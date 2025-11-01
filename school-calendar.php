<?php
$currentPage = 'school-calendar';
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
    <title>Barnes School & Junior College | School Calendar</title>
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
                                <li class="breadcrumb-item active" aria-current="page">School Calendar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="schoolCalendar">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>School Calendar</h2>
                                    </div>
                                    <a class="btn btn-primary" href="assets/media/calendar/school-calendar-2025.pdf" download>Download Calendar <i class="ph-duotone ph-download"></i></a>
                                </div>
                                <figure>
                                    <img src="assets/media/calendar/school-calender-2025-jan-feb.jpg"
                                        alt="School Calendar January-February">
                                    <img src="assets/media/calendar/school-calender-2025-mar-apr.jpg"
                                        alt="School Calendar March-April">
                                    <img src="assets/media/calendar/school-calender-2025-may-jun.jpg"
                                        alt="School Calendar May-June">
                                    <img src="assets/media/calendar/school-calender-2025-jul-aug.jpg"
                                        alt="School Calendar July-August">
                                    <img src="assets/media/calendar/school-calender-2025-sep-oct.jpg"
                                        alt="School Calendar September-October">
                                    <img src="assets/media/calendar/school-calender-2025-nov-dec.jpg"
                                        alt="School Calendar November-December">
                                </figure>
                            </div>
                        </div>
                        <!-- <?php include 'includes/sidebar.php'; ?> -->
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