<?php
$currentPage = 'albums';
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
    <title>Barnes School & Junior College | Barnes Albums</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Barnes Albums</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="albumDetails">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content ">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Friendly Basketball Match With Ashoka School, Wadala</h2>
                                    </div>
                                </div>
                                <div id="postList" class="gridGallery popupGallery">
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery1.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery1.jpg" alt="Gallery Img 1"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 1</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery2.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery2.jpg" alt="Gallery Img 2"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 2</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery3.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery3.jpg" alt="Gallery Img 3"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 3</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery4.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery4.jpg" alt="Gallery Img 4"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 4</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery5.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery5.jpg" alt="Gallery Img 5"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 5</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery6.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery6.jpg" alt="Gallery Img 6"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 6</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery7.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery7.jpg" alt="Gallery Img 7"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 7</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="item" data-aos="fade-up" data-aos-duration="1000">
                                        <figure>
                                            <a href="assets/media/gallery/gallery8.jpg" data-lightbox="gallery-set">
                                                <img src="assets/media/gallery/gallery8.jpg" alt="Gallery Img 8"
                                                    loading="lazy">
                                                <div class="projectCaption">
                                                    <h4>Gallery Img 8</h4>
                                                </div>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </section>

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