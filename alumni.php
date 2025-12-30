<?php
$currentPage = 'alumni';
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
    <title>Barnes School & Junior College | Alumni</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="alumni">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader full">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">Barnes Alumni</h6>
                                        <h2>Forever a Part of Barnes</h2>
                                        <p>Celebrating the journeys, milestones, and lasting connections of those who
                                            once walked the halls of Barnes.</p>
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#alumniRegisterModal"
                                        class="btn btn-primary"><i class="ph-duotone ph-user-plus"></i> Register As
                                        Alumni</a>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#alumniModal"
                                            class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/alumni/anil-tipnis.jpg"
                                                    alt="Anil Yashwant Tipnis">
                                                <button class="videoBtn">
                                                    <i class="ph-duotone ph-play"></i>
                                                </button>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Anil Yashwant Tipnis</h3>
                                                <p>Air Chief Marshal</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#alumniModal"
                                            class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/alumni/karambir-singh.jpg"
                                                    alt="Admiral Karambir Singh">
                                                <button class="videoBtn">
                                                    <i class="ph-duotone ph-play"></i>
                                                </button>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Admiral Karambir Singh</h3>
                                                <p>Chief of Naval staff</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 col-xl-3 col-xxl-3 mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#alumniModal"
                                            class="card avatarCard">
                                            <figure>
                                                <img src="assets/media/alumni/almira-patel.jpg" alt="Almitra Patel">
                                                <button class="videoBtn">
                                                    <i class="ph-duotone ph-play"></i>
                                                </button>
                                            </figure>
                                            <div class="cardContent">
                                                <h3>Almitra Patel</h3>
                                                <p>First Indian woman Engineer</p>
                                            </div>
                                        </a>
                                    </div>
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
                    </div>
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

    <div class="modal fade" id="alumniRegisterModal" tabindex="-1" aria-labelledby="alumniRegisterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alumniRegisterModalLabel">Register As Alumni</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <form class="row">

                            <!-- Personal Details Heading -->
                            <div class="col-12 mb-4">
                                <h5>Personal Details</h5>
                            </div>

                            <!-- Alumni Name -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Alumni Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter full name" required>
                                </div>
                            </div>

                            <!-- Passout Year -->
                            <div class="col-md-3 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Passout Year <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="YYYY" required>
                                </div>
                            </div>

                            <!-- Years in Barnes -->
                            <div class="col-md-3 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">No. of Years in Barnes</label>
                                    <input type="number" class="form-control" placeholder="Optional">
                                </div>
                            </div>

                            <!-- Present Designation -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Present Designation & Location</label>
                                    <input type="text" class="form-control" placeholder="Designation, City">
                                </div>
                            </div>

                            <!-- Profession -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Profession / Occupation</label>
                                    <input type="text" class="form-control" placeholder="Profession">
                                </div>
                            </div>
                            <hr>
                            <!-- School Memories Heading -->
                            <div class="col-12 mb-4">
                                <h5>School Memories</h5>
                            </div>
                            <!-- House Name -->
                            <div class="col-md-4 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Your House Name</label>
                                    <select class="form-select">
                                        <option value="">Select House</option>
                                        <option value="Green">Green</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Red">Red</option>
                                        <option value="Yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Boarder / Day Scholar -->
                            <div class="col-md-4 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Boarder / Day-Scholar</label>
                                    <select class="form-select">
                                        <option value="">Select</option>
                                        <option value="Boarder">Boarder</option>
                                        <option value="Day-Scholar">Day-Scholar</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Favourite Teacher -->
                            <div class="col-md-4 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Favourite Teacher at Barnes</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Best Friends -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Best Friend / Friends at Barnes</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Favourite Place -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Favourite Place at Barnes</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- School Memories -->
                            <div class="col-12 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">School Memories</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <!-- Unforgettable Memory -->
                            <div class="col-12 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">One Unforgettable Memory at Barnes</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <!-- Friends Contact -->
                            <div class="col-12 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">
                                        Barnes Friends Contact Details (Optional)
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Name, Phone, Email"></textarea>
                                </div>
                            </div>

                            <!-- Upload Photo -->
                            <div class="col-md-6 mb-3">
                                <div class="formGroup">
                                    <label class="form-label">Upload Recent / School Photograph</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <!-- School Memories Heading -->
                            <div class="col-12 mb-4">
                                <h5>Consent</h5>
                            </div>
                            <!-- Consent -->
                            <div class="col-12 mb-4">
                                <div class="formGroup form-check">
                                    <input type="checkbox" class="form-check-input" id="consent">
                                    <label class="form-check-label" for="consent">
                                        I agree that my information can be used by Barnes School & Junior College
                                        for alumni communication and event updates.
                                    </label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">
                                    Submit Registration
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>