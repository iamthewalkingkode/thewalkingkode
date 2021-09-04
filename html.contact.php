<section class="pt-page pt-page-5" data-id="contact">
    <div class="section-title-block">
        <h2 class="section-title">Contact</h2>
        <h5 class="section-description">Get in Touch</h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Hire me</h3>
            </div>
            <!--            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>-->
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                </div>
                <div class="ci-text">
                    <h5>Odorkor Official Town. Accra, Ghana</h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-mail"></i>
                </div>
                <div class="ci-text">
                    <h5><a href="mailto:iam@thewalkingkode.com" class="__cf_email__">[iam@thewalkingkode.com]</a></h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-call"></i>
                </div>
                <div class="ci-text">
                    <h5>+233 (0) 26 29 88 710</h5>
                    <h5>+233 (0) 24 95 67 265</h5>
                    <h5>+233 (0) 20 81 25 139</h5>
                </div>
            </div>
            <div class="contact-info-block">
                <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-check"></i>
                </div>
                <div class="ci-text">
                    <h5>Freelance: Available</h5>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Contact Form</h3>
            </div>
            <form id="contact-form" method="post" action="mail.send.php">
                <div class="messages"></div>
                <div class="controls">
                    <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-user"></i>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-envelope"></i>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                        <div class="form-control-border"></div>
                        <i class="form-control-icon fa fa-comment"></i>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>
                    <input type="submit" class="button btn-send" value="Send message">
                </div>
            </form>
        </div>
    </div>
</section>
