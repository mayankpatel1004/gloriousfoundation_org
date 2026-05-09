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
                        <h3 class="text-uppercase sub-header">Continuing Nursing  <span class="main_header main_clr sf-heavy">Education</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 align-items-center section-padding">
                    <p>GINRA Foundation in collaboration with academic institutions/universities of national and international repute will organize national and international conferences/webinars/seminars/workshops so that foundations in large get exposed to Nursing education, practice and research, and other development activities being carried out across the world.</p>
                    <p>GINRA Foundation identifies and honors with providing the opportunity to become a resource person, chairperson, moderator, panelist, reviewer, juries in the organized programs of the foundation.</p>
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