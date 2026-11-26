<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
        <style>
        .bls-proposal-wrapper {
            color: #1e293b;
            line-height: 1.7;
        }
        .bls-banner-box {
            background: linear-gradient(135deg, #0b2d5b 0%, #164482 100%);
            color: #ffffff;
            border-radius: 10px;
            padding: 35px 30px;
            border-bottom: 6px solid #f5b400;
            margin-bottom: 35px;
        }
        .bls-banner-box .badge-pill-gold {
            background-color: #f5b400;
            color: #0b2d5b;
            font-weight: 700;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .bls-banner-box h2 {
            color: #ffffff;
            font-weight: 800;
            margin-bottom: 10px;
        }
        .bls-banner-box .subtitle {
            color: #f5b400;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .bls-section-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }
        .bls-section-title {
            color: #0b2d5b;
            font-weight: 700;
            font-size: 1.35rem;
            border-left: 5px solid #f5b400;
            padding-left: 14px;
            margin-bottom: 18px;
            text-transform: uppercase;
        }
        .bls-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .bls-list li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 10px;
        }
        .bls-list li i {
            position: absolute;
            left: 0;
            top: 5px;
            color: #0b2d5b;
        }
        .bls-list li i.gold-icon {
            color: #d99b00;
        }
        .bls-table thead th {
            background-color: #0b2d5b;
            color: #ffffff;
            border-color: #0b2d5b;
            font-weight: 600;
        }
        .bls-highlight-box {
            background-color: #f8fafc;
            border-left: 4px solid #0b2d5b;
            padding: 18px 20px;
            border-radius: 4px;
            margin-top: 15px;
        }
        .bls-quote-box {
            background: linear-gradient(135deg, #0b2d5b 0%, #133c73 100%);
            color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            margin-bottom: 25px;
        }
        .bls-quote-box blockquote {
            font-size: 1.35rem;
            font-weight: 700;
            color: #f5b400;
            margin-bottom: 10px;
        }
        .bls-stat-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-top: 4px solid #f5b400;
            border-radius: 6px;
            padding: 18px 15px;
            text-align: center;
            height: 100%;
        }
        .bls-stat-card i {
            font-size: 1.8rem;
            color: #0b2d5b;
            margin-bottom: 10px;
        }
        .bls-stat-card h5 {
            font-weight: 700;
            color: #0b2d5b;
            margin-bottom: 4px;
            font-size: 1.05rem;
        }
        .bls-stat-card p {
            margin-bottom: 0;
            font-size: 0.9rem;
            color: #475569;
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
                        <h1 class="text-uppercase sub-header">Training <span class="main_header main_clr sf-heavy">Proposal</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hero2 ml-2">
    <div class="hero-body container custom-container-width bls-proposal-wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 section-padding">

                    <!-- Proposal Header Banner -->
                    <div class="bls-banner-box">
                        <span class="badge-pill-gold"><i class="fas fa-file-medical-alt mr-2"></i>TRAINING PROPOSAL</span>
                        <h2>BASIC LIFE SUPPORT (BLS) TRAINING PROGRAMME</h2>
                        <div class="subtitle">Empowering Healthcare Professionals to Save Lives</div>
                        <p class="mb-2"><strong>Organized by:</strong> Glorious International Nursing Research and Academic (GINRA) Foundation</p>
                        <p class="mb-0 text-light"><i class="fas fa-heartbeat mr-2 text-warning"></i><em>Building Competence. Strengthening Confidence. Saving Lives.</em></p>
                    </div>

                    <!-- Quick Overview Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="bls-stat-card">
                                <i class="fas fa-rupee-sign"></i>
                                <h5>₹250 / Participant</h5>
                                <p>Affordable Institutional Fee</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="bls-stat-card">
                                <i class="fas fa-users"></i>
                                <h5>60–100 Participants</h5>
                                <p>Recommended Batch Size</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="bls-stat-card">
                                <i class="far fa-clock"></i>
                                <h5>1 Day (6–8 Hours)</h5>
                                <p>Hands-On &amp; Simulation</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="bls-stat-card">
                                <i class="fas fa-hospital-alt"></i>
                                <h5>Host Institution</h5>
                                <p>On-Site Customized Delivery</p>
                            </div>
                        </div>
                    </div>

                    <!-- About GINRA Foundation -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">About GINRA Foundation</h3>
                        <p class="mb-0">Glorious International Nursing Research and Academic Foundation (GINRA Foundation&reg;) is an international, non-profit professional body established in 2021 and registered under Section 8 of the Companies Act, 2013, Ministry of Corporate Affairs, Government of India. It promotes nursing research, academic excellence, and global collaboration through CNE programmes, webinars, conferences, research grants, short-term courses, awards, and community development initiatives, empowering nurses and advancing the nursing profession.</p>
                    </div>

                    <!-- About Training Programme -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">About Training Programme</h3>
                        <p>Cardiac arrest and other life-threatening emergencies require immediate recognition and prompt, effective intervention. Basic Life Support (BLS) is a fundamental lifesaving skill that enables healthcare professionals to recognize cardiac arrest, initiate high-quality cardiopulmonary resuscitation (CPR), and use an Automated External Defibrillator (AED) when available.</p>
                        <p>Glorious International Nursing Research and Academic Foundation (GINRAF) proposes to conduct a structured, hands-on BLS Training Programme for nursing colleges, hospitals, healthcare institutions, and other healthcare agencies. The programme combines evidence-based theoretical instruction, instructor-led demonstrations, skill practice using simulation manikins, and competency-based assessment.</p>
                        <p class="mb-0">The training aims to strengthen emergency preparedness, improve resuscitation skills, and build confidence among healthcare professionals in responding to cardiac arrest and other critical emergencies.</p>
                    </div>

                    <!-- Aim & Objectives -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Aim of the Programme</h3>
                        <p>To develop the knowledge, practical skills, and confidence required by healthcare professionals to recognize and respond effectively to life-threatening emergencies through evidence-based Basic Life Support training.</p>

                        <h4 class="font-weight-bold text-dark mt-4 mb-3">Objectives</h4>
                        <ul class="bls-list">
                            <li><i class="fas fa-check-circle gold-icon"></i>Recognize cardiac arrest and activate the emergency response system promptly.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Demonstrate high-quality CPR techniques for adults, children, and infants, as appropriate to the course level.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Perform effective chest compressions and rescue breathing according to current guidelines.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Demonstrate safe and appropriate use of an AED trainer.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Describe the role of team dynamics and effective communication during resuscitation.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Demonstrate coordinated responses to simulated cardiac arrest scenarios.</li>
                            <li><i class="fas fa-check-circle gold-icon"></i>Identify the importance of early intervention and uninterrupted CPR in improving patient outcomes.</li>
                        </ul>
                    </div>

                    <!-- Target Participants -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Target Participants</h3>
                        <p>The programme is suitable for:</p>
                        <ul class="bls-list">
                            <li><i class="fas fa-user-nurse"></i>B.Sc. Nursing, GNM, Post Basic B.Sc. Nursing, and M.Sc. Nursing students.</li>
                            <li><i class="fas fa-chalkboard-teacher"></i>Nursing faculty members and clinical instructors.</li>
                            <li><i class="fas fa-user-md"></i>Staff nurses and nursing supervisors.</li>
                            <li><i class="fas fa-stethoscope"></i>Doctors, interns, and other healthcare professionals.</li>
                            <li><i class="fas fa-ambulance"></i>Emergency, critical care, and general ward personnel.</li>
                            <li><i class="fas fa-hospital-user"></i>Healthcare workers and other eligible personnel, depending on the selected course level.</li>
                        </ul>
                    </div>

                    <!-- Topics Covered / Programme Structure -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Topics Covered / Programme Structure</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped bls-table">
                                <thead>
                                    <tr>
                                        <th style="width: 18%;">Module</th>
                                        <th>Content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Module 1</strong></td>
                                        <td>Introduction to BLS, cardiac arrest recognition, and the chain of survival</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 2</strong></td>
                                        <td>Initial assessment, scene safety, responsiveness, and emergency activation</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 3</strong></td>
                                        <td>High-quality CPR: compression rate, depth, recoil, and minimising interruptions</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 4</strong></td>
                                        <td>Rescue breathing and ventilation techniques using appropriate barrier devices—BVM, Pocket Mask</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 5</strong></td>
                                        <td>Adult BLS skills and AED operation</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 6</strong></td>
                                        <td>Child and infant BLS &amp; Foreign Body Airway Obstruction (FBAO)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 7</strong></td>
                                        <td>Team-based resuscitation, role allocation, and effective communication</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Module 8</strong></td>
                                        <td>Hands-on practice, simulated emergency scenarios, and competency assessment</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted small mb-0 mt-2"><i class="fas fa-info-circle mr-1"></i>The final curriculum will align with the selected course level and applicable resuscitation guidelines.</p>
                    </div>

                    <!-- Training Methodology & Simulation Equipment -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Training Methodology</h3>
                                <p>GINRAF emphasizes practical skill, participant-centred learning through:</p>
                                <ul class="bls-list">
                                    <li><i class="fas fa-angle-right"></i>Interactive lectures and presentations.</li>
                                    <li><i class="fas fa-angle-right"></i>Demonstrations by experienced instructors.</li>
                                    <li><i class="fas fa-angle-right"></i>Step-by-step skills practice.</li>
                                    <li><i class="fas fa-angle-right"></i>Individual and small-group manikin practice.</li>
                                    <li><i class="fas fa-angle-right"></i>AED trainer demonstrations.</li>
                                    <li><i class="fas fa-angle-right"></i>Simulated cardiac arrest scenarios.</li>
                                    <li><i class="fas fa-angle-right"></i>Instructor feedback and skill correction.</li>
                                    <li><i class="fas fa-angle-right"></i>Pre-training and post-training knowledge assessment, where applicable.</li>
                                    <li><i class="fas fa-angle-right"></i>Practical competency assessment.</li>
                                </ul>
                                <p class="text-muted small mt-3 mb-0">The programme is designed to maximize hands-on learning rather than rely solely on classroom lectures.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Simulation Equipment &amp; Manikins</h3>
                                <p>GINRAF recognises that effective resuscitation training requires realistic practice, repeated skill performance, and constructive feedback. Equipment may include:</p>
                                <ul class="bls-list">
                                    <li><i class="fas fa-medkit"></i><strong>Adult CPR manikins:</strong> For practising chest compressions, airway positioning, and ventilation.</li>
                                    <li><i class="fas fa-medkit"></i><strong>Child CPR manikins:</strong> For age-appropriate resuscitation skills.</li>
                                    <li><i class="fas fa-medkit"></i><strong>Infant CPR manikins:</strong> For practising infant chest compressions and rescue breathing.</li>
                                    <li><i class="fas fa-bolt gold-icon"></i><strong>AED trainers:</strong> For familiarization with defibrillator operation and simulated shock delivery.</li>
                                    <li><i class="fas fa-lungs"></i><strong>Bag-valve-mask devices &amp; barrier equipment:</strong> For practising appropriate ventilation techniques.</li>
                                    <li><i class="fas fa-tachometer-alt"></i><strong>Feedback-enabled CPR manikins (where available):</strong> To support assessment of compression depth, rate, recoil, and overall CPR quality.</li>
                                    <li><i class="fas fa-briefcase-medical"></i><strong>Other simulation accessories:</strong> To facilitate realistic emergency scenarios and team-based practice.</li>
                                </ul>
                                <p class="text-muted small mt-3 mb-0">Specific manikins and equipment will be confirmed during programme planning based on objectives and participant numbers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Duration and Proposed Schedule -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Duration and Proposed Schedule</h3>
                        <p><strong>Recommended Duration:</strong> One day (6–8 hours)</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover bls-table">
                                <thead>
                                    <tr>
                                        <th style="width: 24%;">Session</th>
                                        <th>Proposed Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>9:00–9:30 AM</td>
                                        <td>Registration, orientation, and pre-test</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>9:30–10:30 AM</td>
                                        <td>BLS principles and cardiac arrest recognition</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>10:30–11:00 AM</td>
                                        <td>Instructor demonstration</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>11:00 AM–1:00 PM</td>
                                        <td>Hands-on CPR and AED practice</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td><i class="fas fa-utensils mr-2 text-warning"></i>1:00–2:00 PM</td>
                                        <td><strong>Lunch break</strong></td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>2:00–3:30 PM</td>
                                        <td>Age-appropriate BLS practice and team scenarios</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>3:30–4:30 PM</td>
                                        <td>Skills assessment and post-test</td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-clock mr-2 text-primary"></i>4:30–5:00 PM</td>
                                        <td>Feedback, discussion, and programme closure</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mb-0 mt-2 text-muted small">The schedule is indicative and can be customized according to the host institution's requirements, participant strength, and selected course level. For larger batches, additional sessions or multiple training days may be arranged to ensure adequate individual practice and assessment.</p>
                    </div>

                    <!-- Programme Fees and Batch Size -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Programme Fees and Batch Size</h3>
                        <p>GINRAF offers affordable, institution-based Basic Life Support (BLS) training to nursing colleges, hospitals, and healthcare agencies.</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light border rounded">
                                    <i class="fas fa-tag text-primary mr-2"></i><strong>Training Fee:</strong> ₹250 per participant
                                </div>
                            </div>
                            <div class="col-md-6 mt-2 mt-md-0">
                                <div class="p-3 bg-light border rounded">
                                    <i class="fas fa-users text-primary mr-2"></i><strong>Recommended Batch Size:</strong> 60–100 participants
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive mb-4">
                            <table class="table table-bordered bls-table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Particulars</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Fee per participant</strong></td>
                                        <td>₹250</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Minimum batch size</strong></td>
                                        <td>60 participants</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Recommended batch size</strong></td>
                                        <td>60–100 participants</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total fee for 60 participants</strong></td>
                                        <td>₹15,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total fee for 100 participants</strong></td>
                                        <td>₹25,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Duration</strong></td>
                                        <td>One day (6–8 hours)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Venue</strong></td>
                                        <td>Host institution or mutually agreed location</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="bls-highlight-box mb-4">
                            <h5 class="font-weight-bold text-dark mb-2"><i class="fas fa-exclamation-circle text-warning mr-2"></i>Important Notes</h5>
                            <ul class="bls-list">
                                <li><i class="fas fa-check"></i>Adequate instructors, manikins, and practice stations will be planned according to the batch size.</li>
                                <li><i class="fas fa-check"></i>Travel, accommodation, special equipment arrangements, and formal external certification fees, if applicable, may be charged separately.</li>
                                <li><i class="fas fa-check"></i>The ₹250 fee is for the proposed institutional BLS training programme and does not automatically include official AHA Provider certification or an AHA eCard.</li>
                                <li><i class="fas fa-check"></i>Final arrangements will be confirmed with the host institution before the training date.</li>
                            </ul>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered bls-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Training Option</th>
                                        <th>Fee Structure</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Institutional training</strong></td>
                                        <td>Customised quotation for the entire batch</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Per-participant training</strong></td>
                                        <td>Fee calculated according to batch size and programme requirements</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Extended practical training</strong></td>
                                        <td>Additional charges may apply depending on duration and resources</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Formal provider-course option</strong></td>
                                        <td>Quotation based on the applicable provider's requirements and fees</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Benefits to Host Institution & Participants -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Benefits to the Host Institution</h3>
                                <p>Partnering with GINRAF for BLS training can help institutions:</p>
                                <ul class="bls-list">
                                    <li><i class="fas fa-shield-alt"></i>Strengthen emergency preparedness among students and healthcare professionals.</li>
                                    <li><i class="fas fa-heart"></i>Promote a culture of patient safety and quality care.</li>
                                    <li><i class="fas fa-laptop-medical"></i>Enhance practical learning through simulation-based education.</li>
                                    <li><i class="fas fa-user-check"></i>Improve staff confidence in responding to cardiac arrest.</li>
                                    <li><i class="fas fa-graduation-cap"></i>Support clinical skill development and competency-based education.</li>
                                    <li><i class="fas fa-building"></i>Organize customized, institution-based training with reduced travel requirements for participants.</li>
                                    <li><i class="fas fa-file-alt"></i>Provide structured learning documentation and participation records, as applicable.</li>
                                    <li><i class="fas fa-award"></i>Support continuing professional development initiatives, subject to applicable institutional and regulatory requirements.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Benefits to Participants</h3>
                                <p>Participants will have the opportunity to:</p>
                                <ul class="bls-list">
                                    <li><i class="fas fa-hands-helping"></i>Develop practical lifesaving skills.</li>
                                    <li><i class="fas fa-heartbeat"></i>Improve confidence in performing CPR.</li>
                                    <li><i class="fas fa-bolt"></i>Gain familiarity with AED operation.</li>
                                    <li><i class="fas fa-users"></i>Practise individual and team-based resuscitation.</li>
                                    <li><i class="fas fa-comments"></i>Receive instructor feedback on skill performance.</li>
                                    <li><i class="fas fa-clinic-medical"></i>Strengthen clinical preparedness for emergency situations.</li>
                                    <li><i class="fas fa-certificate gold-icon"></i>Receive a certificate of participation or course completion, as applicable to the selected programme.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose GINRAF? -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Why Choose GINRAF?</h3>
                        <h5 class="font-weight-bold text-primary mb-2">Experienced Faculty and Practical Expertise</h5>
                        <p>GINRAF delivers high-quality, skill-oriented training through experienced healthcare educators and resuscitation instructors. Our strengths include:</p>
                        <ul class="bls-list">
                            <li><i class="fas fa-star gold-icon"></i><strong>Experienced faculty:</strong> Training delivered by suitably qualified faculty with clinical, teaching, and emergency-care expertise.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>AHA-trained or credentialed instructors, where applicable:</strong> Instructors with relevant American Heart Association (AHA) credentials, subject to the selected course and current credential status.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Hands-on learning:</strong> Emphasis on repeated practice, demonstration, and performance assessment.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Simulation-based education:</strong> Use of adult, child, and infant manikins and AED trainers as appropriate to the programme.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Customized institutional training:</strong> Content and scheduling adapted to the requirements of nursing colleges, hospitals, and healthcare agencies.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Competency-focused approach:</strong> Attention to correct technique, teamwork, and emergency response.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Flexible delivery:</strong> On-site training at the host institution or other mutually agreed arrangements.</li>
                            <li><i class="fas fa-star gold-icon"></i><strong>Professional coordination:</strong> Planned sessions, attendance documentation, participant feedback, and training records, as applicable.</li>
                        </ul>
                        <p class="mb-0 mt-3">Our goal is to help participants move beyond theoretical knowledge and develop the practical competence needed to respond effectively during emergencies.</p>
                    </div>

                    <!-- Expected Outcomes & Institutional Collaboration -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Expected Outcomes</h3>
                                <p>Following the programme, participants are expected to demonstrate improved understanding of BLS principles, better familiarity with CPR and AED techniques, and increased confidence in simulated emergency responses.</p>
                                <p class="mb-0">The host institution will receive programme documentation according to the agreed scope, which may include attendance records, assessment summaries, feedback, and certificates where applicable.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="bls-section-card h-100 mb-0">
                                <h3 class="bls-section-title">Institutional Collaboration</h3>
                                <p>GINRAF invites nursing colleges, hospitals, universities, healthcare agencies, and other eligible organizations to collaborate in organizing BLS training programmes. The programme can be customized for:</p>
                                <ul class="bls-list">
                                    <li><i class="fas fa-handshake"></i>Student batches and faculty development initiatives.</li>
                                    <li><i class="fas fa-handshake"></i>Hospital nursing staff and multidisciplinary healthcare teams.</li>
                                    <li><i class="fas fa-handshake"></i>Emergency preparedness and clinical skills programmes.</li>
                                    <li><i class="fas fa-handshake"></i>Institutional workshops and skill-development activities.</li>
                                    <li><i class="fas fa-handshake"></i>Recurring training and refresher initiatives.</li>
                                </ul>
                                <p class="mb-0 mt-2">We welcome institutional partnerships to promote lifesaving education and strengthen the quality of healthcare delivery.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact and Booking -->
                    <div class="bls-section-card">
                        <h3 class="bls-section-title">Contact and Booking</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <h5 class="font-weight-bold text-dark">Glorious International Nursing Research and Academic Foundation (GINRAF)</h5>
                                <ul class="bls-list mt-3">
                                    <li><i class="fas fa-globe"></i><strong>Website:</strong> <a href="https://www.gloriousfoundation.org" target="_blank" rel="noopener">www.gloriousfoundation.org</a></li>
                                    <li><i class="fas fa-envelope"></i><strong>Email:</strong> <a href="mailto:ginrafoundation@gmail.com">ginrafoundation@gmail.com</a></li>
                                    <li><i class="fas fa-phone-alt"></i><strong>Contact:</strong> <a href="tel:7567253559">7567253559</a> &amp; <a href="tel:9844178870">9844178870</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light border rounded h-100">
                                    <h6 class="font-weight-bold text-dark mb-2">To organize a BLS Training Programme, please share:</h6>
                                    <ul class="bls-list small mb-2">
                                        <li><i class="fas fa-check text-success"></i>Name of the institution or agency.</li>
                                        <li><i class="fas fa-check text-success"></i>Expected number of participants.</li>
                                        <li><i class="fas fa-check text-success"></i>Preferred training date.</li>
                                        <li><i class="fas fa-check text-success"></i>Training venue and location.</li>
                                        <li><i class="fas fa-check text-success"></i>Required course level.</li>
                                        <li><i class="fas fa-check text-success"></i>Certification requirements.</li>
                                    </ul>
                                    <p class="small text-muted mb-0">GINRAF will provide a customized training plan and quotation based on the information received.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commitment & Sign-off -->
                    <div class="bls-quote-box">
                        <blockquote>&ldquo;Every second counts. Every skill matters. Every life is worth saving.&rdquo;</blockquote>
                        <p class="mb-1 font-weight-bold">Glorious International Nursing Research and Academic Foundation (GINRAF)</p>
                        <p class="small text-light mb-0">Empowering Healthcare Professionals Through Education, Research, and Skill Development</p>
                    </div>

                    <div class="bls-section-card mb-0">
                        <p class="mb-1"><strong>Regards,</strong></p>
                        <h5 class="font-weight-bold text-primary mb-1">Dr. Ravindra H. N.</h5>
                        <p class="mb-2 text-muted">Director, Academic and Research Affairs<br>Glorious International Nursing Research and Academic (GINRA) Foundation</p>
                        <p class="mb-0 small">
                            <i class="fas fa-envelope mr-1 text-primary"></i> <a href="mailto:ginrafoundation@gmail.com">ginrafoundation@gmail.com</a> &nbsp;|&nbsp;
                            <i class="fas fa-globe mr-1 text-primary"></i> <a href="https://www.gloriousfoundation.org" target="_blank" rel="noopener">www.gloriousfoundation.org</a> &nbsp;|&nbsp;
                            <i class="fas fa-phone-alt mr-1 text-primary"></i> 7567253559 &amp; 9844178870
                        </p>
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