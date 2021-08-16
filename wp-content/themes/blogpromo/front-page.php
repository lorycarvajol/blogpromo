<?php get_header(); ?>
<main>
    <section class="banner">
        <h1><?php bloginfo('name'); ?></h1>
    </section>
    <section class="section-articles">
        <div class="container-articles">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => '3'
            );
            $wp_query = new WP_Query($args);
            while ($wp_query->have_posts()) : the_post() ?>
                <article class="accueil-articles">
                    <div class="article">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="description">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="pulse">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px" alt="" /></a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="review" id="slider">
        <div id="before">
            < </div>
                <div id="slide"></div>
                <?php
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'post_type' => 'apprenant',
                ));
                if ($posts) {
                    $i = 0;
                    foreach ($posts as $post) { ?>
                        <div class="reviewdiv">
                            <h3><?php the_title(); ?></h2>
                                <p><?php echo get_fields()['avis']; ?></p>
                                <div class="image">
                                    <?php
                                    switch (get_fields()['note']) {
                                        case 0:
                                    ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 0.5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 1:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 1.5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 2:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 2.5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 3:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 3.5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 4:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/empty_star.png" alt="" />
                                        <?php
                                            break;
                                        case 4.5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/half_star.png" alt="" />
                                        <?php
                                            break;
                                        case 5:
                                        ?>
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                            <img class="img" src="<?php echo get_template_directory_uri(); ?>./assets/full_star.png" alt="" />
                                    <?php
                                            break;
                                    }
                                    ?>
                                </div>
                        </div><?php }
                        } ?>
                <div id="after">
                    > </div>
    </section>
</main>
<?php get_footer(); ?>

<script>
    const next = document.getElementById('after')
    const previous = document.getElementById('before')
    var slide = Array.from(document.getElementsByClassName('reviewdiv'));
    var numero = 0;

    document.getElementById("slide").setAttribute('class', 'sliderDiv');
    document.getElementById("slide").innerHTML = slide[0].innerHTML;

    next.addEventListener('click', function() {
        numero = numero + 1;
        if (numero < 0)
            numero = slide.length - 1;
        if (numero > slide.length - 1)
            numero = 0;
        document.getElementById("slide").setAttribute('class', 'sliderDiv');
        document.getElementById("slide").innerHTML = slide[numero].innerHTML;
    })

    previous.addEventListener('click', function() {
        numero = numero + -1;
        if (numero < 0)
            numero = slide.length - 1;
        console.log(numero)
        if (numero > slide.length - 1)
            numero = 0;
        document.getElementById("slide").setAttribute('class', 'sliderDiv');
        document.getElementById("slide").innerHTML = slide[numero].innerHTML;
    })
</script>