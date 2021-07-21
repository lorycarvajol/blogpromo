<?php get_header(); ?>
<main>
    <section class="banner">
        <h1><?php bloginfo('name'); ?></h1>
    </section>
    <section class="last-articles">
        <h2>Les derniers articles</h2>
        <?php while (have_posts()) :  the_post(); ?>
            <article class="accueil-articles">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h2><?php the_title(); ?></h2>
                </a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Lire la suite...</a>
            </article>
        <?php endwhile; ?>
    </section>
</main>
<?php get_footer(); ?>