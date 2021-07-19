<?php get_header(); ?>
<main>
    <h1><?php bloginfo(''); ?></h1>
    <?php while (have_posts()) :  the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
            </a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">
                Lire
        </article>
    <?php endwhile; ?>

</main>
<?php get_footer(); ?>