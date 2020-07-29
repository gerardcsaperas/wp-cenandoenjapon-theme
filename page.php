<?php

    get_header();

    while(have_posts()) {
        the_post(); ?>
        <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>
        </div>
        <div class="single-post-box">
            <h1 class="page-banner__title"><?php the_title();?></h1>
            <hr>
                <?php the_content(); ?>
        </div>


    <?php }

    get_footer();

?>