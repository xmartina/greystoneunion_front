<?php
$page_name = 'Contact';
include_once 'layout/header.php';
include_once 'layout/breadcrumb.php';
?>


<section class="pt-100 pb-100">
    <div class="container">
        <div class="row gy-4 justify-content-center pb-50">
            <div class="col-xl-6 col-lg-5 order-lg-1 order-2">
                <div class="map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15248.978521521234!2d-73.75141171038925!3d40.67880542694389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1628170138354!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 order-lg-2 order-1">
                <div class="contact-form-wrapper">
                    <h2 class="title">Feel free to contact us</h2>
                    <form action="#" method="post">
                        <input type="hidden" name="_token" value="UG60kz8dVFxWuK739qKuMEoVtUioo3JVTbcyDlwT">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="custom-icon-field">
                                        <i class="las la-user"></i>
                                        <input name="name" type="text" class="form-control form--control"
                                               placeholder="Your Name" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="custom-icon-field">
                                        <i class="las la-envelope"></i>
                                        <input name="email" id="email" type="text" placeholder="Enter E-Mail Address"
                                               class="form--control" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <div class="custom-icon-field">
                                        <i class="las la-clipboard-list"></i>
                                        <input name="subject" id="subject" type="text" placeholder="Write your subject"
                                               class="form--control" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 form-group">
                                <label>Message</label>
                                <div class="custom-icon-field">
                                    <textarea name="message" wrap="off" placeholder="Write your message"
                                              class="form--control" required></textarea>
                                    <i class="las la-comment"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn--base w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <h3 class="fw-bold mb-4">Quick Information</h3>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card section--bg2">
                    <div class="contact-info-card__icon">
                        <i class="fas fa-map-marked"></i></div>
                    <div class="contact-info-card__content">
                        <h4 class="title">Office Address</h4>
                        <a href="javascript:void(0)">521 Industrial Drive, Pennington Gap, VA 24277</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card section--bg2">
                    <div class="contact-info-card__icon">
                        <i class="fas fa-envelope"></i></div>
                    <div class="contact-info-card__content">
                        <h4 class="title">Email Address</h4>
                        <a href="javascript:void(0)">support@palmtrustinternational.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card section--bg2">
                    <div class="contact-info-card__icon">
                        <i class="fas fa-phone"></i></div>
                    <div class="contact-info-card__content">
                        <h4 class="title">Mobile Number</h4>
                        <a href="javascript:void(0)">+ 1 (276) 546 7598</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'layout/footer.php';
?>
