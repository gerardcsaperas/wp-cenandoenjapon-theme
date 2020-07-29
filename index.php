<?php get_header(); ?>

<div class="wrapper">
<?php if(have_posts()) {
    while(have_posts()) {
    the_post(); ?>
    <div class="post-box">
        <?php the_post_thumbnail('large'); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    </div>
    <?php }
} ?>
</div>

<?php get_footer(); ?>