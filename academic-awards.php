<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .poster-img {
        width: 100px;
    }

    .award-section {
        margin-bottom: 30px;
    }

    .award-section h4 {
        font-weight: 600;
        margin-bottom: 15px;
        color: #007bff;
    }

    .award-section ul {
        padding-left: 20px;
    }

    .award-section ul li {
        list-style-type: disc;
        margin-bottom: 8px;
        line-height: 1.6;
    }

    .section-title {
        font-weight: 700;
        color: #343a40;
        margin-bottom: 15px;
    }

    .flow-step {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .highlight-box {
        background: #f8f9fa;
        border-left: 4px solid #007bff;
        padding: 15px;
        border-radius: 4px;
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
                        <h1 class="text-uppercase sub-header">Academic <span
                                class="main_header main_clr sf-heavy">Awards</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="container my-5">

            <div class="card shadow border-0">

                <div class="card-header bg-secondary text-white text-center">
                    <h2 class="mb-1">J K Baria Glorious Academic Awards 2026</h2>
                    <p class="mb-0">(Jointly Presented by Jitubhai Kalubhai Baria Foundation (R) & GINRA Foundation (R))
                    </p>
                </div>

                <div class="card-body">

                    <!-- About Awards -->
                    <div class="award-section">
                        <h4>About the Awards</h4>

                        <p>
                            The J K Baria Glorious Academic Awards 2026 are instituted as a mark of gratitude,
                            appreciation, and recognition toward outstanding educators, researchers,
                            academicians, and institutions for their remarkable contributions to research,
                            innovation, leadership, and academic excellence.
                        </p>

                        <p>
                            These prestigious awards are jointly presented by Jitubhai Kalubhai Baria Foundation (R)
                            and Glorious International Nursing Research and Academic (GINRA) Foundation (R),
                            both registered non-governmental organizations functioning under the Ministry of Corporate
                            Affairs,
                            Government of India.
                        </p>

                        <p>The foundations are actively engaged in:</p>

                        <ul>
                            <li>Promoting academic and research excellence</li>
                            <li>Identifying and nurturing hidden talents across disciplines</li>
                            <li>Supporting students, faculty, and researchers through academic initiatives</li>
                            <li>Encouraging innovation and evidence-based practices</li>
                            <li>Conducting social welfare and community development activities</li>
                        </ul>

                        <p>
                            Through these awards, the foundations aim to recognize deserving individuals and
                            institutions and provide them with a global platform for visibility and appreciation.
                        </p>
                    </div>

                    <!-- Call for Nominations -->
                    <div class="award-section">
                        <h4>Call for Nominations</h4>

                        <p>Applications and nominations are invited from:</p>

                        <ul>
                            <li>Faculty Members</li>
                            <li>Researchers and Scientists</li>
                            <li>Principals and Academic Leaders</li>
                            <li>Universities and Educational Institutions</li>
                            <li>Healthcare Professionals and Allied Disciplines</li>
                            <li>Scholars and Innovators from various professional fields worldwide</li>
                        </ul>
                    </div>

                    <!-- Academic Awards -->
                    <div class="award-section">
                        <h4>Glorious Pride Academic Awards</h4>

                        <p>
                            The awards celebrate academic excellence, leadership, innovation,
                            and lifelong dedication to education and research.
                        </p>

                        <!-- Lifetime Achievement -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="text-primary">Lifetime Achievement Award</h5>

                                <p>
                                    The prestigious Lifetime Achievement Award honors senior academicians and
                                    researchers with exceptional contributions to teaching, research,
                                    leadership, and academic development.
                                </p>

                                <strong>Eligibility Criteria:</strong>

                                <ul>
                                    <li>Minimum 20 years of academic/research experience</li>
                                    <li>Currently serving as Associate Professor/Professor</li>
                                    <li>Affiliation with University, Government, or Private Institution</li>
                                    <li>More than 25 publications in reputed journals</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Best Principal -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="text-primary">Best Principal Award</h5>

                                <p>
                                    This award recognizes visionary principals who have demonstrated excellence
                                    in academic leadership, institutional development, administration,
                                    and student empowerment.
                                </p>

                                <strong>Eligibility Criteria:</strong>

                                <ul>
                                    <li>Principal/Director of a recognized institution</li>
                                    <li>Proven contribution toward academic growth and institutional excellence</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Distinguished Professor -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="text-primary">Distinguished Professor Award</h5>

                                <p>
                                    The Distinguished Professor Award recognizes academicians with extraordinary
                                    contributions to research, innovation, publications, and academic mentorship.
                                </p>

                                <strong>Eligibility Criteria:</strong>

                                <ul>
                                    <li>Minimum 25 years of teaching/research experience</li>
                                    <li>Experience equivalent to Assistant/Associate/Professor</li>
                                    <li>More than 40 research publications in reputed journals</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Eminent Faculty -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="text-primary">Eminent Faculty Award</h5>

                                <p>
                                    This award honors faculty members with exceptional dedication to teaching,
                                    research, innovation, and professional contribution.
                                </p>

                                <strong>Eligibility Criteria:</strong>

                                <ul>
                                    <li>Minimum 25 years of academic/research experience</li>
                                    <li>Significant scholarly publications and achievements</li>
                                    <li>Strong contribution to academic excellence</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Best Women Faculty -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="text-primary">Best Women Faculty Award</h5>

                                <p>
                                    Dedicated to recognizing outstanding female academicians for their excellence
                                    in teaching, research, leadership, and academic service.
                                </p>

                                <strong>Eligibility Criteria:</strong>

                                <ul>
                                    <li>Female faculty member from any recognized institution</li>
                                    <li>Minimum 5 years of academic experience</li>
                                    <li>Contribution toward education and professional advancement</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Objectives -->
                    <div class="award-section">
                        <h4>Objectives of the Awards</h4>

                        <ul>
                            <li>To recognize hidden talents and academic excellence</li>
                            <li>To encourage quality research and innovation</li>
                            <li>To motivate educators and institutions toward excellence</li>
                            <li>To strengthen interdisciplinary collaboration and scholarly engagement</li>
                            <li>To build a globally connected research and academic community</li>
                        </ul>
                    </div>

                    <!-- Selection Process -->
                    <div class="award-section">
                        <h4>Selection Process</h4>

                        <p>All applications will be reviewed by an expert jury panel.</p>

                        <strong>Evaluation Criteria:</strong>

                        <ul>
                            <li>Research Quality</li>
                            <li>Innovation and Originality</li>
                            <li>Academic Contributions</li>
                            <li>Professional Excellence</li>
                            <li>Societal and Institutional Impact</li>
                        </ul>

                        <strong>Selection Procedure:</strong>

                        <div class="highlight-box mt-3">
                            <div class="flow-step">📝 Application Submission</div>
                            <div class="flow-step">⬇️</div>
                            <div class="flow-step">🔍 Evaluation by Expert Jury</div>
                            <div class="flow-step">⬇️</div>
                            <div class="flow-step">📧 Shortlisting & Email Confirmation</div>
                            <div class="flow-step">⬇️</div>
                            <div class="flow-step">💳 Payment of Award Contribution</div>
                            <div class="flow-step">⬇️</div>
                            <div class="flow-step">🏆 Dispatch of Award Kit</div>
                        </div>
                    </div>

                    <!-- Fees -->
                    <div class="award-section">
                        <h4>Contribution / Award Fees</h4>

                        <p>
                            The organizing foundations are non-profit organizations and utilize contributions
                            to support educational and social initiatives.
                        </p>

                        <strong>Contribution Details:</strong>

                        <ul>
                            <li>Individual Awards: ₹3,000 – ₹5,000</li>
                            <li>Contribution is applicable only for selected nominees.</li>
                        </ul>
                    </div>

                    <!-- Social Impact -->
                    <div class="award-section">
                        <h4>Social Impact Statement</h4>

                        <p>The contributions received through the awards are utilized for:</p>

                        <ul>
                            <li>Student support initiatives</li>
                            <li>Research promotion activities</li>
                            <li>Academic development programs</li>
                            <li>Educational awareness campaigns</li>
                            <li>Community welfare and social service activities</li>
                        </ul>

                        <p>This creates a meaningful and mutually beneficial opportunity where:</p>

                        <ul>
                            <li>Awardees receive recognition and visibility</li>
                            <li>Contributions support social and educational causes</li>
                        </ul>
                    </div>

                    <!-- Award Package -->
                    <div class="award-section">
                        <h4>Award Package Includes</h4>

                        <p>Selected awardees will receive:</p>

                        <ul>
                            <li>E-Certificate</li>
                            <li>Printed Certificate</li>
                            <li>Premium Award Plaque/Trophy</li>
                            <li>Official Recognition from the Foundations</li>
                        </ul>

                        <p>📦 Certificates and plaques will be dispatched via post.</p>
                    </div>

                    <!-- Disclaimer -->
                    <div class="award-section">
                        <h4>Disclaimer</h4>

                        <div class="alert alert-warning">
                            The J K Baria Glorious Academic Awards aim to promote academic excellence,
                            innovation, and research quality. All applications will be evaluated fairly
                            by an expert review panel based on merit, originality, and relevance.
                            <br><br>
                            The organizers reserve the right to accept or reject any application without assigning any
                            reason.
                            Any form of plagiarism, falsification, or academic misconduct will lead to immediate
                            disqualification.
                            The decision of the jury shall be final and binding.
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="award-section">
                        <h4>Contact & Communication</h4>

                        <p>
                            For nominations, collaborations, and queries, kindly contact the organizing team.
                        </p>

                        <p>
                            Together, let us celebrate excellence, inspire innovation,
                            and build a stronger global academic community.
                        </p>

                        <a href="https://forms.gle/aDFZzg5pGXjbfQx9A" target="_blank" class="btn btn-primary">
                            Apply Now
                        </a>
                    </div>
                    <div>
                        <img src="<?php echo $url;?>images/academic_awards.jpeg" style="width:300px;" />
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