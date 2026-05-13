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
                        <h1 class="text-uppercase sub-header">Aims <span class="main_header main_clr sf-heavy">&
                                Objectives</span></h1>
                        <p class="mt-4 w-100 mw-50">Glorious International Nursing Research and Academic
                            Foundation.<br />Registered Under the Ministry of Corporate Affairs, Govt. of
                            India<br />(Enrolled with NGO DARPAN-NITI Aayog, MSME, CSR-1, Certified by ISO 9001:2015)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 ml-2">
        <div class="hero-body container custom-container-width" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 align-items-center section-padding">
                    <h3>Aim</h3>
                    <p>To promote Nursing research and academically support the Nursing fraternity by collaborating with
                        eminent professionals globally. </p>
                    <br />
                    <h3>Objectives of the Foundation</h3>
                    <ol>
                        <li class="mb-3">
                            Build Professional competencies among Nurses and health care
                            professionals through capacity-building programs to meet the global
                            need.
                        </li>

                        <li class="mb-3">
                            Impart Research Knowledge through various Continuing Nursing Education /
                            Workshops / Seminars / Conferences.
                        </li>

                        <li class="mb-3">
                            Promote nursing research by conferring various fellowships for nursing
                            professionals.
                        </li>

                        <li class="mb-3">
                            Provide a platform and assistance in the conduction of Evidence-Based
                            Nursing / Health Care Research.
                        </li>

                        <li class="mb-3">
                            Promote social service activities toward community development and
                            empower nursing professionals to do such activities.
                        </li>

                        <li class="mb-3">
                            Grant short-term courses, certificate courses, vocational courses, and
                            diplomas or recognitions as the company may prescribe or deem fit from
                            time to time.
                        </li>

                        <li class="mb-3">
                            Encourage nursing professionals by offering honors, awards,
                            recognitions, and incentives for their contributions to the nursing
                            profession.
                        </li>

                        <li class="mb-3">
                            Provide various assistance for diploma, undergraduate, and postgraduate
                            nursing students.
                        </li>

                        <li class="mb-3">
                            Conduct collaborative academic and research activities with various
                            Institutes, Universities, Hospitals, and industries.
                        </li>
                    </ol>
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