<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .benefits-list {
        padding-left: 20px;
    }

    .benefits-list li {
        list-style-type: disc;
        margin-bottom: 10px;
    }
    </style>
    <style>
    .membership-card {
        border: none;
        border-radius: 1.25rem;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.2s ease;
    }

    .card-header-custom {
        background: linear-gradient(135deg, #0b3b5f 0%, #1b6b8f 100%);
        padding: 1.5rem;
        border-bottom: none;
    }

    .fee-badge {
        background: #ffc107;
        color: #1e3c4a;
        font-weight: 700;
        padding: 0.5rem 1.2rem;
        border-radius: 40px;
        font-size: 1.1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .section-icon {
        width: 48px;
        height: 48px;
        background: #eef2fc;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #1b6b8f;
        font-size: 1.4rem;
        margin-right: 12px;
    }

    .benefit-list {
        list-style: none;
        padding-left: 0;
    }

    .benefit-list li {
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
    }

    .benefit-list li i {
        color: #2a9d8f;
        width: 28px;
        font-size: 1.1rem;
    }

    .btn-apply {
        background: #0b3b5f;
        border: none;
        padding: 10px 28px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.2s;
    }

    .btn-apply:hover {
        background: #1b6b8f;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    }

    .footer-note {
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        background: #fafcff;
    }

    @media (max-width: 576px) {
        .fee-badge {
            font-size: 0.9rem;
            padding: 0.3rem 0.9rem;
        }
        .card-header-custom {
            padding: 1rem;
        }
    }

    .card-header {
        background: linear-gradient(105deg, #0b3b5f, #1b5a7a);
        border-bottom: none;
    }

    .card-header h3 {
        font-weight: 600;
        letter-spacing: -0.2px;
    }

    .table-container {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .table thead th {
        background: #0c2e44;
        color: white;
        font-weight: 600;
        font-size: 0.82rem;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .table td {
        vertical-align: middle;
        border-top: 1px solid #e2e8f0;
        padding: 0.8rem 0.6rem;
        font-size: 0.88rem;
    }

    .table-hover tbody tr:hover {
        background-color: #eef4ff;
    }

    .badge-date {
        background: #e9ecef;
        color: #1e5a7a;
        padding: 0.25rem 0.8rem;
        border-radius: 30px;
        font-size: 0.75rem;
        white-space: nowrap;
    }

    .ginra-badge {
        font-family: monospace;
        background: #f1f5f9;
        display: inline-block;
        padding: 0.2rem 0.7rem;
        border-radius: 30px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .member-detail {
        line-height: 1.45;
    }

    .info-tag {
        background: #deedf5;
        border-radius: 30px;
        padding: 5px 15px;
        font-size: 0.75rem;
    }

    footer {
        font-size: 0.75rem;
        border-top: 1px solid #dce5ec;
    }

    @media (max-width: 767px) {
        .table thead th {
            font-size: 0.7rem;
            padding: 0.5rem 0.3rem;
        }
        .table td {
            padding: 0.6rem 0.3rem;
            font-size: 0.8rem;
        }
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
                        <h1 class="text-uppercase sub-header">Faculty <span class="main_header main_clr sf-heavy">Club
                                Members</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br />
    <section class="hero2">
        <div class="hero-body container" data-aos="fade-up">
            <div class="row">
                <div class="card membership-card">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div>
                            <h3 class="mb-1 fw-bold"><i class="fas fa-chalkboard-teacher mr-2"></i><span class="p-4">GINRA Foundation – Empowering Nursing Excellence</span></h3>
                        </div>
                        <div class="mt-2 mt-sm-0">
                            <span class="fee-badge"><i class="fas fa-rupee-sign mr-1"></i> 3,000</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="justify-content-center justify-content-md-start">
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i class="fas fa-user-graduate mr-1"></i> Nursing Faculty</span>
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i class="fas fa-flask mr-1"></i> Ph.D. Scholars</span>
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i class="fas fa-user-md mr-1"></i> Nursing Officers</span>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="lead text-secondary">
                                    The <strong>Faculty Club Membership</strong> of the GINRA Foundation is designed to
                                    recognize and honor dedicated nursing educators, researchers, scholars, and nursing
                                    officers for their excellence and contribution to the nursing profession. This
                                    membership represents the interests of the academic and professional nursing
                                    fraternity while creating opportunities for research advancement, academic
                                    networking, and professional development. Through this platform, members gain access
                                    to scholarly resources, leadership opportunities, and guidance from experts to
                                    strengthen their academic and professional journey.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="mb-0 text-muted"><i class="fas fa-check-circle text-success mr-1"></i> Join a
                                    vibrant community of nursing professionals committed to excellence.</p>
                            </div>
                            <div class="col-md-4 text-md-right">
                                <a class="btn btn-apply text-white" href="https://forms.gle/sZ4hqqHYhU6so5ay5"
                                    target="_blank"><i class="fas fa-id-card mr-2"></i> Apply for Membership</a>
                            </div>
                        </div>
                        <br /><br />
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Benefits of Faculty Club Membership</h4>
                            </div>

                            <div class="card-body">
                                <ul class="benefits-list">
                                    <li>50% concession on registration fees for all academic programs, workshops, conferences, and webinars organized by the Foundation</li>
                                    <li>Opportunities to serve as a Resource Person, Speaker, Reviewer, or Executive Committee Member</li>
                                    <li>Eligibility to apply for the prestigious Glorious Pride Awards and other professional recognitions</li>
                                    <li>Opportunities to organize and initiate collaborative scientific and academic programs at your institution</li>
                                    <li>Access to a wide professional and interdisciplinary academic network at national and international levels</li>
                                    <li>Priority access to research collaborations, mentorship, and publication support</li>
                                    <li>Opportunities to publish articles, book chapters, and research papers through Foundation initiatives and journals</li>
                                    <li>Participation in leadership development, faculty development, and research enhancement activities</li>
                                    <li>Networking opportunities with renowned academicians, researchers, healthcare leaders, and institutions</li>
                                    <li>Access to updates on research grants, funding opportunities, fellowships, and academic projects</li>
                                    <li>Certificate of Membership and recognition as an active academic contributor to the Foundation</li>
                                    <li>Opportunities to participate in community outreach and social welfare initiatives led by the Foundation</li>
                                    <li>Special invitations to national and international conferences, panel discussions, and scholarly events</li>
                                    <li>Professional support for academic writing, research methodology, and publication guidance</li>
                                    <li>Opportunity to contribute toward the advancement of nursing, healthcare education, and evidence-based practice</li>
                                </ul>
                                <div class="card-header bg-secondary text-white">
                                    <h4 class="mb-0">Application Process</h4>
                                </div>
                                <br />
                                <ul class="benefits-list">
                                    <li>To apply for the Faculty Club Membership, kindly fill out the E-Form using the link provided below.</li>
                                    <li>Please ensure that all details are entered carefully and completed accurately, as the information provided will be used for preparing your Membership Card.</li>
                                    <li>The payment link is available at the bottom of the application form. After successful submission and payment, you will receive a WhatsApp group link. Kindly click the link and join the group for further updates and communication.</li>
                                    <li>After verification and scrutiny of your application, the Membership Card will be issued within one week.</li>
                                    <li>For any queries or assistance, please feel free to call or message:</li>
                                    <li>Mob No.: <a href="tel:9844178870">9844178870</a></li>
                                    <li><div><a class="text-primary" href="https://forms.gle/sZ4hqqHYhU6so5ay5" target="_blank">Click here for membership.</a></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card shadow container border-0 rounded-lg mb-4">
            <div class="card-header text-white py-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0"><i class="fas fa-user-friends mr-2"></i> FACULTY CLUB MEMBERSHIP</h3>
                        <p class="mb-0 small">GINRAF - Complete directory of nursing faculty</p>
                    </div>
                </div>
            </div>
            <div class="card-body p-3 p-md-4">
                <div class="table-container bg-white rounded">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0" id="membersTable">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 5%">#</th>
                                    <th style="width: 18%">GINRA ID</th>
                                    <th style="width: 60%">Member details (Name, Designation & Institute)</th>
                                    <th style="width: 17%">Date of joining</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // --------------------------------------------------------------
                                // SERVER-SIDE API CALL – no JavaScript, pure PHP
                                // --------------------------------------------------------------
                                $apiUrl = 'https://gloriousjournal.com/membership-api.html?data=Faculty';
                                $members = [];

                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                                $response = curl_exec($ch);
                                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                curl_close($ch);

                                if ($httpCode == 200 && !empty($response)) {
                                    $data = json_decode($response, true);
                                    if (json_last_error() === JSON_ERROR_NONE && isset($data['data']) && is_array($data['data'])) {
                                        foreach ($data['data'] as $item) {
                                            $members[] = [
                                                'sr'       => $item['sr'] ?? $item['sr_no'] ?? $item['SR.'] ?? '',
                                                'ginraId'  => $item['ginra_id'] ?? $item['ginraf_id'] ?? $item['GINRA ID'] ?? '',
                                                'details'  => $item['details'] ?? $item['member_details'] ?? $item['MEMBER DETAILS'] ?? '',
                                                'date'     => $item['date'] ?? $item['joining_date'] ?? $item['DATE OF JOINING'] ?? ''
                                            ];
                                        }
                                    }
                                }

                                if (count($members) === 0) {
                                    echo '<tr><td colspan="4" class="text-center py-5 text-muted"><i class="fas fa-user-slash"></i> No faculty members found.</td></tr>';
                                } else {
                                    foreach ($members as $m) {
                                        $sr = htmlspecialchars($m['sr']);
                                        $ginraId = htmlspecialchars($m['ginraId']);
                                        $details = $m['details']; // Already safe, but we can escape if needed
                                        $date = htmlspecialchars($m['date'] ?: '—');
                                        echo '<tr>';
                                        echo '<td class="text-center font-weight-bold">' . $sr . '</td>';
                                        echo '<td class="align-middle"><span class="ginra-badge"><i class="far fa-id-card mr-1"></i>' . $ginraId . '</span></td>';
                                        echo '<td class="member-detail">' . $details . '</td>';
                                        echo '<td class="text-center align-middle"><span class="badge-date"><i class="far fa-calendar-check mr-1"></i>' . $date . '</span></td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 text-right"><small class="text-muted"><i class="fas fa-check-circle"></i> Official Faculty Club Membership – GINRAF records</small></div>
            </div>
        </div>
        <footer class="text-center text-muted">
            <i class="far fa-building"></i> Nursing excellence network · Full directory
        </footer>
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