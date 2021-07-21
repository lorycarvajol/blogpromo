<?php get_header();
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
wp_reset_query();
get_footer(); ?>