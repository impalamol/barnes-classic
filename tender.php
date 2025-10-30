<?php
$currentPage = 'tender';
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
    <title>Barnes School & Junior College | Tender</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Tender</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="tender">
            <div class="container">
                <div class="row">
                    <div class="pgHeader">
                        <div class="pgTitle">
                            <h6 class="pgSection">Do Business with us</h6>
                            <h2>Request For Proposal</h2>
                            <p>We invite proposals from partners who share our commitment to excellence and integrity.
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <td>Sr. No.</td>
                                    <td>Undertaking Project</td>
                                    <td>Published On</td>
                                    <td>Submit Application</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Construction of Compound Wall</td>
                                    <td>30/10/2025</td>
                                    <td><a href="" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#tenderForm">Apply Now
                                            <i class="ph-duotone ph-arrow-bend-right-up"></i></a></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Construction of internal asphalt road</td>
                                    <td>29/10/2025</td>
                                    <td><a href="" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#tenderForm">Apply Now
                                            <i class="ph-duotone ph-arrow-bend-right-up"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tenderNote">
                        <h4>Note:</h4>
                        <p>Vendors who are experienced and capable of undertaking above projects may contact the school
                            at the below mentioned email / number between 0900 hr to 1500 hrs for carrying out pre -
                            tender discussions. The last date to respond to this EOI is 1 0th March 2025. Reputed
                            contractors with record of similar projects done in the past and having turnover of at least
                            10 Cr (for construction activity) in the past FN may apply for registration at the school.
                        </p>
                        <ul>
                            <li>All proposals must be submitted by the specified deadline.</li>
                            <li>Ensure that all required documents are included with your submission.</li>
                            <li>For any queries, please contact our procurement department at <a
                                    href="mailto:tenders@barneschool.in">tenders@barneschool.in</a>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="tenderForm" tabindex="-1" aria-labelledby="tenderFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tenderFormLabel">Request For Proposal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <form action="submit_tender.php" method="POST">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>