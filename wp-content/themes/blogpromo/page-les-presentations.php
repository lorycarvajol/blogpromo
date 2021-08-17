<?php get_header(); ?>
<div class="present-container">
    <h1 class="title-present">Nos présentations</h1>
    <div class="bloc-present">
        <?php
        $args = array(
            'post_type' => 'presentation',
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : the_post() ?>
            <div class="present-item">
                <div class="present-content buttonBox" id="first">
                    <div class="border"></div>
                    <div class="border"></div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</div>








<?php get_footer(); ?>