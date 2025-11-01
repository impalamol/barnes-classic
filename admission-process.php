<?php
$currentPage = 'admission-process';
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
    <title>Barnes School & Junior College | Admission Process</title>
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
                                <li class="breadcrumb-item"><a href="about">Admissions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admission Process</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="admission admissionProcess">
            <div class="container">
                <div class="row">
                    <div class="wrapper flex-wrap flex-lg-nowrap">
                        <div class="contentCard">
                            <div class="content">
                                <div class="pgHeader">
                                    <div class="pgTitle">
                                        <h6 class="pgSection">Institution Admission Process</h6>
                                        <h2>Standard Operating Procedure (SOP) for Admissions</h2>
                                    </div>
                                </div>
                                <ul class="admissionProcessList">
                                    <li>
                                        <h4>Inquiry Process </h4>Interested parents or
                                        guardians can inquire about the admission process by visiting the admissions
                                        office or contacting the admissions team via phone or email.
                                    </li>
                                    <li>
                                        <h4>Information Provision </h4>Comprehensive
                                        information is provided regarding the institution's operations, fee structure,
                                        required documentation, and other relevant details.
                                    </li>
                                    <li>
                                        <h4>Application Procedure </h4>Visitors to the
                                        admissions office are required to fill out a profile form with personal and
                                        student information. If more time is needed to decide, a follow-up is conducted
                                        within 4-5 days using the contact information provided.
                                    </li>
                                    <li>
                                        <h4>Phone and Messaging Inquiries </h4>For inquiries
                                        made via phone or messaging apps, the admissions team provides a summary of the
                                        admission process. A visit to the campus is encouraged for further
                                        clarification. Relevant materials such as the fee structure, school calendar,
                                        and brochure are shared digitally.
                                    </li>
                                    <li>
                                        <h4>Campus and Boarding Tours </h4>
                                        <p> For boarding-related inquiries, a guided tour of the boarding facilities and
                                            school campus is
                                            arranged.</p>
                                    </li>
                                    <li>
                                        <h4>Entrance Assessment </h4>
                                        <p> An entrance test is
                                            conducted to assess the student's basic academic understanding and
                                            readiness.</p>
                                    </li>
                                    <li>
                                        <h4>Results and Feedback </h4>
                                        <p>Test results are reviewed and shared with the parents, along with
                                            recommendations based on the student's performance.</p>
                                        performance.
                                    </li>
                                    <li>
                                        <h4>Admission Confirmation </h4>
                                        <p>Once the decision to
                                            enroll is made, the necessary documents and forms are collected and a file
                                            is
                                            prepared. Parents then proceed to the accounts department to pay the first
                                            installment of the fees.</p>
                                    </li>
                                    <li>
                                        <h4>Document Verification </h4>
                                        <p>After payment, the
                                            admissions team verifies all submitted documents to ensure compliance with
                                            admission requirements.</p>
                                    </li>
                                    <li>
                                        <h4>Final Admission Process </h4>
                                        Upon successful admission:
                                        <ol>
                                            <li><strong>Day Scholars</strong> receive a slip indicating details such as class, division,
                                                house, and class teacher's name, and proceed to their assigned class.
                                            </li>
                                            <li><strong>Boarding Students</strong> receive additional details regarding their dormitory
                                                and boarding in-charge before moving to their assigned boarding
                                                facility.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        <h4>Access Control </h4>No student is permitted to
                                        enter classrooms or boarding areas without the official admission slip. All
                                        staff, including teachers and boarding personnel, must strictly enforce this
                                        policy.
                                    </li>
                                </ul>
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