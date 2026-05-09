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
                
                <h3>Continuing Nursing Education (CNE)</h3>
                <p>GINRA foundation offers/awards fellowships to scholars who are at various levels in their profession. These fellowships are offers/awards to the members of the Foundation.</p>

                <p>Various fellowships bands are:</p>

                <p>Fellowship of GINRAF Senior Nursing Research (FGSNR): are awarded to eminent nursing professionals above the age of 60 years, who have a Master's degree from a recognized university with a first-class and have vast professional experience, guided/evaluated several Master's Thesis, conducted quality research work, publications and papers in professional journals.</p>
                <p>Fellowship of GINRAF Post-Doctoral Nursing Research (FGPDNR): are awarded to eminent faculty who have completed their Ph.D. in Nursing from a recognized university, who have shown significant competence in research work at the time of their application.</p>
                <p>Fellowship of GINRAF Doctoral Nursing Research (FGDNR): are open to doctoral students, preferably young researchers, who have a Master's degree from a recognized university with a first-class and are registered for a doctoral degree in Nursing under any reputed university.</p>
                <p>Fellowship of Glorious International Nursing Research and Academic Foundation (FGINRAF): are open to any working Nursing professional with a minimum degree qualification, who holds valid membership of GINRAF. They shall join and work on the scientific and technical committees of the foundation and obtain professional growth and development. On completion of the required assignments (Research, Publication, participation, and conduction of CNE/workshop/conferences and other technical and scientific) candidate shall be honored with the fellowship.</p>

                <p>Eligibility for FGINRAF nomination:</p>
                <ul>
                    <li>Member of GINRAF.</li>
                    <li>Working as a faculty/Staff in a reputed institution.</li>
                    <li>Holds Degree qualification in Nursing from the reputed institution.</li>
                    <li>Determination to contribute for the advancement in nursing.</li>
                    <li>Possess good name and fame in the community, sincere, responsible, confident, positive attitude towards joining/ assisting with all GINRAF activities.</li>
                    <li>Curriculum vitae and recent passport size photo and copy of all academic documents are essential to submit.</li>
                    <li>Download the fellowship application:</li>
                </ul>

                <p>Benefits of the Fellowship:</p>

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


                <p>The fellowship Evaluation Process:</p>

                <ul>
                    <li>Application for the fellowship can be submitted online by filling the application form and uploading the required documents.</li>
                    <li>Application for the fellowship can also be submitted by sending a hard copy of the application form along with the required documents to the foundation's address.</li>
                    <li>The selected candidate's list will be announced on the website.</li>
                </ul>


                <p>Fellowship Fee:</p>

                <p>The foundation has many proposals to carry out for the welfare of the Nursing fraternity, however, it doesn't have any income source. Therefore, the foundation needs to defray its maintenance and activities costs by collecting Fellowship fees.</p>
                <p>The foundation has many proposals to carry out for the welfare of the Nursing fraternity, however, it doesn't have any income source. Therefore, the foundation needs to defray its maintenance and activities costs by collecting Fellowship fees.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Fellowship Type</th>
                            <th>Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GINRAF Senior Nursing Research Fellowship (FGSNR)</td>
                            <td>Rs.25,000/- (In INR for Indian Members), $ 500 (in USD for Foreign Members)</td>
                        </tr>
                        <tr>
                            <td>GINRAF Post-Doctoral Nursing research Fellowship (FGPDNR)</td>
                            <td>Rs.25,000/- (In INR for Indian Members), $ 500 (in USD for Foreign Members)</td>
                        </tr>
                        <tr>
                            <td>GINRAF Doctoral Nursing Research Fellowship (FGDNR)</td>
                            <td>Rs.25,000/- (In INR for Indian Members), $ 500 (in USD for Foreign Members)</td>
                        </tr>
                        <tr>
                            <td>GINRAF Nursing Research Fellowship (FGNR)</td>
                            <td>Rs.25,000/- (In INR for Indian Members), $ 500 (in USD for Foreign Members)</td>
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