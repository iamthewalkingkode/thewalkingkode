<section class="pt-page pt-page-4" data-id="portfolio">
    <div class="section-title-block">
        <h2 class="section-title">Portfolio</h2>
        <h5 class="section-description">My Best Works</h5>
    </div>

    <div class="portfolio-content">
        <ul id="portfolio_filters" class="portfolio-filters">
            <li class="active">
                <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
            </li>
            <li>
                <a class="filter btn btn-sm btn-link" data-group="webapp">Web Apps</a>
            </li>
            <li>
                <a class="filter btn btn-sm btn-link" data-group="mobile">Mobile Apps</a>
            </li>
            <li>
                <a class="filter btn btn-sm btn-link" data-group="website">Websites</a>
            </li>
        </ul>

        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">
            <?php shuffle($portfolio); foreach($portfolio as $prj) : ?>
            <figure class="item" data-groups='["all", "<?php echo $prj['type']; ?>"]'>
                <a class="ajax-page-load" href="<?php echo 'html.portfolio.single.php?slug='.$prj['slug']; ?>">
                    <img src="<?php echo 'assets/img/portfolio/'.$prj['image'][0]; ?>" alt="<?php echo $prj['name']; ?> - TheWalkingKode">
                    <div>
                        <h5 class="name"><?php echo $prj['name']; ?></h5>
                        <small><?php echo ucwords($prj['type']); ?></small>
                    </div>
                </a>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
