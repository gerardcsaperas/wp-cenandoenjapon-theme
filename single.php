<?php get_header();

while(have_posts()) {
    the_post();
    ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>
        </div>
        </div>
    <div class="single-post-box">
        <h2 id="single-h2"><?php the_title(); ?></h2>
            <p class="date"><?php the_date(); ?><p>
        <?php
        the_content();
        ?>
        <nav id="prev-next-posts">  
            <?php previous_post_link( $format = '%link', $link = 'Anterior', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>
            <?php next_post_link( $format = '%link', $link = 'Siguiente', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>
        </nav>
    </div>
</div>
<?php }

get_footer();

?>