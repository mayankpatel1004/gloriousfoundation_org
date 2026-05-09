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
                        <h1 class="text-uppercase sub-header">Refunds and <span class="main_header main_clr sf-heavy">Cancellation</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 align-items-center section-padding">
                    <ul>
                        <li>The fee once paid to types of service is not refundable in any case.</li>
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