<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .section-title {
        color: #007bff;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .custom-list {
        padding-left: 20px;
    }

    .custom-list li {
        list-style-type: disc;
        margin-bottom: 8px;
        line-height: 1.6;
    }

    .fellowship-card {
        margin-bottom: 25px;
    }

    .process-box {
        background: #f8f9fa;
        border-left: 4px solid #007bff;
        padding: 15px;
        border-radius: 4px;
    }

    .process-step {
        font-size: 17px;
        margin-bottom: 8px;
    }

    .table th {
        background: #007bff;
        color: #fff;
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
                        <h1 class="text-uppercase sub-header">Enrolled</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2 container">
    Content coming soon......
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