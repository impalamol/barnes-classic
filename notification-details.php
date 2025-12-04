<?php
$currentPage = 'notification-details';
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
    <title>Barnes School & Junior College | Notification Details</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Notification Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="notifications">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Notifications</h2>
                                    </div>
                                </div>
                                <h3>Updated Important Dates at a Glance Admission</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non vero explicabo ducimus
                                    similique alias dolorem, aspernatur inventore. Optio laudantium aperiam animi magni,
                                    quae, debitis fuga quos quaerat placeat reiciendis perspiciatis.</p>
                                <p>Ipsam voluptates voluptatum dignissimos atque molestiae quibusdam sint ducimus, aut
                                    eligendi fugiat? Blanditiis tempora, nemo et delectus cum veniam iusto, libero vero
                                    dicta commodi id voluptate, consequatur maxime ad. Modi.</p>
                                <p>Delectus, nobis dolorum nam iste pariatur temporibus officia illo nulla dolore
                                    blanditiis voluptatem ea quibusdam quis eius amet dolor? Inventore repellat esse a
                                    delectus beatae magni alias deserunt commodi ducimus.</p>
                                <p>Aspernatur illum ipsum optio quod quasi debitis vitae eos qui, accusamus, quae hic
                                    reprehenderit velit amet dolores molestiae deserunt rem temporibus voluptatem
                                    eveniet esse, eaque aliquam nam. Obcaecati, quos fugiat.</p>
                                <p>Itaque, repudiandae quod quidem tenetur quisquam architecto alias quis accusantium
                                    placeat voluptatibus tempora quos dolorem numquam vero ipsa error dolorum, quasi
                                    pariatur voluptatum nobis obcaecati eligendi? Sunt iusto quia explicabo.</p>
                                <p>Totam voluptas accusantium magnam omnis nihil voluptate fugiat consectetur laboriosam
                                    quis molestias ex hic earum expedita blanditiis, nisi amet iste. Illum consequatur
                                    voluptatem sunt, ea repellat exercitationem enim veritatis doloribus.</p>
                            </div>
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Other Notifications</h2>
                                    </div>
                                </div>
                                <ul class="checkList">
                                    <li><a href="notification-details"> Admission Test on 10th October 2025</a></li>
                                    <li><a href="notification-details"> Join us for Open Day - 20th September 2025</a>
                                    </li>
                                    <li><a href="notification-details"> Updated Important Dates at a Glance</a></li>
                                    <li><a href="notification-details"> Admission Test on 10th October 2025</a></li>
                                    <li><a href="notification-details"> Join us for Open Day - 20th September 2025</a>
                                    </li>
                                    <li><a href="notification-details"> Updated Important Dates at a Glance</a></li>
                                </ul>
                                <p><a href="notifications" class="btn btn-primary">View All Notifications <i class="ph-duotone ph-arrow-up-right"></i></a></p>
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