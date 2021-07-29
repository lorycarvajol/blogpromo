<?php get_header(); ?>
<button id="previous">
    < </button>
        <div class="container-promo">
            <div class="slide">
                <?php
                $args = array(
                    'post_type' => 'apprenant',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()) : the_post() ?>
                    <div class="present-item">
                        <div class="present-content">
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>">Lein</a>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>
        <button id="next">
            > </button>
        <?php get_footer(); ?>

        <script>
            const slide = document.getElementsByClassName('slide')
            const previous = document.getElementById('previous')
            const next = document.getElementById('next')

            next.addEventListener('click', function(){

            })
        </script>