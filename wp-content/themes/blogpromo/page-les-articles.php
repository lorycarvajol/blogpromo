<?php get_header(); ?>

<div class="page-article">
    <h1>Les articles de la promo 49</h1>
    <div class="article-search">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" value="<?= get_search_query() ?>">
        <input type="image" alt="Search"  class="search-submit" src="<?php bloginfo( 'template_url' ); ?>./assets/loupe.png" value="search"/>
            
        <input type="text" class="search-field" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Rechercher un article..."/>
            


        </form>
    </div>

    <section class="section-articles">
        <h2>Les derniers articles</h2>
        <div class="container-articles">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $wp_query = new WP_Query($args);
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
            ?>
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