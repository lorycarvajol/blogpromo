<?php get_header(); ?>
<main>
    <section class="banner">
        <h1><?php bloginfo('name'); ?></h1>
    </section>
    <section class="section-articles">
        <div class="container-articles">
            <?php while (have_posts()) : the_post(); ?>
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

    <section class="review">
        <button id="before">
            < </button>
                <?php
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'post_type' => 'apprenant',
                ));
                if ($posts) {
                    $i = 1;
                    foreach ($posts as $post) { ?>
                        <div class="reviewdiv" id="<?= $i;
                                                    $i++; ?>">
                            <h3><?php the_title(); ?></h2>
                                <p><?php echo get_fields()['avis']; ?></p>
                                <div class="image">
                                    <?php
                                    switch (get_fields()['note']) {
                                        case 0:
                                    ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 0.5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 1:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 1.5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 2:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 2.5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 3:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 3.5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 4:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 4.5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                        <?php
                                            break;
                                        case 5:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                    <?php
                                            break;
                                    }
                                    ?>
                                </div>
                        </div><?php }
                        } ?>
                <button id="after"> > </button>
    </section>
</main>
<?php get_footer(); ?>
<script>
    
</script>