<?php get_header(); ?>
<div class="promo">
    <section>
        <div class="promo-container">
            <div class="container">
                <div class="carousel">
                    <?php
                    $i = 1;
                    $args = array(
                        'post_type' => 'apprenant',
                        'posts_per_page' => 10
                    );
                    $wp_query = new WP_Query($args);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <input type="radio" name="slides" checked="checked" id="slide-<?= $i++;
                                                                                        $i ?>">
                    <?php endwhile; ?>
                    <ul class="carousel__slides">
                        <?php
                        $args = array(
                            'post_type' => 'apprenant',
                            'posts_per_page' => 10
                        );
                        $wp_query = new WP_Query($args);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <li class="carousel__slide">
                                <figure>
                                    <div>
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <figcaption>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        <span class="credit">Photo: Tim Marshall</span>
                                    </figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <ul class="carousel__thumbnails">
                        <?php
                        $i = 1;
                        $args = array(
                            'post_type' => 'apprenant',
                            'posts_per_page' => 10
                        );
                        $wp_query = new WP_Query($args);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <li>
                                <label for="slide-<?= $i++;
                                                    $i ?>"><?php the_post_thumbnail(); ?></label>
                            </li>
                        <?php endwhile; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>