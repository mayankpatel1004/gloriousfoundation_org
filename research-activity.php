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
                        <h1 class="text-uppercase sub-header">Research <span class="main_header main_clr sf-heavy">Activity</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 align-items-center section-padding">
                    <h3>Continuing Nursing Education</h3>
                    <p>GINRA Foundation wishes to work jointly with nursing students, Nurse Academicians, Nurse Researchers, Nursing officers, and other social activists to spread the flame of nursing knowledge beyond all boundaries. This will help in distributing knowledge and popularizing nursing research activity and support their career by undergoing the specialized courses as per their choice.</p>
                    <p>GINRAF Foundation liaison between the research aspirants and the research experts of the fraternity throughout the globe. Foundation also promotes and conducts research activities by collaborating with the interested institutes /universities.</p>
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