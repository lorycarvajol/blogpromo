<?php get_header(); ?>

<div class="page-article">
    <h1>Les articles de la promo 49</h1>
    <div class="cat">
        <?php wp_list_categories(); ?>
        <?php $categories = get_the_category();
        $category = $categories[0]->cat_ID; ?>
    </div>
    <section class="section-articles">

        <h2>Les derniers articles</h2>
        <div class="container-articles">
            <?php echo do_shortcode('[ajaxloadmoreblogdemo post_type="post" initial_posts="9" loadmore_posts="4" category_id="' . $category . '"]') ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>