<?php get_header(); ?>

<main>

    <?php while (have_posts()) :  the_post(); ?>
    <h2><?php bloginfo('title-tag'); ?></h2>
    <p>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width=800px; height=auto;">
    </p>
        
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>