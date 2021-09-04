<section class="pt-page pt-page-3" data-id="resume">
    <div class="section-title-block">
        <h2 class="section-title">Resume</h2>
        <h5 class="section-description"><?php echo date('Y') - 2015; ?> Years of Experience</h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-8 subpage-block">
            <div class="block-title">
                <h3>Experience</h3>
            </div>
            <div class="timeline">
                <?php foreach($experience as $exp) : ?>
                <div class="timeline-event te-primary">
                    <h5 class="event-date"><?php echo $exp['date']; ?></h5>
                    <h4 class="event-name"><?php echo $exp['position']; ?></h4>
                    <span class="event-description"><?php echo $exp['company']; ?></span>
                    <p><?php //echo $exp['message']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 subpage-block">
            <div class="block-title">
                <h3>Design Skills</h3>
            </div>
            <div class="skills-info">
                <h4>Web Design</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-4"></div>
                </div>

                <h4>Graphic Design</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-3"></div>
                </div>

                <h4>Bootstrap</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-6"></div>
                </div>

                <h4>HTML5, CSS3</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-4"></div>
                </div>
            </div>

            <div class="block-title">
                <h3>Coding Skills</h3>
            </div>
            <div class="skills-info">
                <h4>PHP</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-4"></div>
                </div>

                <h4>MySQL</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-5"></div>
                </div>

                <h4>ReactJS</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-3"></div>
                </div>

                <h4>AngularJS</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-6"></div>
                </div>

                <h4>IonicFramework</h4>
                <div class="skill-container">
                    <div class="skill-percentage skill-5"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="download-cv-block">
                <a class="button" target="_blank" href="assets/my-cover-resume.pdf">Download CV</a>
            </div>
        </div>
    </div>
</section>
