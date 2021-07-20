<?php get_header(); ?>
<main>
   
    <?php while (have_posts()) :  the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?>">
                <p><?php the_post_thumbnail('medium_large'); ?></p>
                <h2><?php the_title(); ?> - <?php the_author() ?>  </h2>
            </a>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">
               <p> Lire</p>
        </article>
    <?php endwhile; ?>

</main>
<?php get_footer(); ?>