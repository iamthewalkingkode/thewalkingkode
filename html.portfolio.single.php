<?php include('data.php');
$slug = isset($_GET['slug'])?$_GET['slug']:'';
foreach($portfolio as $prjj) {
    if($prjj['slug'] == $slug){
        $prj = $prjj;
    }
}
?>
<div id="portfolio-page" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>Portfolio Project</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <?php foreach($prj['image'] as $image): ?>
                    <div class="item">
                        <img src="<?php echo 'assets/img/portfolio/'.$image; ?>" alt="<?php echo $prj['name']; ?> - TheWalkingKode">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <div class="block-title">
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
                    <li>
                        <p><i class="fa fa-user"></i> <?php echo $prj['client']; ?></p>
                    </li>
                    <?php if(isset($prj['url']) == true): ?>
                    <li>
                        <p><i class="fa fa-globe"></i> <a href="https://<?php echo $prj['url']; ?>" target="_blank">www.<?php echo $prj['url']; ?></a></p>
                    </li>
                    <?php endif; ?>
                    <li>
                        <p><i class="fa fa-calendar"></i> <?php echo $prj['date']; ?></p>
                    </li>
                </ul>

                <p class="text-justify"><?php echo $prj['desc']; ?></p>
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technologies</h3>
                    </div>
                    <?php $techs = explode(',', $prj['techs']); ?>
                    <ul class="tags">
                        <?php foreach($techs as $tech): ?>
                        <li><a><?php echo $tech; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!--
                <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                </div>
-->

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.portfolio-page-carousel').owlCarousel({
            smartSpeed: 1200,
            items: 1,
            loop: true,
            dots: true,
            nav: true,
            navText: false,
            margin: 10
        });
    });

</script>
