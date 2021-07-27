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

    <?php
    global $wp_query; // you can remove this line if everything works for you

    // don't display the button if there are not enough posts
    if ($wp_query->max_num_pages > 1)
        echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
    ?>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    jQuery(function($) { // use jQuery code inside this to avoid "$ is not defined" error
        $('.misha_loadmore').click(function() {

            var button = $(this),
                data = {
                    'action': 'loadmore',
                    'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                    'page': misha_loadmore_params.current_page
                };

            $.ajax({ // you can also use $.post here
                url: misha_loadmore_params.ajaxurl, // AJAX handler
                data: data,
                type: 'POST',
                beforeSend: function(xhr) {
                    button.text('Loading...'); // change the button text, you can also add a preloader image
                },
                success: function(data) {
                    console.log(data)
                    if (data) {
                        button.text('More posts').prev().before(data); // insert new posts
                        misha_loadmore_params.current_page++;

                        if (misha_loadmore_params.current_page == misha_loadmore_params.max_page)
                            button.remove(); // if last page, remove the button

                        // you can also fire the "post-load" event here if you use a plugin that requires it
                        // $( document.body ).trigger( 'post-load' );
                    } else {
                        button.remove(); // if no data, remove the button as well
                    }
                }
            });
        });
    });
</script>