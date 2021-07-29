<?php get_header(); ?>
<div class="singpost-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">

                <h1><?php the_title(); ?></h1>
                <div class="post__meta">
                    <div class="blocdesc">
                        <p>Par <?php the_author(); ?></p>
                    </div>

                    <div class="blocdesc">
                        <p>Publié le :<?php the_date(); ?></p>
                    </div>
                    <div class="blocdesc">
                        <p>Dans la catégorie :<?php the_category(); ?></p>
                    </div>
                </div>
                <div class="blocPost">
                    <p><?php the_post_thumbnail('medium'); ?></p>
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
    <?php endwhile;
    endif; ?>
</div>
<?php get_footer(); ?>