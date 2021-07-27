<?php get_header(); ?>

<div class="page-article">
    <h1>Les articles de la promo 49</h1>
    <div class="article-search">
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

            <input type="image" src="<?php echo get_template_directory_uri(); ?>./assets/loupe.png" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />

            <input type="search" class="search-field" placeholder="Rechercher un article..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
        </form>
    </div>

    <section class="section-articles">
        <h2>Les derniers articles</h2>
        <div class="container-articles">
            <?php the_content(); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>