<?php include "connection.php";?>
<?php include "functions.php";?>
<!-- header -->
<div class="header_top main-bg py-2 mob-hide">
            <div class="container">
                <div class="row">                  
                    <div class="col-md-9">                        
                        <ul class="list-unstyled d-flex mb-0">
                            <li class="text-white">For Enquiry Call Us at:</li>
                            <li><a href="tel:<?php echo $contact;?>"><i class="fas fa-phone-alt"></i> <?php echo formatPhoneNumber($contact);?></a></li>
                            <li><a href="mailto:<?php echo $email;?>"><i class="fas fa-envelope"></i> <?php echo $email;?></a></li>                                
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="top_icon d-flex mb-0 justify-content-end">
                            <?php if(isset($facebook_url) && $facebook_url != ""):?>
                            <li><a href="<?php $facebook_url;?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <?php endif;?>
                            <?php if(isset($instagram_url) && $instagram_url != ""):?>
                            <li><a href="<?php echo $instagram_url;?>" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                            <?php endif;?>
                            <?php if(isset($youtube_url) && $youtube_url != ""):?>
                            <li><a href="<?php echo $youtube_url;?>" target="_blank"><i class="fab fa-youtube"></i>
                            </a></li>
                            <?php endif;?>
                        </ul>
                </div>
                </div>
            </div>
        </div>
         <div class="header_top main-bg py-2 d-none mob-show">
            <div class="container">
                <div class="row">                  
                    <div class="col-md-12 w-100">                        
                        <ul class="list-unstyled d-flex mb-0">
                            <li class="text-white">For Enquiry Call Us at:</li>
                            <li><a href="tel:<?php echo $contact;?>"><i class="fas fa-phone-alt"></i> <?php echo formatPhoneNumber($contact);?></a></li>
                            <li><a href="mailto:<?php echo $email;?>"><i class="fas fa-envelope"></i> <?php echo $email;?></a></li>                                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header class="nav-down">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <?php /*?><a class="navbar-brand" href="<?php echo $url;?>"><img src="<?php echo $logo_url;?>" alt="logo" class="logo"></a><?php */?>
                <a class="navbar-brand main_clr main_logo" href="<?php echo $url;?>"><?php echo $website_name;?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo $url;?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="about.php" data-bs-toggle="dropdown" role="button" id="navbarDropdown">About <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu nav-list py-0 dropdown-menu-center" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>about.php">About The Foundation</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>vision-and-mission.php">Vision & Mission</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>aims-and-objectives.php">Aims & Objectives</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>board-members.php">Board Members</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>national-international-center.php">National & International Centers</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="results.php" data-bs-toggle="dropdown" role="button" id="navbarDropdown">Facilities <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu nav-list py-0 dropdown-menu-center" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>continuing-nursing-education.php">Continuing Nursing Education</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>glorious-learning-resource-centre.php">Glorious Learning Resource Centre</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>research-activity.php">Research Activity</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>short-term-courses.php">Short Term Courses</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>research-grants.php">Research Grants</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>scholarships.php">Scholarships</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>social-services.php">Social Services</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo $url;?>fellowships.php">Fellowship</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="results.php" data-bs-toggle="dropdown" role="button" id="navbarDropdown">Members <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu nav-list py-0 dropdown-menu-center" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>membership-types.php">Membership Types</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>membership-privileges.php">Membership Privileges</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://forms.gle/soJhtdWtj7BufVLCA" target="_blank">Membership Form</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>student-club-members.php">Student Club Members</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>faculty-club-members.php">Faculty Club Members</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>achievers-club-members.php">Achievers Club Members</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>institute-university-hospital-industrial-members.php">Institute University Hospital Industrial Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="awards.php" data-bs-toggle="dropdown" role="button" id="navbarDropdown">Awards <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu nav-list py-0 dropdown-menu-center" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>awards.php">Research Awards</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $url;?>academic-awards.php">Academic Award</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://gloriousjournal.com/" target="_blank">GIJNR Journal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url;?>contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="<?php echo $url;?>js/jquery.min.js"></script>
    <script type="text/javascript">
    // Hide header on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If scrolled down and past the navbar, add class .nav-up.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
    
        lastScrollTop = st;
    }
    </script> 
    <!-- hero-sec -->