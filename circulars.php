<?php
$currentPage = 'circulars';
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
    <title>Barnes School & Junior College | Circulars</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Circulars</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="documents">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Circulars</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="documentCard">
                                            <figure>
                                                <img src="assets/media/pdf.svg" alt="documents">
                                            </figure>
                                            <h6>Circlular 1</h6>
                                            <div class="btnGroup">
                                                <a href="assets/media/documents/circlular.pdf" target="_blank"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="ph-duotone ph-eye"></i> View</a>
                                                <a href="assets/media/documents/circlular.pdf" download
                                                    class="btn btn-primary btn-sm"><i
                                                        class="ph-duotone ph-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="documentCard">
                                            <figure>
                                                <img src="assets/media/pdf.svg" alt="documents">
                                            </figure>
                                            <h6>Circlular 2</h6>
                                            <div class="btnGroup">
                                                <a href="assets/media/documents/circlular.pdf" target="_blank"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="ph-duotone ph-eye"></i> View</a>
                                                <a href="assets/media/documents/circlular.pdf" download
                                                    class="btn btn-primary btn-sm"><i
                                                        class="ph-duotone ph-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="documentCard">
                                            <figure>
                                                <img src="assets/media/pdf.svg" alt="documents">
                                            </figure>
                                            <h6>Circlular 3</h6>
                                            <div class="btnGroup">
                                                <a href="assets/media/documents/circlular.pdf" target="_blank"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="ph-duotone ph-eye"></i> View</a>
                                                <a href="assets/media/documents/circlular.pdf" download
                                                    class="btn btn-primary btn-sm"><i
                                                        class="ph-duotone ph-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                                        <div class="documentCard">
                                            <figure>
                                                <img src="assets/media/pdf.svg" alt="documents">
                                            </figure>
                                            <h6>Circlular 4</h6>
                                            <div class="btnGroup">
                                                <a href="assets/media/documents/circlular.pdf" target="_blank"
                                                    class="btn btn-outline-primary btn-sm"><i
                                                        class="ph-duotone ph-eye"></i> View</a>
                                                <a href="assets/media/documents/circlular.pdf" download
                                                    class="btn btn-primary btn-sm"><i
                                                        class="ph-duotone ph-download"></i> Download</a>
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