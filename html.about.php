<section class="pt-page pt-page-2" data-id="about_me">
    <div class="section-title-block">
        <h2 class="section-title">About Me</h2>
        <h5 class="section-description">Artist, Thinker, Creative Doer</h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="general-info">
                <h3>I am Software Developer/Designer</h3>
                <p>Hi! My name is Emmanuel Anyele. I am a Software Developer, and I'm very passionate and dedicated to my work. With <b><?php echo date('Y') - 2015; ?> years</b> experience as a professional developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the developing process, from discussion and collaboration to concept and execution, but I find the most satisfaction in seeing the finished product do everything for you that it was created to do. </p>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 subpage-block">
            <div class="block-title">
                <h3>Testimonials</h3>
            </div>
            <div class="testimonials owl-carousel">
                <?php foreach($testimonials as $tst): ?>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <p>"<?php echo $tst['message']; ?>"</p>
                        </div>
                    </div>
                    <div class="testimonial-credits">
                        <div class="testimonial-picture">
                            <img src="assets/img/testimonials/testimonila_photo_2.png" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <p class="testimonial-author"><?php echo $tst['name']; ?></p>
                            <p class="testimonial-firm"><?php echo $tst['company']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>



    <div class="block-title">
        <h3>Services</h3>
    </div>
    <div class="row">
        <?php foreach($services as $srv): ?>
        <div class="col-sm-6 col-md-4 subpage-block">
            <div class="service-block">
                <div class="service-info">
                    <img src="assets/img/service/<?php echo $srv['icon']; ?>.png" alt="<?php echo $srv['name']; ?> - TheWalkingKode">
                    <h4><?php echo $srv['name']; ?></h4>
                    <p><?php echo $srv['desc']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>




    <!--
    <div class="block-title">
<h3>Fun Facts</h3>
</div>
<div class="row">
    <div class="col-sm-6 col-md-3 subpage-block">
        <div class="fun-fact-block gray-bg">
            <i class="pe-7s-icon pe-7s-smile"></i>
            <h4>Happy Clients</h4>
            <span class="fun-value">1,024</span>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 subpage-block">
        <div class="fun-fact-block">
            <i class="pe-7s-icon pe-7s-alarm"></i>
            <h4>Working Hours</h4>
            <span class="fun-value">6,256</span>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 subpage-block">
        <div class="fun-fact-block gray-bg">
            <i class="pe-7s-icon pe-7s-medal"></i>
            <h4>Awards Won</h4>
            <span class="fun-value">21</span>
        </div>
    </div>

    <div class="col-sm-6 col-md-3 subpage-block">
        <div class="fun-fact-block">
            <i class="pe-7s-icon pe-7s-coffee"></i>
            <h4>Coffee Consumed</h4>
            <span class="fun-value">20,000</span>
        </div>
    </div>
</div>
-->
</section>
