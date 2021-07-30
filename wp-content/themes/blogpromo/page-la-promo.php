<?php get_header(); ?>
        <div class="container-promo">
            <div class="slide" id="slide">
                <?php
                $args = array(
                    'post_type' => 'apprenant',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()) : the_post() ?>
                    <div class="present-item apprenant">
                        <div class="present-content">
                            <h3><?php the_title(); ?></h3>
                            <?php the_post_thumbnail('medium'); ?>
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
            const slide = document.getElementById('slide')
            const apprenant = Array.from(document.getElementsByClassName('apprenant')).length;

            slide.style.width = apprenant + '00%';
            const previous = document.getElementById('previous')
            const next = document.getElementById('next')
            let i = 1

            next.addEventListener('click', function() {
                let width = document.getElementsByClassName('apprenant')[0].clientWidth;
                if (i < apprenant) {
                    slide.style.marginLeft = '-' + i + '00%';
                    i++
                } else if (i = apprenant - 1) {
                    slide.style.marginLeft = '0px';
                    i = 1
                }
            })
        </script>