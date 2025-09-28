<?php
$currentPage = 'history';
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
    <title>Barnes School & Junior College | History</title>
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
                                <li class="breadcrumb-item active" aria-current="page">History</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="aboutUs history">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">Proud Past</h6>
                                        <h2>History</h2>
                                        <hr>
                                        <p>Barnes School was founded on 29th January, 1925 in memory of Arch-Deacon
                                            George
                                            Barnes who had started the Bombay Education Society in 1815. During that
                                            time
                                            Barnes School was established primarily for Anglo-Indian Boys and Girls
                                            where
                                            they could be given a good upbringing and sound education. It is a private
                                            co-educational prep School. It is an Anglican School, founded in 1925, under
                                            the
                                            auspices of the Bombay Education Society. The School is twinned with Christ
                                            Church School, in Mumbai.</p>
                                        <p>Both schools follow the ICSE curriculum and use the same shield as a badge or
                                            logo, Barnes is in blue and Christ Church is in green. It is still a Church
                                            School where Christian ideals are practiced and imparted. It has a long and
                                            proud record, meting out distinguished educational service while catering to
                                            students from all castes and creed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">The Inspiration Behind Our School</h6>
                                        <h2>Venerable Archdeacon George Barnes</h2>
                                        <hr>
                                        <img src="assets/media/george-barnes.jpg"
                                            alt="Venerable Archdeacon George Barnes">
                                        <p>On January 27th 1815 the Venerable Archdeacon George Barnes, the Senior
                                            Anglican Priest in Western India, preached to the congregation of St Thomas'
                                            Church, Bombay - now the Cathedral - appealing for help in educating the
                                            children of poor Europeans and Anglo Indians. Immediately after the service
                                            'The Society for Promoting the Education of the Poor within the Government
                                            of Bombay' (now known as the Bombay Education Society) was formed with Sir
                                            Evan Nepean, then Governor of Bombay, as its first President. Archdeacon
                                            Barnes was only in India for twelve years, from 1814 to 1825.</p>
                                        <img src="assets/media/old-building.jpg" alt="Barnes School & College">
                                        <p>In that time he not only founded the B.E.S. but established five churches: St
                                            James, Thana; Christ Church, Surat; St Paul's, Kaira ( in Gujarat); St
                                            James, Baroda and St Mary's, Poona.In the Cathedral at Exeter in England,
                                            there is a tablet in the chancel with these words: This tablet was erected
                                            by The Dean and other members of the Chapter to the memory of George Barnes
                                            D.D. The first Archdeacon of Bombay, who after twelve years spent in India,
                                            was spared to revisit his native land and become Archdeacon of Barns table,
                                            and Rector of Sowton in this diocese. Active, earnest, humble and sincere,
                                            he won the affection of his friends and the esteem of all good men. He died
                                            29th, June AD. 1847.</p>
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