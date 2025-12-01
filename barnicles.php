<?php
$currentPage = 'Barnicles';
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
    <title>Barnes School & Junior College | Barnicles</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Barnicles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="barnicles">
            <div class="container">
                <div class="row">
                    <div class="pgHeader">
                        <div class="pgTitle">
                            <h6 class="pgSection">Barnes Barnicles</h6>
                            <h2>Barnicles</h2>
                            <p>Sometimes you never know the value of moment until it becomes a memory</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-3">
                        <a href="#" target="_blank" class="barnicleCard">
                            <figure>
                                <img src="assets/media/barnicles/barnicle1.jpg" alt="barnicles">
                            </figure>
                            <h6>Barnicle 2025</h6>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-3">
                        <a href="#" target="_blank" class="barnicleCard">
                            <figure>
                                <img src="assets/media/barnicles/barnicle2.jpg" alt="barnicles">
                            </figure>
                            <h6>Barnicle 2024</h6>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-3">
                        <a href="#" target="_blank" class="barnicleCard">
                            <figure>
                                <img src="assets/media/barnicles/barnicle3.jpg" alt="barnicles">
                            </figure>
                            <h6>Barnicle 2023</h6>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mb-3">
                        <a href="#" target="_blank" class="barnicleCard">
                            <figure>
                                <img src="assets/media/barnicles/barnicle4.jpg" alt="barnicles">
                            </figure>
                            <h6>Barnicle 2022</h6>
                        </a>
                    </div>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-current="page">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="alumniModal" tabindex="-1" aria-labelledby="alumniModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alumniModalLabel">Anil Yashwant Tipnis</h5>
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