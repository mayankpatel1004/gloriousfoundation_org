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
                        <h1 class="text-uppercase sub-header">Social <span class="main_header main_clr sf-heavy">Services</span></h1>
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
                    <p>A variety of Social service programs are designed to serve the needy. The most common types of programs provide benefits to the elderly, the sick or disabled, dependent survivors, Antenatal mothers, Under-five children, People with chronic illness. We offer various social services camps like,</p>
                    <ul>
                    <li>Blood Donation Camps</li>
                    <li>Organ donation awareness camps</li>
                    <li>Anaemia Detection camps</li>
                    </ul>
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