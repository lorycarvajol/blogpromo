<?php get_header(); ?>

<div class="present-container">
    <h1 class="title-present">Nos présentations</h1>
    <?= get_search_form(); ?>
    <div class="bloc-present">
        <div class="present-item">
            <div class="present-content">
            <h2>hfgfjfjf</h2>
            <p>gfjgfhgdhgdg hjgfjfhgfghfhg dhghghgfhgfj hgfjhfjhfjhv</p>
            <a href="">
                <div class="presentBtn">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px" alt="" />
                </div>
            </a>
        </div>
        </div>
        <?php
        $args = array(
            'post_type' => 'presentation',
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : the_post() ?>
            <h1> <?php the_title(); ?> </h1>
            <p> <?php the_content(); ?> </p>
            <a href="<?php the_permalink(); ?>"></a>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</div>








<?php get_footer(); ?>