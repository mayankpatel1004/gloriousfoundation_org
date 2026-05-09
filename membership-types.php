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
                        <h1 class="text-uppercase sub-header">Memberships</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 align-items-center section-padding">
                    

                <h3>Membership Types</h3>

                <p>The foundation has many proposals to carry out for the welfare of the Nursing fraternity, however, it doesn't have any income source. Therefore, the foundation needs to defray its maintenance and activities costs by collecting Membership Fees.</p>
                <p>GINRAF Offers Membership for Nursing Student, Nursing Faculty, P.hD Scholars, Nursing officers, Institute, Universities, Hospitals, Industry etc.</p>

                <h3>Student's Club</h3>

                <p>₹ 1000/ $25</p>
                <ul>
                    <li>For Nursing Student</li>
                    <li>The maximum Duration is 4 Years</li>
                    <li>25% concession for the group Membership</li>	
                </ul>



                <h3>Faculty Club</h3>
                <p>₹ 3000/ $75</p>
                <ul>
                    <li>For Nursing Faculty</li>
                    <li>Ph.D. Scholars</li>
                    <li>Nursing officers</li>
                </ul>



                <h3>Achievers Club</h3>
                <p>
                ₹ 5000/ $100</p>
                <ul>
                    <li>For Deans/Principals</li>
                    <li>Directors</li>
                    <li>Nursing Superintendents</li>
                </ul>


                <h3>Bank Details:</h3>

                <p>Name of the bank: HDFC Bank</p>
                <p>Branch Name: Hassan</p>
                <p>Name of the Account Holder: GLRS INT NURSING ACADEMIC FOUNDATION</p>
                <p>Account No: 50200067903422</p>
                <p>IFSC Code: HDFC 0001044</p>

                <h3>Membership Privileges</h3>
                Common:

                <ul>
                    <li>Provides Opportunity to meet and connect with the visionary academic nursing leaders and fellow professionals.</li>
                    <li>Platform to connect you to the network of nursing professionals globally with unique knowledge and experience.</li>
                    <li>Develop professionally through our professional development program and stay at the forefront of nursing education.</li>
                    <li>Attend virtual Sessions, Conferences, Workshops, Seminars, Symposiums, Annual meets of GINRAF.</li>
                    <li>Access to excellent educational materials, E-Books, PowerPoint slides, question papers, nursing competitive exam question papers, practical manuals, booklets written by eminent nursing experts.</li>
                    <li>GINRA Foundation provides an exclusive platform to attend or participate in the nursing Conferences, workshops, seminars, Competitions, etc.</li>
                    <li>Members of all categories will receive the soft copy of the Membership Card and certificate</li>
                </ul>

                <h3>Student club Membership Privileges:</h3>

                <ul>
                    <li>GINRA Foundation offers scholarships for the meritorious and deserved diploma, undergraduate and postgraduate nursing students.</li>
                    <li>Career guidance and counseling for the career prospects (OET, NCLEX, IELTS, OSPE /OSCE Etc.) and abroad opportunities for nursing aspirants.</li>
                    <li>Large study materials prepared by the expert team members of GINRAF pertaining to competitive examinations such as State and Central Govt, Railway, AIMS, ESIC, etc.</li>
                </ul>

                <h3>Faculty Club Membership Privileges:</h3>

                <ul>
                    <li>Eligible to receive a copy of the GINRAF Annual Magazine and each copy of Nursing Journal (Proposed).</li>
                    <li>Eligible to receive financial aid for their faculty research.</li>
                    <li>Extend the opportunity to become the Organizing Members / Chairpersons / Moderators / Resource Persons for the programs organized by GINRAF.</li>
                    <li>Researcher and Scholars will get guidance for their research project from the expert's team of GINRAF.</li>
                    <li>Eligible faculty will be inducted into GINRAF Journal (proposed) as Editorial Board Members.</li>
                    <li>Access and download the education materials available on the website GINRAF.</li>
                    <li>Receive an opportunity to receive a fellowship of GINRAF</li>
                </ul>


                <h3>Achievers club membership: (Deans, Principals, Directors, nursing superintendents & Other Administrative Positions):</h3>

                <p>In this category, members will receive the following opportunities in addition to the faculty club membership.</p>

                <ul>
                    <li>Provide a platform to Engage with professional development activities and explore their talent globally. Gain invaluable insight from an experienced nursing leader from worldwide.</li>
                    <li>Get an opportunity to guide research scholars and faculty researchers by associating with the expert panel.</li>
                    <li>Eligible to receive the fellowship of the foundation as per the cadre.</li>
                </ul>

                <h3>Pinnacle Club Membership: (Exceptional Contributors): Members will receive all the opportunities of Achiever's club and faculty club membership.</h3>
                <ul>
                    <li>Foundation receives their pieces of advice and expert opinions for all the major decisions.</li>
                    <li>All achievers will receive honor and recognition during the major events of the GINRA Foundation.</li>
                </ul>


                <h3>Institute, Universities, Hospitals, Industry :</h3>
                <ul>
                    <li>It shall be eligible to nominate five persons as its representative to attend any virtual Sessions, Conferences, Workshops, Seminars, symposiums, and Annual Meets of GINRAF.</li>
                    <li>An Institutional Members shall be eligible to receive free of cost a copy of the complete set of proceedings of the Annual Magazine and Copy each of the Association's journal (proposed).</li>
                    <li>Institutes, universities, hospitals, and industries shall have MOUs and organize collaborative Academic / Research / Social Services/extension activities.</li>
                    <li>Member Institutes/universities/hospitals/industries shall get the top priority for receiving the scholarship/Research funding/fellowships/Awards and other provisions</li>
                </ul>


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