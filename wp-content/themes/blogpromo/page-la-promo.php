<?php get_header(); ?>
<div class="promo">
    <section>
        <div class="promo-container">
            <div class="container">
                <div class="carousel">
                    <?php
                    $args = array(
                        'post_type' => 'apprenant',
                    );
                    $wp_query = new WP_Query($args);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <input type="radio" name="slides" checked="checked" id="slide-<?php $id;
                                                                                        $id++; ?>">
                        <ul class="carousel__slides">
                            <li class="carousel__slide">
                                <figure>
                                    <div>
                                        <img src="" alt="">
                                    </div>
                                    <figcaption>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        <span class="credit">Photo: Tim Marshall</span>
                                    </figcaption>
                                    <h3><?php the_title(); ?></h3>
                                </figure>
                            </li>
                        </ul>
                        <ul class="carousel__thumbnails">
                            <li>
                                <label for="slide-1"><?php the_post_thumbnail(); ?></label>
                            </li>
                        </ul>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>