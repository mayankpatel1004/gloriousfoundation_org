<?php include "connection.php"; 
$sql = "SELECT id, ginra_id, member_name, designation, joining_date, membership_type 
            FROM members 
            WHERE 1=1 AND membership_type != 'Faculty' 
            ORDER BY id ASC";

    $stmt = $conn->prepare($sql);
    $stmt->execute($params);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
    <style>
    .benefits-list {
        padding-left: 20px;
        margin-bottom: 0;
    }

    .benefits-list li {
        list-style-type: disc;
        margin-bottom: 12px;
        line-height: 1.6;
    }
    </style>
    <style>
    .card-header {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border-bottom: none;
    }

    .card-header h3 {
        font-weight: 600;
        letter-spacing: -0.3px;
    }

    .table-container {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
    }

    .table {
        margin-bottom: 0;
        font-size: 0.9rem;
    }

    .table thead th {
        background-color: #102b47;
        color: white;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom: none;
        vertical-align: middle;
        white-space: nowrap;
    }

    .table td {
        vertical-align: middle;
        border-top: 1px solid #e2e8f0;
        padding: 0.85rem 0.6rem;
    }

    .table-hover tbody tr:hover {
        background-color: #f0f7ff;
        transition: 0.2s;
    }

    .badge-date {
        background-color: #e9ecef;
        color: #1e466e;
        font-weight: 500;
        padding: 0.3rem 0.6rem;
        border-radius: 30px;
        font-size: 0.8rem;
        display: inline-block;
        white-space: nowrap;
    }

    .member-details {
        line-height: 1.45;
    }

    .search-wrapper {
        max-width: 350px;
    }

    .info-badge {
        background: #d9e6f5;
        border-radius: 20px;
        font-size: 0.7rem;
        padding: 4px 10px;
        color: #004080;
    }

    footer {
        font-size: 0.8rem;
        border-top: 1px solid #dee2e6;
    }

    @media (max-width: 767px) {
        .table thead th {
            font-size: 0.7rem;
            padding: 0.6rem 0.3rem;
        }

        .table td {
            padding: 0.7rem 0.3rem;
            font-size: 0.8rem;
        }

        .member-details br {
            display: block;
        }
    }

    .ginra-id {
        font-family: "Sansita", sans-serif;
        font-weight: 500;
        background: #f1f5f9;
        display: inline-block;
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.8rem;
    }

    <style>.membership-card {
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
    </style>

</head>

<body>
    <?php include "include/header.php"; ?>
    <section class="hero">
        <div class="container custom-container-width">
            <div class="row">
                <div class="col-lg-7 align-items-center section-padding">
                    <div class="hero-body" data-aos="fade-up">
                        <h1 class="text-uppercase sub-header">Achivers <span class="main_header main_clr sf-heavy">Club
                                Members</span></h1>
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
                        <div class="card shadow-sm border-0">


                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-1 fw-bold"><i class="fas fa-chalkboard-teacher mr-2"></i><span
                                            class="p-4">Membership Fee:</span></h3>
                                </div>
                                <div class="mt-2 mt-sm-0">
                                    <span class="fee-badge"><i class="fas fa-rupee-sign mr-1"></i> 5,000</span>
                                </div>
                            </div>
                            <br />
                            <h6>(For Deans, Principals, Directors, Nursing Superintendents, and Other Administrative
                                Positions)</h6>
                            <p>The Achiever's Club Membership is an exclusive category created for senior nursing
                                administrators and leaders who have demonstrated excellence in academic administration,
                                institutional leadership, and professional service. This membership provides a
                                prestigious platform to connect with global nursing leaders, mentor future researchers,
                                and contribute to the advancement of nursing education and practice. Members receive all
                                the benefits of the Faculty Club Membership along with additional leadership and
                                professional engagement opportunities.</p>



                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Benefits of Achiever's Club Membership</h4>
                            </div>

                            <div class="card-body">
                                <ul class="benefits-list">

                                    <li>
                                        50% concession on registration fees for all Foundation programs, workshops,
                                        conferences, and academic activities
                                    </li>

                                    <li>
                                        50% concession on publication charges in the Glorious International Journal of
                                        Nursing Research (GIJNR), ISSN 2583-9713 (Online)
                                    </li>

                                    <li>
                                        Opportunity to serve as a Resource Person, Research Mentor, Reviewer, or
                                        Executive Committee Member in Foundation activities
                                    </li>

                                    <li>
                                        Eligibility to apply for the prestigious Glorious Pride Awards and advanced
                                        professional recognitions
                                    </li>

                                    <li>
                                        Opportunity to collaborate with institutions for scientific, research, and
                                        interdisciplinary academic programs
                                    </li>

                                    <li>
                                        Access to an extensive national and international professional, academic, and
                                        research networking platform
                                    </li>

                                    <li>
                                        Additional professional recognition beneficial for accreditation and quality
                                        assurance bodies such as NAAC, UGC, INC, and NABH
                                    </li>

                                    <li>
                                        Career enhancement opportunities through research collaborations, publications,
                                        and scholarly activities
                                    </li>

                                    <li>
                                        Priority access to research methodology workshops, publication guidance
                                        sessions, and academic mentorship programs
                                    </li>

                                    <li>
                                        Opportunities for joint research projects, book chapters, scientific
                                        publications, and conference presentations
                                    </li>

                                    <li>
                                        Professional guidance on scientific writing, journal selection, publication
                                        ethics, systematic reviews, and research grants
                                    </li>

                                    <li>
                                        Invitations to national and international conferences, research forums, and
                                        scholarly discussions
                                    </li>

                                    <li>
                                        Certificate of Membership with recognition as an Achiever’s Club Member of the
                                        Foundation
                                    </li>

                                    <li>
                                        Opportunities to contribute toward evidence-based practice, healthcare
                                        innovation, and advancement of nursing research
                                    </li>

                                    <li>
                                        Special recognition for academic achievements, research contributions, and
                                        professional excellence
                                    </li>

                                </ul>
                            </div>

                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Additional Privileges for Achiever’s Club Members</h4>
                            </div>
                            <br />
                            <ul class="benefits-list">
                                <li>Platform to engage in professional development activities and showcase talents
                                    globally. </li>
                                <li>Opportunity to gain valuable insights from experienced nursing leaders worldwide.
                                </li>
                                <li>Opportunity to guide research scholars and faculty researchers by associating with
                                    the expert panel.</li>
                                <li>Eligible to receive the Fellowship of the Foundation as per the cadre. </li>
                            </ul>
                            <div class="card-header bg-secondary text-white">
                                <h4 class="mb-0">Application Process</h4>
                            </div>
                            <br />

                                <ul class="benefits-list">
                                    <li>To apply for the Achiever’s Club Membership, kindly fill out the E-Form using
                                        the link provided below.</li>
                                    <li>Please ensure that all details are entered carefully and completed accurately,
                                        as the information provided will be used for preparing your Membership Card.
                                    </li>
                                    <li>The payment link is available at the bottom of the application form. After
                                        successful submission and payment, you will receive a WhatsApp group link.
                                        Kindly click the link and join the group for further updates and communication.
                                    </li>
                                    <li>After verification and scrutiny of your application, the Membership Card will be
                                        issued within one week.</li>
                                    <li>For any queries or assistance, please feel free to call or message:</li>
                                    <li>Mob No.: <a href="tel:9844178870">9844178870</a></li>
                                    <li><div><a class="text-primary" href="https://forms.gle/sZ4hqqHYhU6so5ay5" target="_blank">Click here for membership.</a></div></li>
                                </ul>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card shadow-sm border-0 container rounded-lg mb-4 overflow-hidden">
            <div class="card-header text-white py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <div>
                        <h3 class="mb-0 fw-bold"><i class="fas fa-trophy mr-2"></i> ACHIEVERS CLUB MEMBERS</h3>
                        <p class="mb-0 mt-1 small opacity-75">Excellence in Nursing Leadership & Education</p>
                    </div>
                </div>
            </div>
            <div class="card-body p-3 p-md-4">
                <!-- search & info row -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-6">
                        <div class="search-wrapper">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white"><i
                                            class="fas fa-search text-muted"></i></span>
                                </div>
                                <input type="text" id="tableSearch" class="form-control form-control-sm"
                                    placeholder="Search by name, institute, GINRA ID...">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-right mt-2 mt-md-0">
                        <small class="text-muted"><i class="far fa-calendar-alt mr-1"></i> Updated till 2026 · Members
                            Pan-India</small>
                    </div>
                </div>
                <!-- responsive table wrapper -->
                <div class="table-container bg-white rounded shadow-sm">
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
                                <?php if(isset($result) && $result != false):?>
                                    <?php $index = 0;?>
                                <?php foreach($result as $row): $index++;?>
                                <tr>
                                    <td class="text-center font-weight-bold"><?php echo $index;?></td>
                                    <td class="align-middle"><span class="ginra-badge"><i
                                                class="far fa-id-card mr-1"></i><?php echo $row['ginra_id'];?></span></td>
                                    <td class="member-detail"><?php echo $row['member_name'];?>, <?php echo $row['designation'];?>, <?php echo $row['membership_type'];?></td>
                                    <td class="text-center align-middle"><span class="badge-date"><i
                                                class="far fa-calendar-check mr-1"></i><?php echo date("d M Y", strtotime($row['joining_date']));?></span></td>
                                <?php endforeach; ?>
                                <?php endif;?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <small class="text-muted"><i class="fas fa-asterisk fa-xs"></i> Members listed as per official
                        Achievers Club records</small>
                </div>
            </div>
        </div>
        <footer class="text-center text-muted">
            <i class="far fa-building"></i> Nursing Excellence Forum · Achievers Club Membership Directory
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