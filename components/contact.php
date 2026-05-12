<!-- contact us -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<section class="contact-us section-padding pb-0 custom-overflow-hidden">
    <div class="container custom-container-width">
        <div class="row justify-content-center">
            <div class="col-md-6" data-aos="fade-right">
                <h5 class="text-uppercase text-grey main_header mb-4">Contact Us</h5>
                
                <div class="contact_blk">
                    <div class="contact_blk_heading">
                        <div class="contact_blk_img d-flex">
                            <div class="contact_blk_icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact_blk_content">
                                <span class="txt-warning">Email Address</span>
                            </div>
                        </div>
                        <ul class="contact_list mb-0 p-0">
                            <li><a class="txt-primary" href="mailto:<?php echo $email;?>"><?php echo $email;?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact_blk">
                    <div class="contact_blk_heading">
                        <div class="contact_blk_img d-flex">
                            <div class="contact_blk_icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact_blk_content">
                                <span class="txt-warning">Address</span>
                            </div>
                        </div>
                        <ul class="contact_list mb-0 p-0">
                            <li><?php echo $address1;?> <?php echo $address2;?>, <?php echo $city;?> <?php echo $state;?>, <?php echo $country;?> - <?php echo $zipcode;?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h5 class="text-uppercase text-grey main_header mb-4">For enquire Call Us at:</h5>
                <div class="contact_blk">
                    <div class="contact_blk_heading">
                        <div class="contact_blk_img d-flex align-items-center">
                            <div class="contact_blk_icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact_blk_content">
                                <span class="txt-warning">Phone Number</span>
                            </div>
                        </div>
                        <ul class="contact_list mb-0 p-0">
                            <li><a class="txt-primary" href="tel:<?php echo $contact;?>">
                                    <?php echo formatPhoneNumber($contact);?></a></li>
                        </ul>
                    </div>
                </div>
                <!--  -->

            </div>
            
        </div>
        <!--  -->

    </div>
</section>
<!--  -->