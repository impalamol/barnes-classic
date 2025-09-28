<?php
$currentPage = 'presidents-desk';
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
    <title>Barnes School & Junior College | President's Desk</title>
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
                                <li class="breadcrumb-item active" aria-current="page">President's Desk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="aboutUs presidentsDesk">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">Message by President</h6>
                                        <h2>President's Desk</h2>
                                        <hr>
                                    </div>
                                </div>
                                <figure>
                                    <img src="assets/media/president.jpg" alt="Barnes School & College">
                                </figure>
                                <p>At Barnes English School & Jr. College, we believe that education is the foundation
                                    of human progress and the key to a sustainable future. As a lifelong educator, I've
                                    had the privilege of witnessing the incredible moment when a young person grasps a
                                    new idea or solves a difficult problem. This flash of insight is truly remarkable,
                                    and it's what inspires future inventors, scientists, artists, leaders, and social
                                    reformers. Since our founding, we've been dedicated to producing such successful
                                    individuals. Our alumni have gone on to achieve great things in various fields
                                    around the world, and I am confident this legacy will continue for many years to
                                    come.</p>
                                <p>Our success stems from our balanced approach. We are committed to providing an ideal
                                    mix of academic rigor, athletic development, extracurricular activities, and
                                    personality building. Our curriculum is designed to foster critical life skills,
                                    creativity, and analytical thinking. Most importantly, we instill in every student
                                    the highest human and social values. We don't just teach the difference between
                                    right and wrong; we guide our students to live with integrity and virtue. We
                                    emphasize the importance of compassion, inclusion, and generosity, helping each
                                    student understand their responsibilities as a citizen and a future leader of our
                                    nation.</p>
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