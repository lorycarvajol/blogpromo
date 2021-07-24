<?php get_header(); ?>

<div class="page-article">
    <h1>Les articles de la promo 49</h1>
    <div class="article-search">

    </div>
    <section class="section-articles">
        <h2>Les derniers articles</h2>
        <div class="container-articles">
            <?php while (have_posts()) :  the_post(); ?>
                <article class="accueil-articles">
                    <div class="article">
                        <?php the_post_thumbnail('medium'); ?>

                        <div class="description">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="desc-btn">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px" alt="" /></a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>

</div>




