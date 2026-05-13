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
                        <h1 class="text-uppercase sub-header">About <span class="main_header main_clr sf-heavy">The
                                Foundation</span></h1>
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
                    <p>Glorious International Nursing Research and Academic (GINRA) Foundation ® is one of the international, non-profitable professional body, registered under the ministry of corporate affairs, Government of India under section 8 of the Companies Act, 2013. GINRA Foundation is a paramount body that acts to bring revolution and sustainable development in the field of Nursing.</p>
                    <p>A team of Eminent Teachers, educationists, and Philanthropists have collectively established GINRA Foundation in 2021 with the aim to promote Nursing research and academically support the Nursing fraternity by collaborating with eminent professionals globally. Foundation also provides a platform for professional leaders, universities, organizations, and associations to connect with each other with a mission to develop the profession. GINRA foundation also engages in various social service activities toward unity development.</p>
                    <p>GINRA Foundation carries out various activities related to the development of academic excellence through webinars, CNEs, Seminars, Conferences, and research grants for suitable research proposals.  The foundation intended to publish journals, E-Books, E-Magazines, and E-Contents. Foundation motivates the Nurse Researchers, Academicians, and Nurse practitioners by awarding degrees/Short term courses, and motivates them with awards and recognitions. It is also involved in various Social welfare activities.</p>
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