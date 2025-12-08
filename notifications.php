<?php
$currentPage = 'notifications';
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
    <title>Barnes School & Junior College | Notifications</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
                                <div class="table-responsive">
                                    <table class="align-middle">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Notification</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Admission Test on 10th October 2025</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Join us for Open Day - 20th September 2025</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Updated Important Dates at a Glance</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Admission Test on 10th October 2025</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Join us for Open Day - 20th September 2025</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Updated Important Dates at a Glance</td>
                                                <td>
                                                    <a href="notification-details" target="_blank"
                                                        class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                        <i class="ph-duotone ph-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="..." class="mt-5">
                                    <ul class="pagination">
                                        <li class="page-item "><a href="#" class="page-link">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-current="page">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
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