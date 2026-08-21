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
                        <h1 class="text-uppercase sub-header">Honorary Fellowships</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="card shadow border-0">

        <!-- Header -->
        <div class="card-header bg-secondary text-white text-center">
            <h2 class="mb-2">GINRA FOUNDATION FELLOWSHIP PROGRAMS</h2>

            <p class="mb-0">
                Glorious International Nursing Research and Academic (GINRA) Foundation®
            </p>
        </div>

        <div class="card-body">

            <!-- Introduction -->
            <div class="mb-5">
                <h4 class="section-title">Introduction</h4>

                <p>
                    Glorious International Nursing Research and Academic (GINRA) Foundation®
                    offers prestigious fellowship programs with the vision of recognizing,
                    motivating, and honoring nursing academicians, professionals,
                    researchers, administrators, educators, and healthcare leaders.
                </p>

                <p>
                    The fellowship programs are honorary professional recognitions awarded
                    purely on the basis of achievements, academic excellence,
                    research output, leadership qualities, innovations,
                    and professional service.
                </p>

                <p>
                    These fellowships are non-curricular in nature and do not involve:
                </p>

                <ul class="custom-list">
                    <li>Coursework</li>
                    <li>Assignments</li>
                    <li>Examinations</li>
                    <li>Training Modules</li>
                </ul>

                <p>
                    Selection is based on expert evaluation of CV,
                    research contributions, publications, professional experience,
                    leadership roles, awards, and overall contribution
                    to nursing and healthcare.
                </p>
            </div>

            <!-- Fellowship 1 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        1. Fellowship in Nursing Education Excellence (FGNEE)
                    </h4>

                    <h5>Description</h5>

                    <p>
                        Recognizes distinguished nursing educators who have demonstrated
                        exceptional contributions to teaching, curriculum innovation,
                        mentorship, academic leadership, and educational advancement.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Registered Nursing professional</li>
                        <li>Minimum 10 years of teaching/academic experience</li>
                        <li>Working in a reputed educational institution</li>
                        <li>Contribution toward nursing education and faculty development</li>
                        <li>Publications and academic achievements preferred</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Authorization to use “FGNEE” as professional suffix</li>
                        <li>Professional recognition and fellowship certificate</li>
                        <li>Academic networking opportunities</li>
                        <li>Enhanced academic visibility</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 2 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        2. Fellowship in Clinical Nursing Excellence (FGCNE)
                    </h4>

                    <h5>Description</h5>

                    <p>
                        Honors nursing professionals who have demonstrated excellence
                        in clinical practice, patient care, healthcare quality improvement,
                        and evidence-based nursing interventions.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Registered Nursing professional</li>
                        <li>Minimum 8 years of clinical experience</li>
                        <li>Working in a hospital or healthcare institution</li>
                        <li>Contribution toward patient care and clinical excellence</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Authorization to use “FGCNE” as professional suffix</li>
                        <li>Recognition of clinical expertise</li>
                        <li>Healthcare leadership opportunities</li>
                        <li>Professional networking opportunities</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 3 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        3. Fellowship in Nursing Administration and Leadership (FGNAL)
                    </h4>

                    <p>
                        Awarded to visionary nursing administrators, deans,
                        principals, and healthcare leaders for excellence
                        in leadership and institutional development.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Minimum 10 years of leadership experience</li>
                        <li>Administrative or leadership position</li>
                        <li>Affiliation with reputed institution</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Professional recognition in leadership</li>
                        <li>Participation in policy discussions</li>
                        <li>Enhanced institutional reputation</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 4 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        4. Fellowship in Community and Public Health Nursing (FGCPHN)
                    </h4>

                    <p>
                        Recognizes professionals involved in community health services,
                        preventive healthcare, and public health awareness initiatives.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Minimum 8 years of public/community health experience</li>
                        <li>Contribution toward healthcare awareness</li>
                        <li>Involvement in social welfare activities</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Recognition for community service contributions</li>
                        <li>Public health networking opportunities</li>
                        <li>Participation in outreach programs</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 5 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        5. Fellowship in Nursing Research (FGNR)
                    </h4>

                    <p>
                        Awarded to nursing professionals and academicians
                        demonstrating excellence in scientific research,
                        innovation, and scholarly contribution.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Minimum 5 years of research experience</li>
                        <li>Publications in reputed journals preferred</li>
                        <li>Participation in conferences and academic activities</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Recognition as nursing research fellow</li>
                        <li>Research collaboration opportunities</li>
                        <li>Enhanced scholarly visibility</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 6 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        6. Fellowship of GINRAF Senior Nursing Research (FGSNR)
                    </h4>

                    <p>
                        One of the highest recognitions offered to senior nursing
                        academicians and researchers for lifelong contributions.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Above 60 years of age</li>
                        <li>Master’s degree in Nursing with first-class</li>
                        <li>Vast academic and professional experience</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Prestigious recognition from GINRA Foundation</li>
                        <li>Global academic visibility</li>
                        <li>Advisory and mentorship opportunities</li>
                    </ul>

                </div>
            </div>

            <!-- Fellowship 7 -->
            <div class="card fellowship-card">
                <div class="card-body">

                    <h4 class="text-primary">
                        7. Fellowship of GINRAF Doctoral Nursing Research (FGDNR)
                    </h4>

                    <p>
                        Awarded to doctoral scholars and emerging researchers
                        pursuing Ph.D. in Nursing.
                    </p>

                    <h5>Eligibility</h5>

                    <ul class="custom-list">
                        <li>Registered Ph.D. scholar in Nursing</li>
                        <li>Master’s degree in Nursing with first-class</li>
                        <li>Active involvement in research activities</li>
                    </ul>

                    <h5>Advantages</h5>

                    <ul class="custom-list">
                        <li>Recognition as doctoral research fellow</li>
                        <li>Mentorship from senior academicians</li>
                        <li>Conference and publication opportunities</li>
                    </ul>

                </div>
            </div>

            <!-- Selection Process -->
            <div class="mb-5">
                <h4 class="section-title">Fellowship Selection Process</h4>

                <div class="process-box">

                    <div class="process-step">
                        📝 Submission of Fellowship Application Form
                    </div>

                    <div class="process-step">⬇️</div>

                    <div class="process-step">
                        📄 Submission of CV and Supporting Documents
                    </div>

                    <div class="process-step">⬇️</div>

                    <div class="process-step">
                        🔍 Evaluation by Expert Advisory and Review Committee
                    </div>

                    <div class="process-step">⬇️</div>

                    <div class="process-step">
                        📧 Shortlisting and Selection Notification via Email
                    </div>

                    <div class="process-step">⬇️</div>

                    <div class="process-step">
                        💳 Payment of Fellowship Fee
                    </div>

                    <div class="process-step">⬇️</div>

                    <div class="process-step">
                        🏅 Award of Fellowship Certificate and Recognition
                    </div>

                </div>
            </div>

            <!-- Fee Structure -->
            <div class="mb-5">

                <h4 class="section-title">Fellowship Fee Structure</h4>

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Fellowship Category</th>
                                <th>Indian Applicants</th>
                                <th>International Applicants</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>All Fellowship Categories</td>
                                <td>₹25,000/- INR</td>
                                <td>$300 USD</td>
                            </tr>
                        </tbody>

                    </table>

                </div>

                <div class="alert alert-success">
                    ✔ Existing GINRA Foundation Members are eligible
                    for a 50% concession on fellowship fees.
                </div>

            </div>

            <!-- Declaration -->
            <div class="mb-5">

                <h4 class="section-title">Declaration</h4>

                <ul class="custom-list">
                    <li>The fellowship is honorary and non-curricular in nature</li>
                    <li>No coursework, assignments, or examinations are involved</li>
                    <li>Accurate information and authentic documents are mandatory</li>
                    <li>Academic misconduct may lead to rejection or cancellation</li>
                    <li>The review committee’s decision shall be final and binding</li>
                </ul>

            </div>

            <!-- Apply -->
            <div class="text-center">

                <h4 class="section-title">Apply for Fellowship</h4>
                <a href="https://forms.gle/LWbooNF6dTHPL7xW7" class="ml-3" target="_blank">GINRA Fellowship Application Form</a>
                <div>
                    <img src="<?php echo $url;?>images/fellowship.jpeg" style="width:300px;" />
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