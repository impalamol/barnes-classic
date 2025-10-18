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
    <title>Barnes School & Junior College | Academics | Junior College</title>
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
                                        <h6 class="pgSection">Education</h6>
                                        <h2>Academics</h2>
                                        <hr>
                                    </div>
                                </div>
                                <p>At <strong>Barnes School and Junior College</strong>, learning is <strong>dynamic,
                                        inclusive, and future-focused</strong>. Our classrooms pulse with creativity as
                                    students engage in <strong>Active Learning</strong> experiences that ignite
                                    curiosity, critical thinking, and confidence. Every achievement is celebrated
                                    &mdash; students&rsquo; work adorns our spaces, inspiring pride and a sense of
                                    ownership in their learning journey.</p>
                                <p>Guided by the powerful principles of <strong>Backward Design</strong>, our educators
                                    teach with intent and precision &mdash; defining clear outcomes, crafting purposeful
                                    lessons, and nurturing mastery through meaningful engagement.</p>
                                <p>Supported by dedicated <strong>mentors</strong>, our inclusive learning environment
                                    ensures that every child&rsquo;s unique potential is recognised, respected, and
                                    realized.</p>
                                <p>At Barnes, we don&rsquo;t just prepare students for examinations &mdash; <strong>we
                                        empower them to lead, create, and thrive</strong> in an ever-evolving
                                    world.</p>
                                <p><strong>Senior Secondary School (Grades 11 and 12)</strong></p>
                                <p>Barnes offers a diverse range of academic pathways, enabling students to pursue their
                                    passions while preparing for higher education and professional excellence.</p>
                                <hr />
                                <h5>Science Stream</h5>
                                <ul class="subjectList">
                                    <li>English</li>
                                    <li>Physics</li>
                                    <li>Chemistry</li>
                                    <li>Biology</li>
                                    <li>Mathematics</li>
                                </ul>
                                <h5>Commerce Stream</h5>
                                <ul class="subjectList">
                                    <li>English</li>
                                    <li>Accountancy</li>
                                    <li>Commerce</li>
                                    <li>Economics</li>
                                    <li>Mathematics</li>
                                </ul>
                                <hr />
                                <h5>Humanities Stream</h5>
                                <ul class="subjectList">
                                    <li>English</li>
                                    <li>History</li>
                                    <li>Psychology</li>
                                    <li>Mathematics</li>
                                </ul>
                                <hr />
                                <h5>Optional Subjects</h5>
                                <p>Students can enrich their learning through a wide array of optional subjects designed
                                    to complement core disciplines and foster specialized interests:</p>
                                <ul class="subjectList">
                                    <li>Mathematics</li>
                                    <li>Economics</li>
                                    <li>Psychology</li>
                                    <li>Biology</li>
                                    <li>Physical Education</li>
                                    <li>Computer Science</li>
                                    <li>Art and Drawing</li>
                                    <li>Fashion Designing</li>
                                    <li>Environmental Science</li>
                                </ul>
                                <hr />
                                <h5>Upcoming Subjects</h5>
                                <p>Reflecting our commitment to evolving academic horizons, Barnes will soon introduce
                                    new subjects that expand student choice and relevance:</p>
                                <ul class="subjectList">
                                    <li>Political Science</li>
                                    <li>Geography</li>
                                    <li>Mass Media and Communication</li>
                                    <li>Sociology</li>
                                    <li>Business Studies</li>
                                </ul>
                                <div class="note">
                                    <p>At <strong>Barnes School and Junior College</strong>, education is not just about
                                        acquiring knowledge &mdash; <strong>it&rsquo;s about shaping thinkers,
                                            innovators,
                                            and leaders of tomorrow.</strong></p>
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