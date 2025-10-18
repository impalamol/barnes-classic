<?php
$currentPage = 'about';
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
    <title>Barnes School & Junior College | Academics | Middle School</title>
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
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                                        <h6 class="pgSection">Curriculum</h6>
                                        <h2>Curriculum Overview</h2>
                                        <hr>
                                    </div>
                                </div>
                                <p>The academic session commences on April 1 every year. The school is structured in
                                    four levels.</p>
                                <h5>Pre-primary - LKG to UKG</h5>
                                <p>It’s a <strong>JOYFUL JOURNEY</strong> offering:</p>
                                <ul class="subjectList">
                                    <li>Circle Time (Thoughts, Conversations, Communication Skills)</li>
                                    <li>Reading</li>
                                    <li>Singing</li>
                                    <li>Art and Craft (Clay Modelling and Colouring Contests)</li>
                                    <li>Recitation (Elocution Competition)</li>
                                    <li>Environmental studies</li>
                                    <li>Phonics</li>
                                </ul>
                                <h5>Primary School - Grades 1 to 4</h5>
                                <p>The curriculum encourages students to understand basic concepts and develop a base
                                    for higher learning. Project and activity-based learning are introduced. Students
                                    are trained to become independent learners.</p>
                                <p>The following subjects are offered:</p>
                                <ul class="subjectList">
                                    <li>LANGUAGE I (English Language and Literature) (Elocution Competition, Handwriting
                                        Competition, Spell Bee Quiz)</li>
                                    <li>Language II (Hindi)</li>
                                    <li>Language III (Marathi)</li>
                                    <li>Mathematics</li>
                                    <li>Environmental Studies</li>
                                    <li>General Science</li>
                                    <li>Social Science</li>
                                    <li>Computer Applications</li>
                                    <li>Physical Education</li>
                                    <li>General Knowledge (G.K Quiz)</li>
                                    <li>Value-Education</li>
                                </ul>

                                <h5>ADDITIONAL SUBJECTS: </h5>
                              <ul class="subjectList">
                                    <li>Arts</li>
                                    <li>Music</li>
                                    <li>Dance</li>
                                    <li>Craft</li>
                                </ul>
                                </ul>
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