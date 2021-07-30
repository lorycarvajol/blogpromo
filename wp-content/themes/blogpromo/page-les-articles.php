<?php get_header(); ?>

<div class="page-article">
    <h1>Les articles de la promo 49</h1>
    <div class="cat">
        <?php wp_list_categories() ?>
    </div>
    <section class="section-articles">
        <h2>Les derniers articles</h2>
        <div class="container-articles">
            <?php the_content(); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>