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
                        <h1 class="text-uppercase sub-header">Fellowships</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 align-items-center section-padding">

                <p><b>Fellowship of GINRAF Senior Nursing Research (FGSNR):</b> are awarded to eminent nursing professionals above the age of 60 years, who have a Master's degree from a recognized university with a first-class and have vast professional experience, guided/evaluated several Master's Thesis, conducted quality research work, publications and papers in professional journals.</p>
                
                <p><b>Fellowship of GINRAF Doctoral Nursing Research (FGDNR):</b> are open to doctoral students, preferably young researchers, who have a Master's degree from a recognized university with a first-class and are registered for a doctoral degree in Nursing under any reputed university.</p>
                <p><b>Fellowship of Glorious International Nursing Research and Academic Foundation (FGINRAF): </b>are open to any working Nursing professional with a minimum degree qualification, who holds valid membership of GINRAF. They shall join and work on the scientific and technical committees of the foundation and obtain professional growth and development. On completion of the required assignments (Research, Publication, participation, and conduction of CNE/workshop/conferences and other technical and scientific) candidate shall be honored with the fellowship.</p>

                <p><b>Eligibility for FGINRAF nomination:</b></p>
                <ul>
                    <li>Member of GINRAF.</li>
                    <li>Working as a faculty/Staff in a reputed institution.</li>
                    <li>Holds Degree qualification in Nursing from the reputed institution.</li>
                    <li>Determination to contribute for the advancement in nursing.</li>
                    <li>Possess good name and fame in the community, sincere, responsible, confident, positive attitude towards joining/ assisting with all GINRAF activities.</li>
                    <li>Curriculum vitae and recent passport size photo and copy of all academic documents are essential to submit.</li>
                    <li>Download the fellowship application:</li>
                </ul>

                <p><b>Benefits of the Fellowship:</b></p>

                <ul>
                    <li>Fellow Members will be given a prestigious certificate regarding the fellowship, essential for one's academic enhancement.</li>
                    <li>Privilege to write the title of the fellowship (FGSNR, FGPDNR, FGDNR, FGINRAF) as the suffix to the name</li>
                    <li>Register any programs conducted by the foundation with a discounted/exempted price.</li>
                    <li>Fellow Members may be appointed as speakers, keynote speakers, organizing members, chairpersons for the scientific sessions, or judges for poster presentations of International Conferences.</li>
                    <li>Set up a local/chapter of GINRAF in your country/state and become chapter President, chapter Secretary.</li>
                    <li>Fellow Members may be appointed as speakers, keynote speakers, organizing members, chairpersons for the scientific sessions, or judges for poster presentations of International Conferences.</li>
                    <li>Fellow Members will also be privileged to host the International Conference at their own place/country.</li>
                    <li>Fellow Members may become a Member of Editorial Board, reviewer of any one of GINRAF International Peer Reviewed Journal.</li>
                    <li>Fellow Members will be considered for GINRAF International Award.</li>
                </ul>


                <p><b>The fellowship Evaluation Process:</b></p>

                <ul>
                    <li>Application for the fellowship can be submitted online by filling the application form and uploading the required documents.</li>
                    <li>Application for the fellowship can also be submitted by sending a hard copy of the application form along with the required documents to the foundation's address.</li>
                    <li>The selected candidate's list will be announced on the website.</li>
                </ul>


                <p><b>Fellowship Fee:</b></p>

                <p>The foundation has many proposals to carry out for the welfare of the Nursing fraternity, however, it doesn't have any income source. Therefore, the foundation needs to defray its maintenance and activities costs by collecting Fellowship fees.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Fees:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Rs.25,000/- (In INR for Indian Members), $ 500 (in USD for Foreign Members)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <img src="<?php echo $url;?>images/fellowship.jpeg" style="width:300px;" />
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