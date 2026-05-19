<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .poster-img {
        width: 100px;
    }

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

    .award-card {
        margin-bottom: 20px;
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
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
        <div class="container custom-container-width">
            <div class="row">
                <div class="col-lg-7 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">Research <span
                                class="main_header main_clr sf-heavy">Awards</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="container my-5">

                <div class="card shadow border-0">

                    <!-- Header -->
                    <div class="card-header bg-secondary text-white text-center">
                        <h2 class="mb-2">J K BARIA GLORIOUS RESEARCH AWARDS 2026</h2>

                        <p class="mb-0">
                            (Jointly Presented by Jitubhai Kalubhai Baria Foundation (R)
                            & GINRA Foundation (R))
                        </p>
                    </div>

                    <div class="card-body">

                        <!-- About -->
                        <div class="mb-5">
                            <h4 class="section-title">About the Awards</h4>

                            <p>
                                The <strong>J K Baria Glorious Research Awards</strong> are instituted
                                as a mark of humble gratitude and recognition towards researchers,
                                educators, and institutions for their outstanding contributions
                                to research, innovation, and academic excellence.
                            </p>

                            <p>
                                These awards are jointly offered by
                                <strong>Jitubhai Kalubhai Baria Foundation (R)</strong> and
                                <strong>GINRA Foundation (R)</strong> — both registered
                                non-governmental organizations working under the Ministry
                                of Corporate Affairs, Government of India.
                            </p>

                            <p>These foundations are actively engaged in:</p>

                            <ul class="custom-list">
                                <li>Promoting education and research excellence</li>
                                <li>Identifying and nurturing hidden talents across disciplines</li>
                                <li>Supporting students and researchers through academic and social initiatives</li>
                                <li>Contributing to community development and social welfare activities</li>
                            </ul>

                            <p>
                                Through these awards, the foundations aim to identify deserving
                                individuals and organizations and bring their contributions into
                                the limelight at a global platform.
                            </p>
                        </div>

                        <!-- Call for Nominations -->
                        <div class="mb-5">
                            <h4 class="section-title">Call for Nominations</h4>

                            <p>
                                We warmly invite students, researchers, faculty members,
                                professionals, and institutions worldwide to submit nominations
                                for the prestigious awards.
                            </p>
                        </div>

                        <!-- Award Categories -->
                        <div class="mb-5">
                            <h4 class="section-title">Award Categories & Eligibility Criteria</h4>

                            <!-- Award 1 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">1. Award of Excellence in Research</h5>

                                    <ul class="custom-list">
                                        <li>Minimum 5 publications in reputed indexed journals</li>
                                        <li>Demonstrated contribution to scientific research</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 2 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">2. Best Women Researcher / Scientist Award</h5>

                                    <ul class="custom-list">
                                        <li>Female professionals from academia, industry, or NGOs</li>
                                        <li>Minimum 5 years of research experience</li>
                                        <li>Strong record of publications, patents, fellowships, or innovations</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 3 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">3. Best Young Researcher / Scientist Award</h5>

                                    <ul class="custom-list">
                                        <li>Maximum age: 35 years</li>
                                        <li>Minimum 3 years of research experience</li>
                                        <li>Publications and innovative research contributions required</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 4 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">4. Best Researcher Award</h5>

                                    <ul class="custom-list">
                                        <li>Minimum 5 years of research experience</li>
                                        <li>Affiliation with universities, research institutions, industries, or NGOs
                                        </li>
                                        <li>Proven record of publications, patents, or research impact</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 5 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">5. Best Research Scholar Award</h5>

                                    <ul class="custom-list">
                                        <li>Open to Ph.D. scholars / research associates</li>
                                        <li>Must submit proof (Ph.D. registration letter from university)</li>
                                        <li>Evaluation based on thesis quality and research contribution</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 6 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">6. Excellent Research Organisation Award</h5>

                                    <ul class="custom-list">
                                        <li>Open to institutions/organizations</li>
                                        <li>Commitment to quality research and innovation</li>
                                        <li>Focus on training and skill development</li>
                                        <li>Contribution to the research ecosystem and society</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 7 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">7. Best Ph.D. Guide Award</h5>

                                    <ul class="custom-list">
                                        <li>Recognized supervisors from universities across disciplines</li>
                                        <li>Based on mentoring excellence and research guidance</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 8 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">8. Best PG Dissertation Award</h5>

                                    <ul class="custom-list">
                                        <li>For outstanding postgraduate research work</li>
                                        <li>Evaluation based on originality, methodology, and impact</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 9 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">9. Best UG Research Project Award</h5>

                                    <ul class="custom-list">
                                        <li>For exceptional undergraduate research projects</li>
                                        <li>Focus on innovation, practical application, and creativity</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Award 10 -->
                            <div class="card award-card">
                                <div class="card-body">
                                    <h5 class="text-primary">10. Emerging Research Leader Award</h5>

                                    <ul class="custom-list">
                                        <li>For exceptional young researchers</li>
                                        <li>Focus on innovation, practical application, and creativity</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Selection Process -->
                        <div class="mb-5">
                            <h4 class="section-title">Selection Process</h4>

                            <ul class="custom-list">
                                <li>All applications will be reviewed by a panel of expert members</li>
                                <li>Evaluation is based on research quality, innovation, originality, academic, and
                                    societal impact</li>
                                <li>Shortlisted candidates will be notified via email</li>
                            </ul>
                        </div>

                        <!-- Fees -->
                        <div class="mb-5">
                            <h4 class="section-title">Contribution / Award Fees</h4>

                            <p>
                                To support the initiatives and social activities of the foundations:
                            </p>

                            <ul class="custom-list">
                                <li>Individual Awards: ₹3,000 – ₹5,000</li>
                                <li>Contributions are collected only from selected nominees</li>
                            </ul>
                        </div>

                        <!-- Social Impact -->
                        <div class="mb-5">
                            <h4 class="section-title">Social Impact Statement</h4>

                            <p>
                                The organising foundations operate as non-profit organisations
                                and do not have independent revenue sources.
                            </p>

                            <p>The contributions received through these awards are utilised for:</p>

                            <ul class="custom-list">
                                <li>Student support initiatives</li>
                                <li>Educational and research promotion activities</li>
                                <li>Social welfare and community development programs</li>
                            </ul>

                            <p>This creates a mutually beneficial (win–win) opportunity:</p>

                            <ul class="custom-list">
                                <li>Awardees gain recognition and visibility</li>
                                <li>Contributions directly support meaningful social causes</li>
                            </ul>

                            <p>
                                The award consists of an E-certificate, a certificate,
                                and a plaque, which will be sent by post.
                            </p>
                        </div>

                        <!-- Vision -->
                        <div class="mb-5">
                            <h4 class="section-title">Vision</h4>

                            <div class="alert alert-info">
                                To encourage, recognize, and celebrate hidden talents in
                                research and academia, and to build a stronger, more impactful
                                global research community.
                            </div>
                        </div>

                        <!-- Disclaimer -->
                        <div class="mb-5">
                            <h4 class="section-title">Disclaimer</h4>

                            <div class="alert alert-warning">
                                The J K Baria Glorious Research Awards aim to promote academic
                                excellence and innovation. All entries will be assessed by
                                an expert review panel based on merit, originality, and relevance.
                                <br><br>

                                The organizers reserve the right to accept or reject any application
                                without assigning a reason. Any form of academic misconduct,
                                including plagiarism or falsification of data, will result in
                                immediate disqualification.
                                <br><br>

                                The decision of the jury shall be final and binding.
                                The organizers hold no liability for any disputes arising
                                from the selection process.
                            </div>
                        </div>

                        <!-- Application Process -->
                        <div class="mb-5">
                            <h4 class="section-title">Application & Selection Process</h4>

                            <div class="process-box">
                                <div class="process-step">📝 Apply via Google Form</div>
                                <div class="process-step">⬇️</div>

                                <div class="process-step">🔍 Evaluation by Expert Jury</div>
                                <div class="process-step">⬇️</div>

                                <div class="process-step">📧 Shortlisting & Email Confirmation</div>
                                <div class="process-step">⬇️</div>

                                <div class="process-step">💳 Payment of Award Contribution</div>
                                <div class="process-step">⬇️</div>

                                <div class="process-step">
                                    🏆 Award Dispatch
                                    (E-Certificate + Certificate + Plaque by Post)
                                </div>
                            </div>
                        </div>

                        <!-- Apply Button -->
                        <div class="text-center">
                            <p class="font-italic mb-4">
                                “Celebrating Talent. Inspiring Innovation. Shaping Global Research.”
                            </p>

                            <a href="https://forms.gle/fAUeE9FFu7BgparGA" target="_blank"
                                class="btn btn-primary btn-lg">
                                Apply Now
                            </a>
                        </div>

                        <div>
                            <img src="<?php echo $url;?>images/qr.png" style="width:200px;" />
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