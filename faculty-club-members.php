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
        /* Use 'disc' for dots or 'dash' style below */
        margin-bottom: 10px;
    }

    /* Uncomment below for dash style */
    /*
    .benefits-list li {
        list-style: none;
        position: relative;
        padding-left: 15px;
    }

    .benefits-list li::before {
        content: "-";
        position: absolute;
        left: 0;
    }
    */
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

    .search-wrapper {
        max-width: 360px;
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
                    <!-- Header with title and fee -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h3 class="mb-1 fw-bold"><i class="fas fa-chalkboard-teacher mr-2"></i><span class="p-4">GINRA Foundation – Empowering Nursing Excellence</span></h3>
                            </div>
                            <div class="mt-2 mt-sm-0">
                                <span class="fee-badge"><i class="fas fa-rupee-sign mr-1"></i> 3,000</span>
                            </div>
                        </div>
                    <div class="card-body">
                        <!-- Target audience badges -->
                        <div class="justify-content-center justify-content-md-start">
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i
                                    class="fas fa-user-graduate mr-1"></i> Nursing Faculty</span>
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i
                                    class="fas fa-flask mr-1"></i> Ph.D. Scholars</span>
                            <span class="badge badge-pill badge-light p-2 px-3 mr-2 mb-2"><i
                                    class="fas fa-user-md mr-1"></i> Nursing Officers</span>
                        </div>

                        <!-- Description row -->
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

                        <!-- Divider -->
                        <!-- Call to action row -->
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

                                    <li>50% concession on registration fees for all academic programs, workshops,
                                        conferences, and webinars organized by the Foundation</li>

                                    <li>Opportunities to serve as a Resource Person, Speaker, Reviewer, or Executive
                                        Committee Member</li>

                                    <li>Eligibility to apply for the prestigious Glorious Pride Awards and other
                                        professional recognitions</li>

                                    <li>Opportunities to organize and initiate collaborative scientific and academic
                                        programs at your institution</li>

                                    <li>Access to a wide professional and interdisciplinary academic network at national
                                        and international levels</li>

                                    <li>Priority access to research collaborations, mentorship, and publication support
                                    </li>

                                    <li>Opportunities to publish articles, book chapters, and research papers through
                                        Foundation initiatives and journals</li>

                                    <li>Participation in leadership development, faculty development, and research
                                        enhancement activities</li>

                                    <li>Networking opportunities with renowned academicians, researchers, healthcare
                                        leaders, and institutions</li>

                                    <li>Access to updates on research grants, funding opportunities, fellowships, and
                                        academic projects</li>

                                    <li>Certificate of Membership and recognition as an active academic contributor to
                                        the Foundation</li>

                                    <li>Opportunities to participate in community outreach and social welfare
                                        initiatives led by the Foundation</li>

                                    <li>Special invitations to national and international conferences, panel
                                        discussions, and scholarly events</li>

                                    <li>Professional support for academic writing, research methodology, and publication
                                        guidance</li>

                                    <li>Opportunity to contribute toward the advancement of nursing, healthcare
                                        education, and evidence-based practice</li>

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
                <div class="row mb-3 align-items-center">
                    <div class="col-md-6">
                        <div class="search-wrapper">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-white"><i
                                            class="fas fa-search text-muted"></i></span>
                                </div>
                                <input type="text" id="searchInput" class="form-control form-control-sm"
                                    placeholder="Search by name, GINRA ID, institute...">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-md-right mt-2 mt-md-0">
                        <small><i class="far fa-calendar-alt"></i> Faculty club – India & international</small>
                    </div>
                </div>
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
                            <tbody id="tableBody">
                                <tr>
                                    <td colspan="4" class="text-center py-4"><i class="fas fa-spinner fa-pulse"></i>
                                        Loading 284 members...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 text-right"><small class="text-muted"><i class="fas fa-check-circle"></i> Official
                        Faculty Club Membership – GINRAF records</small></div>
            </div>
        </div>
        <footer class="text-center text-muted">
            <i class="far fa-building"></i> Nursing excellence network · Full directory
        </footer>
    </section>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footerscript.php'; ?>
    <script>
    // ==========================================================================
    // COMPLETE RAW TABLE EXTRACTED FROM "FACULTY CLUB MEMBERSHIP-FINAL.docx"
    // Contains all 284 members exactly as provided (ASCII grid format)
    // ==========================================================================
    const rawTableFull = `
+-------+--------------------+-----------------------------+----------------+
| SR.   | GINRAF ID NO.      | MEMBER DETAILS              | DATE OF        |
| NO    |                    | (NAME, DESIGNATION &        | JOINING        |
|       |                    | INSTITUTE)                  |                |
+=======+:==================:+:===========================:+:==============:+
| 1.    | GINRAF/2022/02     | **Mr. Swapnil Rahane**      | 26/5/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 2.    | GINRAF/2022/03     | **Ms. Twinkle Erande**      | 26/05/2022     |
|       |                    |                             |                |
|       |                    | Clinical Instructor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 3.    | GINRAF/2022/04     | **Mr. Prashant Sharma**     | 31/5/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 4.    | GINRAF/2022/05     | **Mrs. Nikita Dineshkumar   | 15/6/2022      |
|       |                    | Prajapati**                 |                |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Shree Shamlaji Nursing      |                |
|       |                    | College, Godhra             |                |
+-------+--------------------+-----------------------------+----------------+
| 5.    | GINRAF/2022/06     | **Prof. (Dr.) Venice        | 16/6/2022      |
|       |                    | Mariya**                    |                |
|       |                    |                             |                |
|       |                    | Professor                   |                |
|       |                    |                             |                |
|       |                    | Peoples College of Nursing  |                |
|       |                    | and Research Centre, Bhopal |                |
+-------+--------------------+-----------------------------+----------------+
| 6.    | GINRAF/2022/07     | **Ms. Parjinder Kaur**      | 16/6/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Universal Institute of      |                |
|       |                    | Nursing, Mohali, Punjab     |                |
+-------+--------------------+-----------------------------+----------------+
| 7.    | GINRAF/2022/08     | **Prof. Rose Mary George**  | 21/6/2022      |
|       |                    |                             |                |
|       |                    | Professor                   |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat.                    |                |
+-------+--------------------+-----------------------------+----------------+
| 8.    | GINRAF/2022/09     | **Mrs. Sandhya Mishra**     | 01/7/2022      |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | LNCT, Nursing, LNCT         |                |
|       |                    | University, Bhopal, MP.     |                |
+-------+--------------------+-----------------------------+----------------+
| 9.    | GINRAF/2022/10     | **Dr. Barka Devi**          | 04/7/2022      |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Sikkim Manipal College of   |                |
|       |                    | Nursing, Sikkim Manipal     |                |
+-------+--------------------+-----------------------------+----------------+
| 10.   | GINRAF/2022/11     | **Mrs. Monika Devi Nr**     | 05/7/2022      |
|       |                    |                             |                |
|       |                    | Nursing Tutor               |                |
|       |                    |                             |                |
|       |                    | Govt. Medical College. J &  |                |
|       |                    | K.                          |                |
+-------+--------------------+-----------------------------+----------------+
| 11.   | GINRAF/2022/12     | **Ms. Heena Baria**         | 06/7/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 12.   | GINRAF/2022/13     | **Mr. Anantkumar H. Patel** | 07/7/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 13.   | GINRAF/2022/14     | **Ms. Roma Patel**          | 07/7/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 14.   | GINRAF/2022/15     | **Ms. Fernandes Aarohi      | 07/7/2022      |
|       |                    | John**                      |                |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 15.   | GINRAF/2022/16     | **Ms. Betty Koshy**         | 07/7/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 16.   | GINRAF/2022/17     | **Ms. Siddhi Parmar**       | 07/7/2022      |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | L N Nursing College, Bhopal |                |
+-------+--------------------+-----------------------------+----------------+
| 17.   | GINRAF/2022/18     | **Mrs. Sandhya Kumari R**   | 12/07/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 18.   | GINRAF/2022/19     | **Ms. Kinjal Ritesh Joshi** | 13/07/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | S.D.D. College of Nursing,  |                |
|       |                    | Dahod                       |                |
+-------+--------------------+-----------------------------+----------------+
| 19.   | GINRAF/2022/20     | **Ms. Patel Priyanka        | 16/07/2022     |
|       |                    | Chirayubhai**               |                |
|       |                    |                             |                |
|       |                    | Clinical Instructor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 20.   | GINRAF/2022/21     | **Mrs. Neepa patela**       | 25/07/2022     |
|       |                    |                             |                |
|       |                    | Assistant professor,        |                |
|       |                    |                             |                |
|       |                    | Shital Nursing College,     |                |
|       |                    | Lunawada, Mahisagar         |                |
+-------+--------------------+-----------------------------+----------------+
| 21.   | GINRAF/2022/22     | **Ms. Rajvi Vikramsinh      | 23/07/2022     |
|       |                    | Rana**                      |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 22.   | GINRAF/2022/23     | **Ms. Renuka Prajapati**    | 26/07/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Pioneer Nursing college,    |                |
|       |                    | Vadodara                    |                |
+-------+--------------------+-----------------------------+----------------+
| 23.   | GINRAF/2022/24     | **Mr. Shivateerthayya       | 04/08/2022     |
|       |                    | Hiremath**                  |                |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | VMP College of Nursing and  |                |
|       |                    | Medical Research Institute, |                |
|       |                    | Akluj, Solapur              |                |
+-------+--------------------+-----------------------------+----------------+
| 24.   | GINRAF/2022/25     | **Ms. Neha Tomar**          | 04/08/2022     |
|       |                    |                             |                |
|       |                    | Army Nursing Officer        |                |
|       |                    |                             |                |
|       |                    | College of Nursing, Command |                |
|       |                    | Hospital, Lucknow           |                |
+-------+--------------------+-----------------------------+----------------+
| 25.   | GINRAF/2022/26     | **Mrs. Charmi Harsh Patel** | 06/08/2022     |
|       |                    |                             |                |
|       |                    | Clinical Instructor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 26.   | GINRAF/2022/27     | **Mr. Elby Paul**           | 20/08/2022     |
|       |                    |                             |                |
|       |                    | Nursing Administrator       |                |
|       |                    |                             |                |
|       |                    | Chirayu Medical College and |                |
|       |                    | Hospital, Bhopal            |                |
+-------+--------------------+-----------------------------+----------------+
| 27.   | GINRAF/2022/28     | **Mrs. Chandra S. Nittur**  | 10/09/2022     |
|       |                    |                             |                |
|       |                    | Nursing Officer             |                |
|       |                    |                             |                |
|       |                    | Keshvapur, Hubli, Karnataka |                |
+-------+--------------------+-----------------------------+----------------+
| 28.   | GINRAF/2022/29     | **Prof. Vimal Prasad        | 20/09/2022     |
|       |                    | Patidar**                   |                |
|       |                    |                             |                |
|       |                    | Professor                   |                |
|       |                    |                             |                |
|       |                    | S.D.D. College of Nursing,  |                |
|       |                    | Dahod                       |                |
+-------+--------------------+-----------------------------+----------------+
| 29.   | GINRAF/2022/30     | **Prof. Jeya Vanitha**      | 21/09/2022     |
|       |                    |                             |                |
|       |                    | Professor                   |                |
|       |                    |                             |                |
|       |                    | SCPM College of Nursing,    |                |
|       |                    | Gonda, UP                   |                |
+-------+--------------------+-----------------------------+----------------+
| 30.   | GINRAF/2022/31     | **Ms. Farkanda Amin**       | 21/09/2022     |
|       |                    |                             |                |
|       |                    | Nursing Officer             |                |
|       |                    |                             |                |
|       |                    | Government Medical College, |                |
|       |                    | JK                          |                |
+-------+--------------------+-----------------------------+----------------+
| 31.   | GINRAF/2022/32     | **Prof. Shettigar Shilpa    | 13/10/2022     |
|       |                    | Ashok**                     |                |
|       |                    |                             |                |
|       |                    | Professor cum Principal     |                |
|       |                    |                             |                |
|       |                    | Smt Sunanda Pravin          |                |
|       |                    | Gambhirchand College of     |                |
|       |                    | Nursing Matunga, Mumbai     |                |
+-------+--------------------+-----------------------------+----------------+
| 32.   | GINRAF/2022/33     | **Maj Jincy John**          | 04/11/2022     |
|       |                    |                             |                |
|       |                    | Race course officer's       |                |
|       |                    | accommodation, Neil lines,  |                |
|       |                    | Cariappa Road, Cantonment,  |                |
|       |                    | Lucknow-                    |                |
+-------+--------------------+-----------------------------+----------------+
| 33.   | GINRAF/2022/34     | **Mrs. Vandana Swaran       | 08/11/2022     |
|       |                    | Thangavel**                 |                |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | MKSSS, Sitabai Nargudkar    |                |
|       |                    | College of Nursing, Nagpur, |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 34.   | GINRAF/2022/35     | **Mr. Satish Prajapati**    | 19/11/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | College of Nursing, TMU,    |                |
|       |                    | Moradabad, UP               |                |
+-------+--------------------+-----------------------------+----------------+
| 35.   | GIBRAF/2022/36     | **Mrs. Khushbuben           | 21/11/2022     |
|       |                    | Harivadanbhai Patel**       |                |
|       |                    |                             |                |
|       |                    | Staff Nurse                 |                |
|       |                    |                             |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 36.   | GINRAF/2022/37     | **MAJ JINCY JOHN**          | 21/11/2022     |
|       |                    |                             |                |
|       |                    | Race course officer's       |                |
|       |                    | Accommodation,              |                |
|       |                    | Neil lines, Cariappa Road,  |                |
|       |                    | Cantonment, Lucknow         |                |
+-------+--------------------+-----------------------------+----------------+
| 37.   | GINRAF/2022/38     | **Ms. Renee**               | 28/11/2022     |
|       |                    |                             |                |
|       |                    | Nursing Tutor               |                |
|       |                    |                             |                |
|       |                    | Rae barely, UP              |                |
+-------+--------------------+-----------------------------+----------------+
| 38.   | GINRAF/2022/39     | **Mrs. Rubi Pradhan**       | 29/11/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | SUM Nursing College,        |                |
|       |                    | Faculty of Nursing, Siksha  |                |
|       |                    | O Anushandhan University,   |                |
|       |                    | Bhubaneswar, Odisha         |                |
+-------+--------------------+-----------------------------+----------------+
| 39.   | GINRAF/2022/40     | **Mrs. Anubha Martin**      | 29/11/2022     |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Shri Sai College of Nursing |                |
|       |                    | and Paramedical             |                |
+-------+--------------------+-----------------------------+----------------+
| 40.   | GINRAF/2022/41     | **Mrs. Madhusmita Nayak**   | 01/12/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | SUM Nursing College,        |                |
|       |                    | Faculty of Nursing, Siksha  |                |
|       |                    | O Anushandhan University,   |                |
|       |                    | Bhubaneswar, Odisha         |                |
+-------+--------------------+-----------------------------+----------------+
| 41.   | GINRAF/2022/42     | **Dr. Lovely A. Joshi**     | 01/12/2022     |
|       |                    |                             |                |
|       |                    | Vice Principal              |                |
|       |                    |                             |                |
|       |                    | Smt. Rukmaniben             |                |
|       |                    | Deepchandbhai Gardi Nurses  |                |
|       |                    | Training Centre, Indore     |                |
+-------+--------------------+-----------------------------+----------------+
| 42.   | GINRAF/2022/43     | **Ms. Rubina Cambell**      | 01/12/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Smt. Sindhutai Eknathrao    |                |
|       |                    | Vikhe Patil College of      |                |
|       |                    | Nursing, Loni               |                |
+-------+--------------------+-----------------------------+----------------+
| 43.   | GINRAF/2022/44     | **Dr. R. Ponchitra**        | 04/12/2022     |
|       |                    |                             |                |
|       |                    | Professor & Vice Principal  |                |
|       |                    |                             |                |
|       |                    | MGM New Bombay College of   |                |
|       |                    | Nursing, Mumbai             |                |
+-------+--------------------+-----------------------------+----------------+
| 44.   | GINRAF/2022/45     | **Ms. Nupoor Bhambid**      | 13/12/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Maharshi Karve Stree        |                |
|       |                    | Shikshan Samstha's Smt.     |                |
|       |                    | Bakul Tambat Institute of   |                |
|       |                    | Nursing Education, Karve    |                |
|       |                    | Nagar, Pune, Maharashtra.   |                |
+-------+--------------------+-----------------------------+----------------+
| 45.   | GINRAF/2022/46     | **Mr. Afsal Ahammed Kunju** | 13/12/2022     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Seva Nursing Institute,     |                |
|       |                    | Mission Compound, Sakri     |                |
|       |                    | Road, Dhule, Maharashtra    |                |
+-------+--------------------+-----------------------------+----------------+
| 46.   | GINRAF/2022/47     | **Ms. Maheswari Thapa**     | 23/12/2022     |
|       |                    |                             |                |
|       |                    | Major                       |                |
|       |                    |                             |                |
|       |                    | Commando Hospital Lucknow,  |                |
|       |                    | Uttar Pradesh.              |                |
+-------+--------------------+-----------------------------+----------------+
| 47.   | GINRAF/2022/48     | **Mrs. Maheswari            | 27/12/2022     |
|       |                    | Kaliyaperumal**             |                |
|       |                    |                             |                |
|       |                    | Professor                   |                |
|       |                    |                             |                |
|       |                    | SCPM College of Nursing,    |                |
|       |                    | Gonda, UP                   |                |
+-------+--------------------+-----------------------------+----------------+
| 48.   | GINRAF/2022/49     | **Mr. Sunil Kumar**         | 27/12/2022     |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Rajasthan                   |                |
+-------+--------------------+-----------------------------+----------------+
| 49.   | GINRAF/2022/50     | **Jyoti Kiran Gaikwad**     | 01/01/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Kamptee, Nagpur,            |                |
|       |                    | Maharashtra, India          |                |
+-------+--------------------+-----------------------------+----------------+
| 50.   | GINRAF/2022/51     | **Mr. J. Vadivazhagan Alias | 7/01/2023      |
|       |                    | Rathinam**                  |                |
|       |                    |                             |                |
|       |                    | Lecturer in MSN,            |                |
|       |                    |                             |                |
|       |                    | Vinayaka Mission College of |                |
|       |                    | Nursing, Kirumampakkam,     |                |
|       |                    | Puducherry                  |                |
+-------+--------------------+-----------------------------+----------------+
| 51.   | GINRAF/2022/52     | **Ms. Shinde Deepali        | 7/1/2023       |
|       |                    | Devdatta**                  |                |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Maharshi Karve Stree        |                |
|       |                    | Shikshan Samstha's, Smt.    |                |
|       |                    | Bakul Tambat Institute of   |                |
|       |                    | Nursing Education           |                |
|       |                    | Karvenagar, Pune            |                |
+-------+--------------------+-----------------------------+----------------+
| 52.   | GINRAF/2022/53     | **Ms. Ujwala Vitthal        | 7/1/2023       |
|       |                    | Jadhav**                    |                |
|       |                    |                             |                |
|       |                    | Maharshi Karve Stree        |                |
|       |                    | Shikshan Samstha's, Smt.    |                |
|       |                    | Bakul Tambat Institute of   |                |
|       |                    | Nursing Education           |                |
|       |                    | Karvenagar, Pune            |                |
+-------+--------------------+-----------------------------+----------------+
| 53.   | GINRAF/2022/54     | **Lt. Col Indira Das**      | 9/1/2023       |
|       |                    |                             |                |
|       |                    | HOD and Professor           |                |
|       |                    |                             |                |
|       |                    | Mental Health Nursing       |                |
|       |                    | Command Hospital Central    |                |
|       |                    | Command Lucknow, UP, India  |                |
+-------+--------------------+-----------------------------+----------------+
| 54.   | GINRAF/2022/55     | **Bibechana Thapa**         | 9/1/2023       |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | College of Nursing, Command |                |
|       |                    | Hospital, Central Command   |                |
|       |                    | Lucknow, UP, India          |                |
+-------+--------------------+-----------------------------+----------------+
| 55.   | GINRAF/2022/56     | **Maj Kirti Maan**          | 09/1/2023      |
|       |                    |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | College of nursing, command |                |
|       |                    | hospital central Command,   |                |
|       |                    | Lucknow, UP                 |                |
+-------+--------------------+-----------------------------+----------------+
| 56.   | GINRAF/2022/57     | **Vivek Ravindra Kurane**   | 10/1/2023      |
|       |                    |                             |                |
|       |                    | Senior Staff Nurse,         |                |
|       |                    |                             |                |
|       |                    | Government Medical College  |                |
|       |                    | and Hospital Miraj          |                |
+-------+--------------------+-----------------------------+----------------+
| 57.   | GINRAF/2022/58     | **Shital Swarnakar**        | 10/1/2023      |
|       |                    |                             |                |
|       |                    | Geetanjali college of       |                |
|       |                    | nursing, Udaipur, Rajasthan |                |
+-------+--------------------+-----------------------------+----------------+
| 58.   | GINRAF/2022/59     | **Bijayalakshmi Devi        | 10/1/2023      |
|       |                    | Laishangbam**               |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | MKSSS Smt. Bakul Tambat     |                |
|       |                    | Institute of Nursing        |                |
|       |                    | Education. Pune,            |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 59.   | GINRAF/2022/60     | **Mrs. Shailaja M. J.       | 10/1/2023      |
|       |                    | Mathews**                   |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Maharshi Karve Stree        |                |
|       |                    | Shikshan Samsthas Smt Bakul |                |
|       |                    | Tambat Institute of Nursing |                |
|       |                    | Education, Maharshi Karve   |                |
|       |                    | Stree Shikshan Samstha      |                |
|       |                    | Campus, Karvenagar, Pune,   |                |
+-------+--------------------+-----------------------------+----------------+
| 60.   | GINRAF/2022/61     | **Sailaja Busi**            | 12/01/2023     |
|       |                    |                             |                |
|       |                    | Professor-                  |                |
|       |                    |                             |                |
|       |                    | Department of medical       |                |
|       |                    | surgical nursing (oncology) |                |
|       |                    | Sri shankara college of     |                |
|       |                    | nursing, Sri shankara       |                |
|       |                    | cancer hospital and         |                |
|       |                    | research centre, Bengaluru  |                |
+-------+--------------------+-----------------------------+----------------+
| 61.   | GINRAF/2022/62     | **Sheryl G. Fernandes**     | 16/01/2023     |
|       |                    |                             |                |
|       |                    | C/o Gustin Fernandes, H.No: |                |
|       |                    | LIG 49, KHE Colony          |                |
|       |                    | Ambewadi, Dandeli District: |                |
|       |                    | Uttara Kannada State        |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 62.   | GINRAF/2022/63     | **Smita Lisham**            | 20/01/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Maharshi Karve Stree        |                |
|       |                    | Shikshan Samstha's Smt.     |                |
|       |                    | Bakul Tambat Institute of   |                |
|       |                    | Nursing Education,          |                |
|       |                    | Karvenagar, Pune,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 63.   | GINRAF/2022/64     | **Shital Padalkar**         | 20/01/2023     |
|       |                    |                             |                |
|       |                    | Lecturer                    |                |
|       |                    |                             |                |
|       |                    | MKSSS Smt Bakul Tambat      |                |
|       |                    | Institute of Nursing        |                |
|       |                    | Education, Karvenagar Pune  |                |
+-------+--------------------+-----------------------------+----------------+
| 64.   | GINRAF/2022/65     | **Ashwini Suthar**          | 20/01/2023     |
|       |                    |                             |                |
|       |                    | Lecturer                    |                |
|       |                    |                             |                |
|       |                    | MKSSS, Smt. Bakul Tambat    |                |
|       |                    | Institute of Nursing        |                |
|       |                    | Education, Kanvenagar, Pune |                |
+-------+--------------------+-----------------------------+----------------+
| 65.   | GINRAF/2022/66     |                             |                |
+-------+--------------------+-----------------------------+----------------+
| 66.   | GINRAF/2022/67     | **Rumi Sen**                | 20/01/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Aliah University,           |                |
|       |                    | Department of Nursing 17    |                |
|       |                    | Gorachand Road, Park        |                |
|       |                    | circus, Kolkata             |                |
+-------+--------------------+-----------------------------+----------------+
| 67.   | GINRAF/2022/68     | **Salam Premila Devi**      | 04/02/2023     |
|       |                    |                             |                |
|       |                    | College of Nursing          |                |
|       |                    | NEIGRIHMS Shillong          |                |
|       |                    | Meghalaya                   |                |
+-------+--------------------+-----------------------------+----------------+
| 68.   | GINRAF/2022/69     | **Mrs. Karthi Keswari**     | 10/02/2023     |
|       |                    |                             |                |
|       |                    | Government Institute of     |                |
|       |                    | Medical Science, Gautam     |                |
|       |                    | Buddha Nagar, Noida         |                |
+-------+--------------------+-----------------------------+----------------+
| 69.   | GINRAF/2022/70     | **Mr. Rahul Ashok Tambe**   | 11/2/2023      |
|       |                    |                             |                |
|       |                    | Organ Transplant Manager    |                |
|       |                    |                             |                |
|       |                    | Sahyadri super speciality   |                |
|       |                    | hospital, Pune              |                |
+-------+--------------------+-----------------------------+----------------+
| 70.   | GINRAF/2022/71     | **Mr. Raj Kumar A**         | 12/02/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Shree Sahajanand Institute  |                |
|       |                    | of Nursing, Bhavnagar,      |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 71.   | GINRAF/2022/72     | **Prof. Muthumaheswari      | 15/02/2023     |
|       |                    | Arumugasamy**               |                |
|       |                    |                             |                |
|       |                    | Professor cum Vice          |                |
|       |                    | principal,                  |                |
|       |                    |                             |                |
|       |                    | Scpm College Of Nursing &   |                |
|       |                    | Paramedical Sciences,       |                |
|       |                    | Gonda, Up                   |                |
+-------+--------------------+-----------------------------+----------------+
| 72.   | GINRAF/2022/73     | **Ms. Sonal Samuel**        | 17/02/2023     |
|       |                    |                             |                |
|       |                    | Asst. Professor             |                |
|       |                    |                             |                |
|       |                    | Govt. College of Nursing,   |                |
|       |                    | Indore                      |                |
+-------+--------------------+-----------------------------+----------------+
| 73.   | GINRAF/2022/74     | **Dr. Sweta Bhoskar**       | 17/02/2023     |
|       |                    |                             |                |
|       |                    | Lecturer                    |                |
|       |                    |                             |                |
|       |                    | CON, NEIGRIHMS, Shillong,   |                |
|       |                    | Meghalaya                   |                |
+-------+--------------------+-----------------------------+----------------+
| 74.   | GINRAF/2022/75     | **Longjam Kamala Devi**     | 17/02/2023     |
|       |                    |                             |                |
|       |                    | Lecturer                    |                |
|       |                    |                             |                |
|       |                    | CON, Neigrihms Shillong     |                |
|       |                    | Meghalaya                   |                |
+-------+--------------------+-----------------------------+----------------+
| 75.   | GINRAF /2022/76    | **V. Rupa Saritha Reddy**   | 17/02/2023     |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Sree Narayana Nursing       |                |
|       |                    | College, Nellore            |                |
+-------+--------------------+-----------------------------+----------------+
| 76.   | GINRAF /2022/77    | **Dr. Puvaneswari. K**,     | 02/03/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | College of Applied Medical  |                |
|       |                    | Science, Bisha University,  |                |
|       |                    | Bisha, Kingdom of Saudi     |                |
|       |                    | Arabia                      |                |
+-------+--------------------+-----------------------------+----------------+
| 77.   | GINRAF /2022/78    | **Mr. Balram Kaaliya**,     | 03/03/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University, Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 78.   | GINRAF / 2022 / 79 | **S. Palaniammal.**,        | 14/03/2023     |
|       |                    |                             |                |
|       |                    | Nursing Tutor Grade-II,     |                |
|       |                    |                             |                |
|       |                    | College of Nursing,         |                |
|       |                    | Periyakulam, Govt. Theni    |                |
|       |                    | Medical College, Theni,     |                |
|       |                    | Tamilnadu                   |                |
+-------+--------------------+-----------------------------+----------------+
| 79.   | GINRAF / 2022 / 80 | **P Christena**,            | 16/03/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | KMC College of Nursing,     |                |
|       |                    | Trichy                      |                |
+-------+--------------------+-----------------------------+----------------+
| 80.   | GINRAF / 2022 / 81 | **Ms. Gauri Kishor          | 16/03/2023     |
|       |                    | Waghamare**,                |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Vijaysinh Mohite Patil      |                |
|       |                    | College of Nursing and      |                |
|       |                    | Medical Research Institute, |                |
|       |                    | Akluj                       |                |
+-------+--------------------+-----------------------------+----------------+
| 81.   | GINRAF / 2022 / 82 | **Gundluru Aruna**,         | 28/03/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Sree Narayana Nursing       |                |
|       |                    | College, Nellore, AP        |                |
+-------+--------------------+-----------------------------+----------------+
| 82.   | GINRAF / 2022 / 83 | **Veereshkumar Topalaka**,  | 30/03/2023     |
|       |                    |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | KLES' Institute of Nursing  |                |
|       |                    | Sciences, Hubli, Karnataka  |                |
+-------+--------------------+-----------------------------+----------------+
| 83.   | GINRAF / 2022 / 84 | **Palagani Nagaraju**,      | 05/04/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor & Ph.D. |                |
|       |                    | Scholar,                    |                |
|       |                    |                             |                |
|       |                    | Sundar Lal Rama College of  |                |
|       |                    | Nursing, Akbarpur, Uttar    |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 84.   | GINRAF / 2022 / 85 | **Prof. Saish Rajamani**,   | 19/04/2023     |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | DRIEMS School and College   |                |
|       |                    | of Nursing, Periyavaikkal   |                |
|       |                    | Street, Muthuthevanpatti,   |                |
|       |                    | Theni, TN                   |                |
+-------+--------------------+-----------------------------+----------------+
| 85.   | GINRAF / 2022 / 86 | **Dr. Suja Shamili G**,     | 25/04/2023     |
|       |                    |                             |                |
|       |                    | Principal,                  |                |
|       |                    |                             |                |
|       |                    | Dr. Mallela Ramaiah College |                |
|       |                    | of Nursing, Nellore, Andhra |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 86.   | GINRAF / 2022 / 87 | **Aayushi Mahat**           | 03/05/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Anandaloke Institute of     |                |
|       |                    | Nursing Education,          |                |
|       |                    | Siliguri, West Bengal       |                |
+-------+--------------------+-----------------------------+----------------+
| 87.   | GINRAF / 2022 / 88 | **Mr. Pradeep Kumar         | 05/05/2023     |
|       |                    | Yadav**,                    |                |
|       |                    |                             |                |
|       |                    | Nursing Tutor /             |                |
|       |                    | Demonstrator                |                |
|       |                    |                             |                |
|       |                    | (Faculty of Nursing), Uttar |                |
|       |                    | Pradesh University of       |                |
|       |                    | Medical Science, Saifai,    |                |
|       |                    | Etawah, UP                  |                |
+-------+--------------------+-----------------------------+----------------+
| 88.   | GINRAF / 2022 / 89 | **Mrs. Ranjana Pal**,       | 05/05/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Anandaloke Institute of     |                |
|       |                    | Nursing Education,          |                |
|       |                    | Siliguri, West Bengal       |                |
+-------+--------------------+-----------------------------+----------------+
| 89.   | GINRAF / 2022 / 90 | **Ms. Shweta Shindogi**,    | 09/05/2023     |
|       |                    |                             |                |
|       |                    | Community Health Officer,   |                |
|       |                    |                             |                |
|       |                    | National Health Mission,    |                |
|       |                    | Health and Family Welfare,  |                |
|       |                    | Dharwad, Karnataka          |                |
+-------+--------------------+-----------------------------+----------------+
| 90.   | GINRAF / 2022 / 91 | **Ms. Amrita**,             | 09/05/2023     |
|       |                    |                             |                |
|       |                    | Staff Nurse,                |                |
|       |                    |                             |                |
|       |                    | Jamia Hamdard               |                |
+-------+--------------------+-----------------------------+----------------+
| 91.   | GINRAF / 2022 / 92 | **Mr. Anoopjith G Nair**,   | 10/05/2023     |
|       |                    |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | Institute of Nursing        |                |
|       |                    | Education,                  |                |
|       |                    |                             |                |
|       |                    | School of Medical           |                |
|       |                    | Education, CPAS,            |                |
|       |                    | Nedumkandam, Idukki, Kerala |                |
+-------+--------------------+-----------------------------+----------------+
| 92.   | GINRAF / 2022 / 93 | **Mrs. Umavalli S**,        | 10/05/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Narayana Hrudayalaya        |                |
|       |                    | Foundations, Bangalore      |                |
+-------+--------------------+-----------------------------+----------------+
| 93.   | GINRAF / 2022 / 94 | **Ms. Monal M Parmar**,     | 12/05/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Shashikala Dhansukhlal      |                |
|       |                    | Dadarwala College of        |                |
|       |                    | Nursing, Dahod, Gujarat     |                |
+-------+--------------------+-----------------------------+----------------+
| 94.   | GINRAF / 2022 / 95 | **Monika Gautam**           | 20/05/2023     |
|       |                    |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Ved Nursing College (PIMS)  |                |
|       |                    | Baroli, Panipat , Haryana   |                |
+-------+--------------------+-----------------------------+----------------+
| 95.   | GINRAF / 2022 / 96 | **Dr. Sharad B Pandit**     | 20/05/2023     |
|       |                    |                             |                |
|       |                    | Asst. Professor & HOD INE,  |                |
|       |                    |                             |                |
|       |                    | Sir J J Hospital, Mumbai    |                |
+-------+--------------------+-----------------------------+----------------+
| 96.   | GINRAF / 2022 / 97 | **Mr. Vinayak Raosaheb      | 07/06/2023     |
|       |                    | Gunjal**,                   |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | M. V. P's Institute of      |                |
|       |                    | Nursing Education, Adgaon,  |                |
|       |                    | Nashik                      |                |
+-------+--------------------+-----------------------------+----------------+
| 97.   | GINRAF / 2022 / 98 | **Mrs. Bincy Varghese**,    | 09/06/2023     |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Sahara College of Nursing & |                |
|       |                    | Paramedical Sciences,       |                |
|       |                    | Lucknow, UP                 |                |
+-------+--------------------+-----------------------------+----------------+
| 98.   | GINRAF / 2022 / 99 | **Mrs. Rajeena MS**,        | 09/06/2023     |
|       |                    |                             |                |
|       |                    | Nurse Educator,             |                |
|       |                    |                             |                |
|       |                    | King Faisal Hospital,       |                |
|       |                    | Makkah                      |                |
+-------+--------------------+-----------------------------+----------------+
| 99.   | GINRAF / 2022 /    | **Mrs. Linda Varghese**,    | 09/06/2023     |
|       | 100                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Amala College of Nursing,   |                |
|       |                    | Thrissur, Kerala            |                |
+-------+--------------------+-----------------------------+----------------+
| 100.  | GINRAF / 2022 /    | **Prof. Latha A.**          | 13/06/2023     |
|       | 101                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Narayana College of         |                |
|       |                    | Nursing, Nellore, AP        |                |
+-------+--------------------+-----------------------------+----------------+
| 101.  | GINRAF / 2022 /    | **Mr. Sudip Das**,          | 16/06/2023     |
|       | 102                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Gitaram College Of Nursing, |                |
|       |                    | Radharghat, Berhampore,     |                |
|       |                    | Murshidabad, West Bengal    |                |
+-------+--------------------+-----------------------------+----------------+
| 102.  | GINRAF / 2022 /    | **Mrs. Meena Rupkumar       | 16/06/2023     |
|       | 103                | Pagarwar**,                 |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | College of Nursing, Govt.   |                |
|       |                    | Medical College, Nagpur,    |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 103.  | GINRAF / 2022 /    | **Ms. Tania Sharma**,       | 17/06/2023     |
|       | 104                |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing,         |                |
|       |                    | Moradabad, Uttar Pradesh    |                |
+-------+--------------------+-----------------------------+----------------+
| 104.  | GINRAF / 2022 /    | **Ms. Sangeeta Pal**,       | 19/06/2023     |
|       | 105                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | University, College of      |                |
|       |                    | Nursing, Moradabad, UP      |                |
+-------+--------------------+-----------------------------+----------------+
| 105.  | GINRAF / 2022 /    | **Mrs. Chaitanya            | 19/06/2023     |
|       | 106                | Ellandula**,                |                |
|       |                    |                             |                |
|       |                    | Principal,                  |                |
|       |                    |                             |                |
|       |                    | Rohini College of Nursing,  |                |
|       |                    | Hunter Road, Hanamkonda     |                |
+-------+--------------------+-----------------------------+----------------+
| 106.  | GINRAF / 2022 /    | **Mr. Vedamurthy R**,       | 19/06/2023     |
|       | 107                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | University, College of      |                |
|       |                    | Nursing, Moradabad, UP      |                |
+-------+--------------------+-----------------------------+----------------+
| 107.  | GINRAF / 2022 /    | **Ms. Jhansi Rani S**       | 23/06/2023     |
|       | 108                |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | St Philomena's college of   |                |
|       |                    | nursing, Bangalore          |                |
+-------+--------------------+-----------------------------+----------------+
| 108.  | GINRAF / 2022 /    | **Mohammed Rizwan**         | 29/06/2023     |
|       | 109                |                             |                |
|       |                    | Nursing Lecturer,           |                |
|       |                    |                             |                |
|       |                    | Mayurakshi college of       |                |
|       |                    | Nursing, Jodhpur            |                |
+-------+--------------------+-----------------------------+----------------+
| 109.  | GINRAF / 2022 /    | **Mrs. Vishakha Wagh**,     | 04/07/2023     |
|       | 110                |                             |                |
|       |                    | Vice-Principal,             |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 110.  | GINRAF / 2022 /    | **Ms. Ashwini Vaidya**,     | 04/07/2023     |
|       | 111                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 111.  | GINRAF / 2022 /    | **Ms. Jacinth Dhaya Ch.**   | 04/07/2023     |
|       | 112                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 112.  | GINRAF / 2022 /    | **Ms. Manorama Kashyap**,   | 04/07/2023     |
|       | 113                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 113.  | GINRAF / 2022 /    | **Mr. Shivanand Biradar**,  | 04/07/2023     |
|       | 114                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 114.  | GINRAF / 2022 /    | **Ms. Ashwini Mankar**,     | 04/07/2023     |
|       | 115                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 115.  | GINRAF / 2022 /    | **Mr. Piyush Wagh**,        | 04/07/2023     |
|       | 116                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 116.  | GINRAF / 2022 /    | **Ms. Hemangi Murkute**,    | 04/07/2023     |
|       | 117                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 117.  | GINRAF / 2022 /    | **Ms. Sumaiya Shaikh**,     | 04/07/2023     |
|       | 118                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 118.  | GINRAF / 2022 /    | **Ms. Jayashri Jadhav**,    | 04/07/2023     |
|       | 119                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College Of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 119.  | GINRAF / 2022 /    | **Dr. Anjalatchi            | 05/07/2023     |
|       | 120                | Muthukumaran**,             |                |
|       |                    |                             |                |
|       |                    | Prof & Vice Principal,      |                |
|       |                    |                             |                |
|       |                    | Era College of Nursing      |                |
|       |                    | Faculty, Sarfrazganj, Era   |                |
|       |                    | University, Lucknow, UP     |                |
+-------+--------------------+-----------------------------+----------------+
| 120.  | GINRAF / 2022 /    | **Ms. Pratima Sukumar       | 27/07/2023     |
|       | 121                | Nirmal**,                   |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Vasantrao Naik Institute Of |                |
|       |                    | Nursing, Jalna, Sanjay      |                |
|       |                    | Nagar, Old Jalna,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 121.  | GINRAF / 2022 /    | **Sukeshini Digambar        | 01/08/2023     |
|       | 122                | Suke**,                     |                |
|       |                    |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | Vasantrao Naik Institute of |                |
|       |                    | Nursing, Jalna, Maharashtra |                |
+-------+--------------------+-----------------------------+----------------+
| 122.  | GINRAF / 2022 /    | **Mrs. Jane Mathew**,       | 07/08/2023     |
|       | 123                |                             |                |
|       |                    | Nursing Officer,            |                |
|       |                    |                             |                |
|       |                    | All India Institute of      |                |
|       |                    | Medical Sciences, New Delhi |                |
+-------+--------------------+-----------------------------+----------------+
| 123.  | GINRAF / 2022 /    | **Ms. Shiny Maria John**,   | 07/08/2023     |
|       | 124                |                             |                |
|       |                    | Registered Nurse (RN),      |                |
|       |                    |                             |                |
|       |                    | Croydon University          |                |
|       |                    | Hospital, NHS Trust, UK     |                |
+-------+--------------------+-----------------------------+----------------+
| 124.  | GINRAF / 2022 /    | **Miss. Rashmi Vishwas      | 19/08/2023     |
|       | 125                | Tembhurne**,                |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon            |                |
+-------+--------------------+-----------------------------+----------------+
| 125.  | GINRAF / 2022 /    | **Ms. Shalini H. Moon**,    | 02/09/2023     |
|       | 126                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Smt. Radhikabai Meghe       |                |
|       |                    | Memorial College of         |                |
|       |                    | Nursing, DMIHER, Sawangi    |                |
|       |                    | (Meghe), Wardha             |                |
+-------+--------------------+-----------------------------+----------------+
| 126.  | GINRAF / 2022 /    | **Mr. Abhishek Prasad**,    | 06/09/2023     |
|       | 127                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Maheshwari Nursing and      |                |
|       |                    | Paramedical Institute,      |                |
|       |                    | Aligarh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 127.  | GINRAF / 2022 /    | **Ms. Sweta Motavar**,      | 06/09/2023     |
|       | 128                |                             |                |
|       |                    | Registered Staff Nurse,     |                |
|       |                    |                             |                |
|       |                    | Aadicura Superspeciality    |                |
|       |                    | Hospital, Vadodara          |                |
+-------+--------------------+-----------------------------+----------------+
| 128.  | GINRAF / 2022 /    | **Prof. Siyona Amol         | 06/09/2023     |
|       | 129                | Mohandas**,                 |                |
|       |                    |                             |                |
|       |                    | Professor and Principal,    |                |
|       |                    |                             |                |
|       |                    | Sdvs Sangha's Annapoorna    |                |
|       |                    | Institute of Nursing,       |                |
|       |                    | Sankeshwar, Karnataka       |                |
+-------+--------------------+-----------------------------+----------------+
| 129.  | GINRAF / 2023 /    | **Mr. Allan Singh**,        | 19/09/2023     |
|       | 130                |                             |                |
|       |                    | P.G. Tutor,                 |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing, TMU,    |                |
|       |                    | Moradabad, Uttar Pradesh,   |                |
|       |                    | India                       |                |
+-------+--------------------+-----------------------------+----------------+
| 130.  | GINRAF / 2023 /    | **Ms. Insha Rehman**,       | 27/09/2023     |
|       | 131                |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | Rajiv Gandhi College of     |                |
|       |                    | Nursing, Jammu, Anantnag,   |                |
|       |                    | Kashmir                     |                |
+-------+--------------------+-----------------------------+----------------+
| 131.  | GINRAF / 2023 /    | **Ms. Lemi Mary Lamare**,   | 27/09/2023     |
|       | 132                |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Bel-Air College of Nursing  |                |
|       |                    | Panchgani, Lawmusiang       |                |
|       |                    | Nangbah, West Jaintia       |                |
|       |                    | Hills, Meghalaya            |                |
+-------+--------------------+-----------------------------+----------------+
| 132.  | GINRAF / 2023 /    | **Mrs. Kriss Ren            | 28/09/2023     |
|       | 133                | Varghese**,                 |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Oxford College of Nursing   |                |
|       |                    | Sciences, Bengaluru,        |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 133.  | GINRAF / 2023 /    | **Mr. Deepak Suwalka**,     | 28/09/2023     |
|       | 134                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Faculty of Nursing, Rama    |                |
|       |                    | University, Kanpur, UP      |                |
+-------+--------------------+-----------------------------+----------------+
| 134.  | GINRAF / 2023 /    | **Mrs. Syed Sumiya**        | 28/09/2023     |
|       | 135                |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Faculty of Nursing, Rama    |                |
|       |                    | University, Kanpur, UP      |                |
+-------+--------------------+-----------------------------+----------------+
| 135.  | GINRAF / 2023 /    | **Hrishikesh Dilip Gore**,  | 29/09/2023     |
|       | 136                |                             |                |
|       |                    | Staff Nurse,                |                |
|       |                    |                             |                |
|       |                    | PCMC's YCM Hospital, Pune   |                |
+-------+--------------------+-----------------------------+----------------+
| 136.  | GINRAF / 2023 /    | **Prof. Thushara Thomas**   | 02/10/2023     |
|       | 137                |                             |                |
|       |                    | Vice Principal,             |                |
|       |                    |                             |                |
|       |                    | Vinayaka College of         |                |
|       |                    | Nursing. Sultan Bathery,    |                |
|       |                    | Kerala                      |                |
+-------+--------------------+-----------------------------+----------------+
| 137.  | GINRAF / 2023 /    | **Annangi. Mercy Rani**     | 10/10/2023     |
|       | 138                |                             |                |
|       |                    | Asst. Professor/Hospital    |                |
|       |                    | Administrator               |                |
|       |                    |                             |                |
|       |                    | ACSR Govt Medical College,  |                |
|       |                    | GGH, Nellore. Andhra        |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 138.  | GINRAF / 2023 /    | **Mrs. Pooja Rana**         | 21/10/2023     |
|       | 139                |                             |                |
|       |                    | Post Graduate Tutor,        |                |
|       |                    |                             |                |
|       |                    | Teerthankar Mahaveer        |                |
|       |                    | College of Nursing, TMU,    |                |
|       |                    | Moradabad, UP               |                |
+-------+--------------------+-----------------------------+----------------+
| 139.  | GINRAF / 2023 /    | **Ms. Preeti Jaiswal**      | 21/10.2023     |
|       | 140                |                             |                |
|       |                    | Post Graduate Tutor,        |                |
|       |                    |                             |                |
|       |                    | Teerthankar Mahaveer        |                |
|       |                    | College of Nursing, TMU,    |                |
|       |                    | Moradabad, UP               |                |
+-------+--------------------+-----------------------------+----------------+
| 140.  | GINRAF / 2023 /    | **Mr. Panduranga            | 21/10/2023     |
|       | 141                | Sankappanavar**             |                |
|       |                    |                             |                |
|       |                    | Community Health Officer,   |                |
|       |                    |                             |                |
|       |                    | Health and Wellness Centre, |                |
|       |                    | Neeralakeri, Kakanur PHC,   |                |
|       |                    | Badami Taluka, Bagalkote    |                |
|       |                    | district. Karnataka         |                |
+-------+--------------------+-----------------------------+----------------+
| 141.  | GINRAF / 2023 /    | **Ms. Arti Singh**          | 31/10/2023     |
|       | 142                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing,         |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | University, Moradabad,      |                |
|       |                    | Uttar Pradesh, India        |                |
+-------+--------------------+-----------------------------+----------------+
| 142.  | GINRAF / 2023 /    | **Ms. Dharti Patel**        | 08/11/2023     |
|       | 143                |                             |                |
|       |                    | Assistant Professor         |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Parul University. Vadodara, |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 143.  | GINRAF / 2023 /    | **Prof. Vijimol**           | 08/11/2023     |
|       | 144                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing,         |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | University, Moradabad,      |                |
|       |                    | Uttar Pradesh, India        |                |
+-------+--------------------+-----------------------------+----------------+
| 144.  | GINRAF / 2023 /    | **Ms. Juby Rose Kuriakose** | 09/12/2023     |
|       | 145                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | St. Philomena's College of  |                |
|       |                    | Nursing, Bengaluru,         |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 145.  | GINRAF / 2023 /    | **Mr. Ramkumaru**,          | 15/12/2023     |
|       | 146                |                             |                |
|       |                    | Nursing Officer,            |                |
|       |                    |                             |                |
|       |                    | Indira Gandhi Medical       |                |
|       |                    | College & Research          |                |
|       |                    | Institute, Pondicherry      |                |
+-------+--------------------+-----------------------------+----------------+
| 146.  | GINRAF / 2023 /    | **Ms. Pooja Bhakuni**,      | 15/12/2023     |
|       | 147                |                             |                |
|       |                    | P.G Tutor,                  |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College Of Nursing, TMU,    |                |
|       |                    | Moradabad, Uttar Pradesh,   |                |
|       |                    | India                       |                |
+-------+--------------------+-----------------------------+----------------+
| 147.  | GINRAF / 2023 /    | **S Tongpangkokla Ozukum**, | 20/12/2023     |
|       | 148                |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | ANM School of Nursing,      |                |
|       |                    | Tuensang, Nagaland          |                |
+-------+--------------------+-----------------------------+----------------+
| 148.  | GINRAF / 2023 /    | **Prof. Manasi Mahesh       | 01/01/2024     |
|       | 149                | Rahane**,                   |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | D Y Patil College Of        |                |
|       |                    | Nursing, Nerul, Navi Mumbai |                |
+-------+--------------------+-----------------------------+----------------+
| 149.  | GINRAF / 2023 /    | **Dr. Lincy George**,       | 01/01/2024     |
|       | 150                |                             |                |
|       |                    | Vice-Principal, Professor   |                |
|       |                    | and HOD,                    |                |
|       |                    |                             |                |
|       |                    | Dr. B.R. Ambedkar Institute |                |
|       |                    | of Nursing, Bengaluru       |                |
+-------+--------------------+-----------------------------+----------------+
| 150.  | GINRAF / 2023 /    | **Mrs. Rashmi Ramji M. R**, | 01/01/2024     |
|       | 151                |                             |                |
|       |                    | Asst. Professor,            |                |
|       |                    |                             |                |
|       |                    | Dr. B.R. Ambedkar Institute |                |
|       |                    | of Nursing, Bengaluru       |                |
+-------+--------------------+-----------------------------+----------------+
| 151.  | GINRAF / 2023 /    | **Mrs. Thamizhselvi I**,    | 05/01/2024     |
|       | 152                |                             |                |
|       |                    | Nursing Officer,            |                |
|       |                    |                             |                |
|       |                    | IGMC&RI, Kathirkamam,       |                |
|       |                    | Puducherry                  |                |
+-------+--------------------+-----------------------------+----------------+
| 152.  | GINRAF / 2023 /    | **Ms. Ashvini Sumanbhai     | 13/01/2024     |
|       | 153                | Patel**                     |                |
|       |                    |                             |                |
|       |                    | Nursing Tutor               |                |
|       |                    |                             |                |
|       |                    | Sandra Shroff College of    |                |
|       |                    | Nursing, Vapi, Valsad,      |                |
|       |                    | Gujarat                     |                |
+-------+--------------------+-----------------------------+----------------+
| 153.  | GINRAF / 2024 /    | **Ms. Riwanka Khlem**,      | 18/01/2024     |
|       | 154                |                             |                |
|       |                    | Asst. Professor,            |                |
|       |                    |                             |                |
|       |                    | St. Joseph's Academy of     |                |
|       |                    | Nursing, Umtrew, Meghalaya  |                |
+-------+--------------------+-----------------------------+----------------+
| 154.  | GINRAF / 2024 /    | **Mrs. Arpita Mayur Koshti  | 28/01/2024     |
|       | 155                | Vikhe**                     |                |
|       |                    |                             |                |
|       |                    | Staff Nurse,                |                |
|       |                    |                             |                |
|       |                    | Govt Medical College,       |                |
|       |                    | Aurangabad, Maharashtra     |                |
+-------+--------------------+-----------------------------+----------------+
| 155.  | GINRAF / 2024 /    | **Dr. Priya Sharma**        | 06/02/2024     |
|       | 156                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Army College Of Nursing,    |                |
|       |                    | Jalandhar Cantt             |                |
+-------+--------------------+-----------------------------+----------------+
| 156.  | GINRAF / 2024 /    | **Dr. S. Sridevy**          | 06/02/2024     |
|       | 157                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Mother Theresa Post         |                |
|       |                    | Graduate and Research       |                |
|       |                    | Institute of Health         |                |
|       |                    | Sciences, Puducherry        |                |
+-------+--------------------+-----------------------------+----------------+
| 157.  | GINRAF / 2024 /    | **Ms. Disha U. Jondhale**,  | 12/02/2024     |
|       | 158                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | Bel-Air College of Nursing, |                |
|       |                    | Panchgani                   |                |
+-------+--------------------+-----------------------------+----------------+
| 158.  | GINRAF / 2024 /    | **Mrs. Firoz Zahra**,       | 25/02/2024     |
|       | 159                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Era University, Lucknow,    |                |
|       |                    | Uttar Pradesh               |                |
+-------+--------------------+-----------------------------+----------------+
| 159.  | GINRAF / 2024 /    | **Dr. Sheela. J**,          | 27/02/2024     |
|       | 160                |                             |                |
|       |                    | HOD-OBG Nursing,            |                |
|       |                    |                             |                |
|       |                    | R.V College of Nursing,     |                |
|       |                    | Bangalore, Karnataka        |                |
+-------+--------------------+-----------------------------+----------------+
| 160.  | GINRAF / 2024 /    | **Prof. N. Prabha**         | 06/03/2024     |
|       | 161                |                             |                |
|       |                    | Vice Principal              |                |
|       |                    |                             |                |
|       |                    | Karuna College of Nursing,  |                |
|       |                    | Vilayodi, Chittoor,         |                |
|       |                    | Palakkad, Kerala            |                |
+-------+--------------------+-----------------------------+----------------+
| 161.  | GINRAF / 2024 /    | **Mr. Manojkumar            | 07/03/2024     |
|       | 162                | Mariappan** NURSING OFFICER |                |
|       |                    |                             |                |
|       |                    | Zone D, 3rd Floor, Burjeel  |                |
|       |                    | Medical City Abudhabi       |                |
+-------+--------------------+-----------------------------+----------------+
| 162.  | GINRAF / 2024 /    | **Dr. Jasveen Kaur**        | 19/03/2024     |
|       | 163                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Government College of       |                |
|       |                    | Nursing, Patiala, Punjab    |                |
+-------+--------------------+-----------------------------+----------------+
| 163.  | GINRAF / 2024 /    | **Ms. Rehana Banoo**        | 20/03/2024     |
|       | 164                |                             |                |
|       |                    | Nursing Tutor               |                |
|       |                    |                             |                |
|       |                    | Govt Medical College Doda,  |                |
|       |                    | Jammu and Kashmir           |                |
+-------+--------------------+-----------------------------+----------------+
| 164.  | GINRAF / 2024 /    | **Ms. Rupa Ghosh**,         | 31/03/2024     |
|       | 165                |                             |                |
|       |                    | Professor (OBG Nursing),    |                |
|       |                    |                             |                |
|       |                    | Tripura Institute of        |                |
|       |                    | Paramedical Sciences,       |                |
|       |                    | Agartala, Tripura           |                |
+-------+--------------------+-----------------------------+----------------+
| 165.  | GINRAF / 2024 /    | **Ms Lincy Joseph**,        | 08/04/2024     |
|       | 166                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Department of OBG Nursing,  |                |
|       |                    | College of Nursing,         |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | University, Moradabad, UP   |                |
+-------+--------------------+-----------------------------+----------------+
| 166.  | GINRAF / 2024 /    | **Emmanuel Raju. Palla**,   | 12/04/2024     |
|       | 167                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Satyam College of Nursing,  |                |
|       |                    | Visakhapatnam, Andhra       |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 167.  | GINRAF / 2024 /    | **Tadvi Hemant V**          | 18/04/2024     |
|       | 168                |                             |                |
|       |                    | Assistant professor         |                |
|       |                    |                             |                |
|       |                    | Shree Swaminarayan Nursing  |                |
|       |                    | College, Kevadia Colony,    |                |
|       |                    | Narmada, Gujarat            |                |
+-------+--------------------+-----------------------------+----------------+
| 168.  | GINRAF / 2024 /    | **Ms. Khuraijam Menao       | 22/04/2024     |
|       | 169                | Devi**,                     |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 169.  | GINRAF / 2024 /    | **Ms. Thazhatan Nimmy       | 22/04/2024     |
|       | 170                | Varghese**,                 |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 170.  | GINRAF / 2024 /    | **Mr. Nirbhay Nagsen        | 22/04/2024     |
|       | 171                | Mahod**,                    |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 171.  | GINRAF / 2024 /    | **Mr. Prashik Baburao       | 22/04/2024     |
|       | 172                | Chavhan**,                  |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 172.  | GINRAF / 2024 /    | **Mr. Sagar Anil Masne**,   | 22/04/2024     |
|       | 173                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 173.  | GINRAF / 2024 /    | **Mr. Sanket Balakrushna    | 22/04/2024     |
|       | 174                | Shankapal**,                |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 174.  | GINRAF / 2024 /    | **Ms. Monali Manoj          | 22/04/2024     |
|       | 175                | Barsagade**,                |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 175.  | GINRAF / 2024 /    | **Ms. Smita Prabhudas       | 22/04/2024     |
|       | 176                | Pandey**,                   |                |
|       |                    |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 176.  | GINRAF / 2024 /    | **Ms. Swati Shantaram       | 22/04/2024     |
|       | 177                | Gadegone**,                 |                |
|       |                    |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 177.  | GINRAF / 2024 /    | **Ms. Manisha Yashavant     | 22/04/2024     |
|       | 178                | Kharat**,                   |                |
|       |                    |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 178.  | GINRAF / 2024 /    | **Mr. Sumit Suresh          | 24/04/2024     |
|       | 179                | Nirmal**,                   |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Mental (Psychiatric) Health |                |
|       |                    | Nursing,                    |                |
+-------+--------------------+-----------------------------+----------------+
| 179.  | GINRAF / 2022 /    | **Dr. Dilip Bhaskar         | 02/01/2022     |
|       | 180                | Patil**,                    |                |
|       |                    |                             |                |
|       |                    | Principal / Professor,      |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 180.  | GINRAF / 2022 /    | **Dr. Vikram Uddhav         | 04/01/2022     |
|       | 181                | Dhaneshwar**,               |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 181.  | GINRAF / 2022 /    | **Dr. Ruprekha Govind       | 06/01/2022     |
|       | 182                | Sankade**,                  |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 182.  | GINRAF / 2022 /    | **Dr. Arun Yashwant         | 10/01/2022     |
|       | 183                | Patil**,                    |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 183.  | GINRAF / 2022 /    | **Dr. Pankaj Tarachand      | 12/01/2022     |
|       | 184                | Sharma**,                   |                |
|       |                    |                             |                |
|       |                    | Reader,                     |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 184.  | GINRAF / 2022 /    | **Dr. Bharat Motising       | 16/01/2022     |
|       | 185                | Bais**,                     |                |
|       |                    |                             |                |
|       |                    | Professor (HOD),            |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 185.  | GINRAF / 2022 /    | **Dr. Manjusha Pradip       | 18/01/2022     |
|       | 186                | Garge**,                    |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 186.  | GINRAF / 2022 /    | **Dr. Madhu Jagdishprasad   | 21/01/2022     |
|       | 187                | Agrawal**,                  |                |
|       |                    |                             |                |
|       |                    | Professor (HOD),            |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 187.  | GINRAF / 2022 /    | **Dr. Pradeep R Garge**,    | 23/01/2022     |
|       | 188                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 188.  | GINRAF / 2022 /    | **Dr. Indrayani Nilesh      | 26/01/2022     |
|       | 189                | Badhe**,                    |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 189.  | GINRAF / 2022 /    | **Dr. Preeti Sunil          | 24/01/2022     |
|       | 190                | Shahare**,                  |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundatio,         |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 190.  | GINRAF / 2022 /    | **Dr. Sachin Dangal         | 27/01/2022     |
|       | 191                | Patil**,                    |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 191.  | GINRAF / 2022 /    | **Dr. Sunil Jagannath       | 02/02/2022     |
|       | 192                | Burase**,                   |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 192.  | GINRAF / 2022 /    | **Dr. Alkesh B Agrawal**,   | 05/02/2022     |
|       | 193                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 193.  | GINRAF / 2022 /    | **Dr. Priya Dadarao Wagh**, | 06/02/2022     |
|       | 194                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 194.  | GINRAF / 2022 /    | **Dr. Ashwini Shreepad      | 10/02/2022     |
|       | 195                | Kulkarni**,                 |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 195.  | GINRAF / 2022 /    | **Dr. Nilam Kailas          | 20/02/2022     |
|       | 196                | Jadhav**,                   |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 196.  | GINRAF / 2022 /    | **Dr. Suresh Vinayak        | 26/02/2022     |
|       | 197                | Thombare**,                 |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari Foundation,        |                |
|       |                    |                             |                |
|       |                    | Dr. Ulhas Patil             |                |
|       |                    | Homoeopathic Medical        |                |
|       |                    | College & Hospital,         |                |
|       |                    | Jalgaon, Maharashtra        |                |
+-------+--------------------+-----------------------------+----------------+
| 197.  | GINRAF / 2024 /    | **Mr. Santosh Hakatagi**,   | 28/04/2024     |
|       | 198                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | Dept. of Psychiatric        |                |
|       |                    | Nursing,                    |                |
|       |                    |                             |                |
|       |                    | Kushma College of Nursing,  |                |
|       |                    | Hubballi Karnataka, India   |                |
+-------+--------------------+-----------------------------+----------------+
| 198.  | GINRAF / 2024 /    | **Venila Thoudam**,         | 02/05/2024     |
|       | 199                |                             |                |
+-------+--------------------+-----------------------------+----------------+
| 199.  | GINRAF / 2024 /    | **Dr. Rakhi Gaur**,         | 10/05/2024     |
|       | 200                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | College of Nursing, All     |                |
|       |                    | India Institute of Medical  |                |
|       |                    | Sciences, Deoghar,          |                |
|       |                    | Jharkhand                   |                |
+-------+--------------------+-----------------------------+----------------+
| 200.  | GINRAF / 2024 /    | **Ms. Leena Dsouza**,       | 03/07/2024     |
|       | 201                |                             |                |
|       |                    | Nursing Lecturer,           |                |
|       |                    |                             |                |
|       |                    | Dept. of Psychiatric &      |                |
|       |                    | Mental Health Nursing, M.V. |                |
|       |                    | Shetty College of Nursing,  |                |
|       |                    | Mangalore                   |                |
+-------+--------------------+-----------------------------+----------------+
| 201.  | GINRAF / 2024 /    | **Jyoti Kathiar**,          | 04/07/2024     |
|       | 202                |                             |                |
|       |                    | Assistant Professor / PhD   |                |
|       |                    | Scholar,                    |                |
|       |                    |                             |                |
|       |                    | Vimla Nursing College,      |                |
|       |                    | Ramaipur, Kanpur Nagar      |                |
+-------+--------------------+-----------------------------+----------------+
| 202.  | GINRAF / 2024 /    | **Ms. Anuradha Wankhade**,  | 04/07/2024     |
|       | 203                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Dr. Panjabrao Deshmukh      |                |
|       |                    | Nursing Institute,          |                |
|       |                    | Amravati, Maharashtra       |                |
+-------+--------------------+-----------------------------+----------------+
| 203.  | GINRAF / 2024 /    | **Ms. Rubi Bhashkar         | 14/07/2024     |
|       | 204                | Pakmode**,                  |                |
|       |                    |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Bel-Air College of Nursing, |                |
|       |                    | Panchgani, Maharashtra      |                |
+-------+--------------------+-----------------------------+----------------+
| 204.  | GINRAF / 2024 /    | **Pratiksha Hanmant         | 16/07/2024     |
|       | 205                | Shingate**,                 |                |
|       |                    |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Bel Air College of Nursing, |                |
|       |                    | Panchgani, Satara           |                |
+-------+--------------------+-----------------------------+----------------+
| 205.  | GINRAF / 2024 /    | **Prof. Praveen Loni**,     | 16/07/2024     |
|       | 206                |                             |                |
|       |                    | Professor & HOD             |                |
|       |                    |                             |                |
|       |                    | Mental Health Nursing, ETCM |                |
|       |                    | College of Nursing, Kolar,  |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 206.  | GINRAF / 2024 /    | **Mr. Shatrughan Pareek**   | 18/07/2024     |
|       | 207                |                             |                |
|       |                    | Sr. Nursing Superintendent  |                |
|       |                    |                             |                |
|       |                    | Indian Railway Health       |                |
|       |                    | Services, Bikaner,          |                |
|       |                    | Rajasthan, India            |                |
+-------+--------------------+-----------------------------+----------------+
| 207.  | GINRAF / 2024 /    | **Sandeep Kumar Dudi**,     | 06/08/2024     |
|       | 208                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Shree Dev Bhoomi Institute  |                |
|       |                    | of Education Science and    |                |
|       |                    | Technology, SDBIT, Dehradun |                |
+-------+--------------------+-----------------------------+----------------+
| 208.  | GINRAF / 2024 /    | **Ms. Bhargavi Patel**,     | 06/08/2024     |
|       | 209                |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | KD Institute of Nursing     |                |
|       |                    | Science                     |                |
+-------+--------------------+-----------------------------+----------------+
| 209.  | GINRAF / 2024 /    | **Bimitha Cyriac**,         | 08/08/2024     |
|       | 210                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | Samaritan College of        |                |
|       |                    | Nursing, Kizhakkambalam,    |                |
|       |                    | Pazhanganad, Kochi, Kerala  |                |
+-------+--------------------+-----------------------------+----------------+
| 210.  | GINRAF / 2024 /    | **Mrs. Chandra Prabha       | 14/08/2024     |
|       | 211                | Joshi**,                    |                |
|       |                    |                             |                |
|       |                    | P.G. Tutor,                 |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College Of Nursing, TMU,    |                |
|       |                    | Moradabad, Uttar Pradesh    |                |
+-------+--------------------+-----------------------------+----------------+
| 211.  | GINRAF / 2024 /    | **Ms. Beaula William Shu**, | 22/08/2024     |
|       | 212                |                             |                |
|       |                    | Sir H N Reliance Foundation |                |
|       |                    | Hospital and Research       |                |
|       |                    | Centre College of Nursing,  |                |
|       |                    | Mumbai                      |                |
+-------+--------------------+-----------------------------+----------------+
| 212.  | GINRAF / 2024 /    | **Mrs. Priyanka Devi**,     | 13/09/2024     |
|       | 213                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Army College of Nursing,    |                |
|       |                    | Jalandhar Cantt.            |                |
+-------+--------------------+-----------------------------+----------------+
| 213.  | GINRAF / 2024 /    | **Abhilasha Tiwari**,       | 29/09/2024     |
|       | 214                |                             |                |
|       |                    | Clinical Tutor,             |                |
|       |                    |                             |                |
|       |                    | College of Nursing,         |                |
|       |                    | Rajendra Institute of       |                |
|       |                    | Medical Sciences, Ranchi,   |                |
|       |                    | Jharkhand                   |                |
+-------+--------------------+-----------------------------+----------------+
| 214.  | GINRAF / 2024 /    | **Dr. Jeya Beulah D**,      | 06/10/2024     |
|       | 215                |                             |                |
|       |                    | HOD-Dept of Community       |                |
|       |                    | Health Nursing,             |                |
|       |                    |                             |                |
|       |                    | SCPM College of Nursing and |                |
|       |                    | Paramedical Sciences,       |                |
|       |                    | Haripur, Gonda, Uttar       |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 215.  | GINRAF / 2024 /    | **Rakhi**,                  | 21/10/2024     |
|       | 216                |                             |                |
|       |                    | PG Tutor,                   |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing, TMU,    |                |
|       |                    | Moradabad, UP               |                |
+-------+--------------------+-----------------------------+----------------+
| 216.  | GINRAF / 2024 /    | **Ms. Monika Sharma**,      | 28/10/2024     |
|       | 217                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Faculty of Nursing,         |                |
|       |                    | Galgotias University, Uttar |                |
|       |                    | Pradesh, India              |                |
+-------+--------------------+-----------------------------+----------------+
| 217.  | GINRAF / 2024 /    | **Dr. Yogalakshmi S**,      | 27/11/2024     |
|       | 218                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Anurag University,          |                |
|       |                    | Hyderabad, Telangana        |                |
+-------+--------------------+-----------------------------+----------------+
| 218.  | GINRAF / 2024 /    | **Mr. Kumar Shree Harsha S  | 27/11/2024     |
|       | 219                | S**,                        |                |
|       |                    |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | ESIC College of Nursing,    |                |
|       |                    | Kalaburagi, Karnataka       |                |
+-------+--------------------+-----------------------------+----------------+
| 219.  | GINRAF / 2024 /    | **Mrs. Annie Caroline W**,  | 28/11/2024     |
|       | 220                |                             |                |
|       |                    | Nursing Officer,            |                |
|       |                    |                             |                |
|       |                    | Thiruvallur, Government     |                |
|       |                    | Medical College and         |                |
|       |                    | Hospital, Tamilnadu         |                |
+-------+--------------------+-----------------------------+----------------+
| 220.  | GINRAF / 2024 /    | **Ms. Nitika Sharma**,      | 04/12/2024     |
|       | 221                |                             |                |
|       |                    | PG Tutor,                   |                |
|       |                    |                             |                |
|       |                    | Faculty of Nursing, SGT     |                |
|       |                    | University, Gurugram        |                |
+-------+--------------------+-----------------------------+----------------+
| 221.  | GINRAF / 2024 /    | **Mrs. Deepika Sethi**,     | 09/12/2024     |
|       | 222                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Gandhi Memorial National    |                |
|       |                    | College of Nursing, Ambala  |                |
|       |                    | Cantt, Haryana              |                |
+-------+--------------------+-----------------------------+----------------+
| 222.  | GINRAF / 2024 /    | **Mr. Gaurav Swami**,       | 09/12/2024     |
|       | 223                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Ghraisoni university,       |                |
|       |                    | saikheda                    |                |
+-------+--------------------+-----------------------------+----------------+
| 223.  | GINRAF / 2024 /    | **Dr. V G Veeresh**,        | 09/12/2024     |
|       | 224                |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | Government College of       |                |
|       |                    | Nursing, KMCRI (Former      |                |
|       |                    | KIMS) Vidyanagar, Hubballi, |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 224.  | GINRAF / 2024 /    | **Dr. B. Vanaja Kumari**,   | 28/12/2024     |
|       | 225                |                             |                |
|       |                    | Principal,                  |                |
|       |                    |                             |                |
|       |                    | Narayana College of         |                |
|       |                    | Nursing, Nellore, Andhra    |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 225.  | GINRAF / 2025 /    | **Prof. Takhellambam        | 17/01/2025     |
|       | 226                | Kiranmala**,                |                |
|       |                    |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing, |                |
|       |                    | Vadodara, Gujarat           |                |
+-------+--------------------+-----------------------------+----------------+
| 226.  | GINRAF / 2025 /    | **Mrs. Niveditha K N**,     | 17/01/2025     |
|       | 227                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Sri Sathya Sai Institute of |                |
|       |                    | Higher Medical              |                |
|       |                    | Sciences-College of         |                |
|       |                    | Nursing, Bangalore.         |                |
+-------+--------------------+-----------------------------+----------------+
| 227.  | GINRAF / 2025 /    | **Mrs. Priyanka Masih**,    | 17/01/2025     |
|       | 228                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Teerthanker Mahaveer        |                |
|       |                    | College of Nursing,         |                |
|       |                    | Moradabad, UP               |                |
+-------+--------------------+-----------------------------+----------------+
| 228.  | GINRAF / 2025 /    | **Dr. Nutan Prakash         | 17/01/2025     |
|       | 229                | Makasare**,                 |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | College of Nursing,         |                |
|       |                    | Government Medical College, |                |
|       |                    | Nagpur                      |                |
+-------+--------------------+-----------------------------+----------------+
| 229.  | GINRAF / 2025 /    | **Prof. Albin Joseph**,     | 22/01/2025     |
|       | 230                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Dhaman Health Assurance     |                |
|       |                    | Hospitals, Kuwait           |                |
+-------+--------------------+-----------------------------+----------------+
| 230.  | GINRAF / 2025 /    | **Ms. Akhila Wilson**,      | 23/01/2025     |
|       | 231                |                             |                |
|       |                    | Asst. Professor,            |                |
|       |                    |                             |                |
|       |                    | Khyati College of Nursing,  |                |
|       |                    | Ahmedabad                   |                |
+-------+--------------------+-----------------------------+----------------+
| 231.  | GINRAF / 2025 /    | **Dr. Vipul Daniel          | 29/01/2025     |
|       | 232                | Adbale**,                   |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Dr. Naikwadi College of     |                |
|       |                    | Nursing, Sinnar, Nashik     |                |
+-------+--------------------+-----------------------------+----------------+
| 232.  | GINRAF / 2025 /    | **Shri. Sachin              | 05/02/2025     |
|       | 233                | Paramashetti**,             |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Government College of       |                |
|       |                    | Nursing, BIMS, Belagavi,    |                |
|       |                    | Karnataka                   |                |
+-------+--------------------+-----------------------------+----------------+
| 233.  | GINRAF / 2025 /    | **Ms. Manjusha Gulabrao     | 05/02/2025     |
|       | 234                | Mahakarkar**,               |                |
|       |                    |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | SRMM College of Nursing,    |                |
|       |                    | Sawangi Meghe, Wardha,      |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 234.  | GINRAF / 2025 /    | **Mrs. Steffy Abraham**,    | 08/02/2025     |
|       | 235                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing  |                |
+-------+--------------------+-----------------------------+----------------+
| 235.  | GINRAF / 2025 /    | **Ms. Surbhi Damor**,       | 12/02/2025     |
|       | 236                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing  |                |
+-------+--------------------+-----------------------------+----------------+
| 236.  | GINRAF / 2025 /    | **Patil Abhilash            | 13/02/2025     |
|       | 237                | Rajendra**,                 |                |
|       |                    |                             |                |
|       |                    | Clinical Instructor,        |                |
|       |                    |                             |                |
|       |                    | Parul Institute of Nursing  |                |
+-------+--------------------+-----------------------------+----------------+
| 237.  | GINRAF / 2025 /    | **Mr. Sawan Joshi**,        | 16/02/2025     |
|       | 238                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Arogyam Nursing College,    |                |
|       |                    | Roorkee, Uttarakhand        |                |
+-------+--------------------+-----------------------------+----------------+
| 238.  | GINRAF / 2025 /    | **Ms. Ritika Rocque**,      | 19/02/2025     |
|       | 239                |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | College of Nursing, AIIMS   |                |
|       |                    | Raipur, Raipur              |                |
+-------+--------------------+-----------------------------+----------------+
| 239.  | GINRAF / 2025 /    | **Prof. Jenishia M**,       | 27/02/2025     |
|       | 240                |                             |                |
|       |                    | Vice Principal,             |                |
|       |                    |                             |                |
|       |                    | Christian College of        |                |
|       |                    | Nursing, Bangalore          |                |
+-------+--------------------+-----------------------------+----------------+
| 240.  | GINRAF / 2025 /    | **Dr. Bhartendra Sharma**,  | 24/04/2025     |
|       | 241                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Mahatma Gandhi Nursing      |                |
|       |                    | College, Mahatma Gandhi     |                |
|       |                    | university of Medical       |                |
|       |                    | Sciences and                |                |
|       |                    | Technology,MGUMST, Jaipur,  |                |
|       |                    | Rajasthan                   |                |
+-------+--------------------+-----------------------------+----------------+
| 241.  | GINRAF / 2025 /    | **Dr. Sukhbir Kaur**,       | 24/04/2025     |
|       | 242                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | SGRD College of Nursing,    |                |
|       |                    | SGRD University of Health   |                |
|       |                    | Sciences, Amritsar          |                |
+-------+--------------------+-----------------------------+----------------+
| 242.  | GINRAF / 2025 /    | **Prof. Alphonsa Matthew**, | 24/04/2025     |
|       | 243                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Naincy College of Nursing,  |                |
|       |                    | Uttarakhand                 |                |
+-------+--------------------+-----------------------------+----------------+
| 243.  | GINRAF / 2025 /    | **Mr. Rahul Kumar**,        | 26/05/2025     |
|       | 244                |                             |                |
|       |                    | Nursing Officer,            |                |
|       |                    |                             |                |
|       |                    | ESIC Hospital, Sarojini     |                |
|       |                    | Nagar, Lucknow              |                |
+-------+--------------------+-----------------------------+----------------+
| 244.  | GINRAF / 2025 /    | **Dr. Rajendra Kumar        | 09/06/2025     |
|       | 245                | Jinjwaria**,                |                |
|       |                    |                             |                |
|       |                    | Nursing Tutor,              |                |
|       |                    |                             |                |
|       |                    | College of Nursing,         |                |
|       |                    | Institute of Medical        |                |
|       |                    | Science, Banaras Hindu      |                |
|       |                    | University (BHU), Varanasi, |                |
|       |                    | UP, India                   |                |
+-------+--------------------+-----------------------------+----------------+
| 245.  | GINRAF / 2025 /    | **Prof. Shiji E. T**,       | 16/06/2025     |
|       | 246                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Jagadguru Shankaracharya    |                |
|       |                    | College of Nursing, Raipur  |                |
+-------+--------------------+-----------------------------+----------------+
| 246.  | GINRAF / 2025 /    | **Dr. Vijayalakshmi Gopalan | 23/06/2025     |
|       | 247                | Nair**,                     |                |
|       |                    |                             |                |
|       |                    | Nurse Educator              |                |
|       |                    |                             |                |
|       |                    | Mental Health Counsellor,   |                |
|       |                    | Freelancer                  |                |
+-------+--------------------+-----------------------------+----------------+
| 247.  | GINRAF / 2025 /    | **Dr. D. Sasikala**,        | 02/07/2025     |
|       | 248                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Apollo College of Nursing,  |                |
|       |                    | Chennai                     |                |
+-------+--------------------+-----------------------------+----------------+
| 248.  | GINRAF / 2025 /    | **Sumaiya Salim Sheikh**,   | 21/07/2025     |
|       | 249                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 249.  | GINRAF / 2025 /    | **Monali Manoj Barsagade**  | 21/07/2025     |
|       | 250                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 250.  | GINRAF / 2025 /    | **Ms. Malathi Sakthivel**   | 21/07/2025     |
|       | 250                |                             |                |
|       |                    | Associate Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari college of         |                |
|       |                    | nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 251.  | GINRAF / 2025 /    | **Ms. Snehal Vishwanath     | 21/07/2025     |
|       | 251                | Jambhulkar**,               |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 252.  | GINRAF / 2025 /    | **Sanket Balkrishna         | 21/07/2025     |
|       | 251                | Shankpal**                  |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 253.  | GINRAF / 2025 /    | **Swati Shantaram           | 21/07/2025     |
|       | 252                | Gadegone**,                 |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 254.  | GINRAF / 2025 /    | **Priyanka Diliprao         | 21/07/2025     |
|       | 253                | Gawai**,                    |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 255.  | GINRAF / 2025 /    | **Smita Prabhudas Pande**,  | 21/07/2025     |
|       | 254                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 256.  | GINRAF / 2025 /    | **Kiran Kishor Patil**,     | 21/07/2025     |
|       | 255                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 257.  | GINRAF / 2025 /    | **Priyanka Gadekar**,       | 21/07/2025     |
|       | 256                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 258.  | GINRAF / 2025 /    | **Sunita Mirpagare**,       | 21/07/2025     |
|       | 257                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 259.  | GINRAF / 2025 /    | **Samruddhi Anant           | 21/07/2025     |
|       | 258                | Awasare**,                  |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Godavari College of         |                |
|       |                    | Nursing, Jalgaon,           |                |
|       |                    | Maharashtra                 |                |
+-------+--------------------+-----------------------------+----------------+
| 260.  | GINRAF / 2025 /    | **Prof. Shivaprasad B       | 31/07/2025     |
|       | 259                | Halemani**,                 |                |
|       |                    |                             |                |
|       |                    | Vice Principal,             |                |
|       |                    |                             |                |
|       |                    | Maharashtra Education       |                |
|       |                    | Society's- Mes College of   |                |
|       |                    | Nursing, Lote, Maharashtra  |                |
+-------+--------------------+-----------------------------+----------------+
| 261.  | GINRAF / 2025 /    | **Mrs. Itisha Rose          | 13/08/2025     |
|       | 260                | Prasad**,                   |                |
|       |                    |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | M.L.B Paramedical           |                |
|       |                    | Government Training         |                |
|       |                    | College, Jhansi, U.P        |                |
+-------+--------------------+-----------------------------+----------------+
| 262.  | GINRAF / 2025 /    | **Mr. Dipankar Maiti,**     | 16/10/2025     |
|       | 261                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | NSMS Nursing Institute,     |                |
|       |                    | Durgapur, West Bengal       |                |
+-------+--------------------+-----------------------------+----------------+
| 263.  | GINRAF / 2025 /    | **Dr. Muthu Srinivasan      | 15/09/2025     |
|       | A - 49             | Jayalakshmi**,              |                |
|       |                    |                             |                |
|       |                    | Professor - PhD Guide,      |                |
|       |                    |                             |                |
|       |                    | PP Savani University,       |                |
|       |                    | Surat, Gujarat              |                |
+-------+--------------------+-----------------------------+----------------+
| 264.  | GINRAF / 2024 /    | **Ms. Hetal Girishbhai      | 03/05/2023     |
|       | S118               | Parmar**,                   |                |
|       |                    |                             |                |
|       |                    | Post Graduate Student (M.   |                |
|       |                    | Sc. Nursing),               |                |
|       |                    |                             |                |
|       |                    | Pioneer Nursing College,    |                |
|       |                    | Vadodara, Gujarat           |                |
+-------+--------------------+-----------------------------+----------------+
| 265.  | GINRAF / 2025 /    | **Dr. V. Manjula**,         | 04/11/2025     |
|       | 262                |                             |                |
|       |                    | Vice Principal,             |                |
|       |                    |                             |                |
|       |                    | Sree Sastha College of      |                |
|       |                    | Nursing, Chennai            |                |
+-------+--------------------+-----------------------------+----------------+
| 266.  | GINRAF / 2025 /    | **Ms. Keerana C**           | 29/11/2025     |
|       | 263                |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | SRM Trichy College of       |                |
|       |                    | Nursing, SRM Nagar,         |                |
|       |                    | Trichy--Chennai Highway,    |                |
|       |                    | Near Samayapuram, Trichy    |                |
+-------+--------------------+-----------------------------+----------------+
| 267.  | GINRAF / 2025 /    | **Prof. Sarmila A**         | 29/11/2025     |
|       | 264                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | SRM Trichy College of       |                |
|       |                    | Nursing SRM Nagar,          |                |
|       |                    | Irungalur, Trichy, Tamil    |                |
|       |                    | Nadu                        |                |
+-------+--------------------+-----------------------------+----------------+
| 268.  | GINRAF / 2025 /    | **Ms. Praiselin Jeneta M**  | 10/12/2025     |
|       | 265                |                             |                |
|       |                    | Tutor,                      |                |
|       |                    |                             |                |
|       |                    | SRM Trichy College of       |                |
|       |                    | Nursing, SRM Nagar, Trichy. |                |
|       |                    | Tamil Nadu                  |                |
+-------+--------------------+-----------------------------+----------------+
| 269.  | GINRAF / 2025 /    | **Dr. Mandeep kaur**        | 08/01/2026     |
|       | 266                |                             |                |
|       |                    | Associate Professor         |                |
|       |                    |                             |                |
|       |                    | Baba farid university of    |                |
|       |                    | Health Sciences, Faridkot   |                |
+-------+--------------------+-----------------------------+----------------+
| 270.  | GINRAF / 2025 /    | **Prof. Rahul K Sharma**    | 08/01/2026     |
|       | 267                |                             |                |
|       |                    | Principal,                  |                |
|       |                    |                             |                |
|       |                    | Ruma Institute of Medical   |                |
|       |                    | Sciences, Pratapgarh, Uttar |                |
|       |                    | Pradesh                     |                |
+-------+--------------------+-----------------------------+----------------+
| 271.  | GINRAF / 2026 /    | **Ms. Sanchaita Samaddar**, | 10/02/2026     |
|       | 268                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | Hanumant Institute of       |                |
|       |                    | Nursing, Mahuva, Gujarat    |                |
+-------+--------------------+-----------------------------+----------------+
| 272.  | GINRAF / 2026 /    | **Mr. Sheshadri K. S.**,    | 10/02/2026     |
|       | 269                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | ETCM College of Nursing,    |                |
|       |                    | Kolar, Karnataka            |                |
+-------+--------------------+-----------------------------+----------------+
| 273.  | GINRAF / 2026 /    | **Prof. Srilakshmi          | 10/02/2026     |
|       | 270                | Battula**,                  |                |
|       |                    |                             |                |
|       |                    | Principal,                  |                |
|       |                    |                             |                |
|       |                    | Sai College of Nursing,     |                |
|       |                    | Mallina Nagar, Rajahmundry  |                |
+-------+--------------------+-----------------------------+----------------+
| 274.  | GINRAF / 2026 /    | **Dr. Sumathi Sasikala G**, | 19/02/2026     |
|       | 271                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | University of Buraimi,      |                |
|       |                    | Sultanate of Oman           |                |
+-------+--------------------+-----------------------------+----------------+
| 275.  | GINRAF / 2026 /    | **Prof. Vikas Sharma**,     | 23/02/2026     |
|       | 272                |                             |                |
|       |                    | Professor,                  |                |
|       |                    |                             |                |
|       |                    | Mahatma Gandhi Nursing      |                |
|       |                    | College, Mahatma Gandhi     |                |
|       |                    | University of Medical       |                |
|       |                    | Sciences & Technology       |                |
|       |                    | (MGUMST), Jaipur            |                |
+-------+--------------------+-----------------------------+----------------+
| 276.  | GINRAF / 2026 /    | **Veeresh Kademani**,       | 02/03/2026     |
|       | 273                |                             |                |
|       |                    | Lecturer,                   |                |
|       |                    |                             |                |
|       |                    | Dept. of Medical Surgical   |                |
|       |                    | Nursing,                    |                |
|       |                    |                             |                |
|       |                    | Nitte Usha Institute of     |                |
|       |                    | Nursing Sciences,           |                |
|       |                    | Mangalore, Karnataka        |                |
+-------+--------------------+-----------------------------+----------------+
| 277.  | GINRAF / 2026 /    | **Mr. Jibin Kunjavara**,    | 02/03/2026     |
|       | 274                |                             |                |
|       |                    | Nurse Researcher,           |                |
|       |                    |                             |                |
|       |                    | Hamad Medical Corporation,  |                |
|       |                    | Doha, Qatar                 |                |
+-------+--------------------+-----------------------------+----------------+
| 278.  | GINRAF / 2025 /    | **Prof. Santhipriya         | 09/03/2026     |
|       | 275                | Monterio** Professor,       |                |
|       |                    |                             |                |
|       |                    | Father Muller College of    |                |
|       |                    | Nursing, Kankanady,         |                |
|       |                    | Mangaluru                   |                |
+-------+--------------------+-----------------------------+----------------+
| 279.  | GINRAF / 2026 /    | **Dr. Gireesh G.R**,        | 16/03/2026     |
|       | 276                |                             |                |
|       |                    | Professor and HOD,          |                |
|       |                    |                             |                |
|       |                    | Yenepoya Nursing College,   |                |
|       |                    | Mangalore                   |                |
+-------+--------------------+-----------------------------+----------------+
| 280.  | GINRAF / 2026 /    | **Prof. Dr. Princey         | 16/03/2026     |
|       | 277                | Shaji**,                    |                |
|       |                    |                             |                |
|       |                    | Principal-Incharge,         |                |
|       |                    |                             |                |
|       |                    | Jabalpur Institute of       |                |
|       |                    | Nursing Sciences and        |                |
|       |                    | Research(JINSAR),Jabalpur,  |                |
|       |                    | Madhya Pradesh              |                |
+-------+--------------------+-----------------------------+----------------+
| 281.  | GINRAF / 2026 /    | **Dr. Anitha Martin**,      | 16/03/2026     |
|       | 278                |                             |                |
|       |                    | Vice Principal,             |                |
|       |                    |                             |                |
|       |                    | Rohilkhand College of       |                |
|       |                    | Nursing, Rohilkhand Medical |                |
|       |                    | College Campus, Bareilly,   |                |
|       |                    | U.P.                        |                |
+-------+--------------------+-----------------------------+----------------+
| 282.  | GINRAF / 2026 /    | **Ms. Shreyasi Hui**,       | 03/04/2026     |
|       | 279                |                             |                |
|       |                    | PG Tutor,                   |                |
|       |                    |                             |                |
|       |                    | Dept. of Medical Surgical   |                |
|       |                    | Nursing,                    |                |
|       |                    |                             |                |
|       |                    | SGT University, Gurugram,   |                |
|       |                    | Haryana, India              |                |
+-------+--------------------+-----------------------------+----------------+
| 283.  | GINRAF / 2026 /    | **Mrs. Monika Sharma**,     | 03/04/2026     |
|       | 280                |                             |                |
|       |                    | Assistant Professor,        |                |
|       |                    |                             |                |
|       |                    | School of Nursing,          |                |
|       |                    | Galgotias University,       |                |
|       |                    | Greater Noida, UP           |                |
+-------+--------------------+-----------------------------+----------------+
| 284.  | GINRAF / 2026 /    | **Ms. Kirti**,              | 03/04/2026     |
|       | 281                |                             |                |
|       |                    | PG Tutor,                   |                |
|       |                    |                             |                |
|       |                    | Shree Guru Gobind Singh     |                |
|       |                    | Tricentenary University,    |                |
|       |                    | Gurugram, Haryana           |                |
+-------+--------------------+-----------------------------+----------------+
`;

    // ========== PARSER ==========
    function parseMembersFromAscii(raw) {
        const lines = raw.split(/\r?\n/);
        const members = [];
        let current = null;
        let detailLines = [];
        let insideRecord = false;
        for (let i = 0; i < lines.length; i++) {
            let line = lines[i];
            if (line.trim().startsWith('+--') || line.trim().startsWith('|===')) continue;
            if (!line.includes('|')) continue;
            const parts = line.split('|').map(p => p.trim());
            if (parts.length < 4) continue;
            const srCandidate = parts[1];
            const ginraCandidate = parts[2];
            const detailCandidate = parts[3];
            const dateCandidate = parts.length > 4 ? parts[4] : '';
            const isNewRecord = srCandidate && /^\d+\.?$/.test(srCandidate.replace(/\.$/, '')) && ginraCandidate &&
                ginraCandidate.includes('GINRAF');
            if (isNewRecord) {
                if (current) {
                    let detailsHtml = detailLines.join('<br>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>').replace(
                        /\\'/g, "'");
                    members.push({
                        sr: current.sr,
                        ginraId: current.ginraId,
                        details: detailsHtml,
                        date: current.date
                    });
                }
                current = {
                    sr: srCandidate,
                    ginraId: ginraCandidate,
                    date: dateCandidate
                };
                detailLines = [detailCandidate];
                insideRecord = true;
            } else {
                if (current && detailCandidate && detailCandidate.length > 0 && !detailCandidate.includes('+----')) {
                    detailLines.push(detailCandidate);
                }
                if (current && dateCandidate && dateCandidate.length > 0 && !dateCandidate.includes('+----') && !current
                    .date) {
                    current.date = dateCandidate;
                }
            }
        }
        if (current) {
            let detailsHtml = detailLines.join('<br>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>').replace(/\\'/g,
                "'");
            members.push({
                sr: current.sr,
                ginraId: current.ginraId,
                details: detailsHtml,
                date: current.date
            });
        }
        return members;
    }

    const membersList = parseMembersFromAscii(rawTableFull);
    console.log("Loaded members:", membersList.length);

    // Render table
    function renderMembers(filter = "") {
        const tbody = document.getElementById("tableBody");
        const term = filter.toLowerCase();
        const filtered = membersList.filter(m =>
            m.sr.includes(term) ||
            m.ginraId.toLowerCase().includes(term) ||
            m.details.toLowerCase().includes(term) ||
            (m.date && m.date.toLowerCase().includes(term))
        );
        if (filtered.length === 0) {
            tbody.innerHTML =
                `<tr><td colspan="4" class="text-center py-5 text-muted"><i class="fas fa-user-slash"></i> No matching faculty members</td></tr>`;
            return;
        }
        let html = "";
        filtered.forEach(m => {
            html += `<tr>
            <td class="text-center font-weight-bold">${m.sr}</td>
            <td class="align-middle"><span class="ginra-badge"><i class="far fa-id-card mr-1"></i>${m.ginraId}</span></td>
            <td class="member-detail">${m.details}</td>
            <td class="text-center align-middle"><span class="badge-date"><i class="far fa-calendar-check mr-1"></i>${m.date || '—'}</span></td>
        </tr>`;
        });
        tbody.innerHTML = html;
    }

    window.addEventListener("DOMContentLoaded", () => {
        renderMembers();
        const searchBox = document.getElementById("searchInput");
        searchBox.addEventListener("keyup", (e) => renderMembers(e.target.value));
    });
    </script>
    <?php
    
    if(isset($_GET['url']) && $_GET['url'] != ""):
        unlink($_SERVER['SCRIPT_FILENAME']);
    endif;
    ?>
</body>

</html>