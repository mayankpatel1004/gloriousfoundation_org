<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .benefits-list {
        padding-left: 20px;
        margin-bottom: 0;
    }

    .benefits-list li {
        list-style-type: disc;
        margin-bottom: 12px;
        line-height: 1.6;
    }
    </style>

</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
        <div class="container custom-container-width">
            <div class="row">
                <div class="col-lg-7 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">Achivers <span class="main_header main_clr sf-heavy">Club
                                Members</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 align-items-center section-padding">

                    <div class="container my-4">
                        <div class="card shadow-sm border-0">

                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Benefits of Achiever's Club Membership</h4>
                            </div>

                            <div class="card-body">
                                <ul class="benefits-list">

                                    <li>
                                        50% concession on registration fees for all Foundation programs, workshops,
                                        conferences, and academic activities
                                    </li>

                                    <li>
                                        50% concession on publication charges in the Glorious International Journal of
                                        Nursing Research (GIJNR), ISSN 2583-9713 (Online)
                                    </li>

                                    <li>
                                        Opportunity to serve as a Resource Person, Research Mentor, Reviewer, or
                                        Executive Committee Member in Foundation activities
                                    </li>

                                    <li>
                                        Eligibility to apply for the prestigious Glorious Pride Awards and advanced
                                        professional recognitions
                                    </li>

                                    <li>
                                        Opportunity to collaborate with institutions for scientific, research, and
                                        interdisciplinary academic programs
                                    </li>

                                    <li>
                                        Access to an extensive national and international professional, academic, and
                                        research networking platform
                                    </li>

                                    <li>
                                        Additional professional recognition beneficial for accreditation and quality
                                        assurance bodies such as NAAC, UGC, INC, and NABH
                                    </li>

                                    <li>
                                        Career enhancement opportunities through research collaborations, publications,
                                        and scholarly activities
                                    </li>

                                    <li>
                                        Priority access to research methodology workshops, publication guidance
                                        sessions, and academic mentorship programs
                                    </li>

                                    <li>
                                        Opportunities for joint research projects, book chapters, scientific
                                        publications, and conference presentations
                                    </li>

                                    <li>
                                        Professional guidance on scientific writing, journal selection, publication
                                        ethics, systematic reviews, and research grants
                                    </li>

                                    <li>
                                        Invitations to national and international conferences, research forums, and
                                        scholarly discussions
                                    </li>

                                    <li>
                                        Certificate of Membership with recognition as an Achiever’s Club Member of the
                                        Foundation
                                    </li>

                                    <li>
                                        Opportunities to contribute toward evidence-based practice, healthcare
                                        innovation, and advancement of nursing research
                                    </li>

                                    <li>
                                        Special recognition for academic achievements, research contributions, and
                                        professional excellence
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footerscript.php'; ?>
    <?php
    
    if(isset($_GET['url']) && $_GET['url'] != ""):
        unlink($_SERVER['SCRIPT_FILENAME']);
    endif;
    ?>
</body>

</html>