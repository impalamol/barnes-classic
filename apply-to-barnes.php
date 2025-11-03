<?php
$currentPage = 'apply-to-barnes';
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
    <title>Barnes School & Junior College | Apply to Barnes</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Apply to Barnes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="barnesApply">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h2>Apply to Barnes</h2>
                                    </div>
                                </div>
                                <form action="" method="post" class="mb-3">
                                    <div class="formGroup mb-3">
                                        <label for="studentName" class="form-label">Student name</label>
                                        <input type="text" id="studentName" name="studentName" class="form-control"
                                            placeholder="Enter student name" required />
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="parentName" class="form-label">Parent name</label>
                                        <input type="text" id="parentName" name="parentName" class="form-control"
                                            placeholder="Enter parent name" required />
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Enter your email" required />
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="tel" id="contact" name="contact" class="form-control"
                                            placeholder="Enter contact number" />
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="boarding_type" class="form-label">Boarding / Day scholar</label>
                                        <select id="boarding_type" name="boardingType" class="form-select">
                                            <option value="">Select option</option>
                                            <option value="boarding">Boarding</option>
                                            <option value="day_scholar">Day scholar</option>
                                        </select>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="note" class="form-label">Note</label>
                                        <textarea id="note" name="note" class="form-control" rows="4"
                                            placeholder="Additional notes"></textarea>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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